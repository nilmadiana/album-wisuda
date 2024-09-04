<?php

namespace App\Http\Controllers;

use App\Enums\Jurusan;
use App\Models\Wisudawan;
use Illuminate\Http\Request;

class WisudawanController extends Controller
{
    public function index()
    {
        $wisudawans = Wisudawan::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.wisudawan.wisudawan', compact('wisudawans'));
    }

    public function create()
    {
        $jurusans = Jurusan::getLabels();
        return view('Admin.wisudawan.create', compact('jurusans'));
    }

    public function store(Request $request)
    {
        $rules = $request->validate([
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'ipk' => 'required|string|max:4',
            'jurusan' => 'required|in:' . implode(',', Jurusan::getValues()),
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $fotoName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('/assets/wisudawan_terbaik'), $fotoName);
            $rules['foto'] = 'assets/wisudawan_terbaik/' . $fotoName;
        }

        Wisudawan::create($rules);

        return redirect()->route('Admin.wisudawan.wisudawan')->with('success', 'Wisudawan added successfully');
    }

    public function show(Wisudawan $wisudawan)
    {
        return view('Admin.wisudawan.show', compact('wisudawan'));
    }

    public function edit($id)
    {
        $wisudawan = Wisudawan::findOrFail($id);
        $jurusans = Jurusan::getLabels();
        return view('Admin.wisudawan.update', compact('wisudawan', 'jurusans'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'ipk' => 'required|string|max:4',
            'jurusan' => 'required|in:' . implode(',', Jurusan::getValues()),
            'foto' => 'nullable|image|max:2048',
        ];

        $validated = $request->validate($rules);

        if ($request->hasFile('foto')) {
            $fotoName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('/assets/wisudawan_terbaik'), $fotoName);
            $validated['foto'] = 'assets/wisudawan_terbaik/' . $fotoName;
        }

        $wisudawan = Wisudawan::findOrFail($id);

        $wisudawan->update($validated);

        return redirect()->route('Admin.wisudawan.wisudawan')->with('success', 'Wisudawan updated successfully');
    }

    public function destroy($id)
    {
        $wisudawan = Wisudawan::findOrFail($id);

        if ($wisudawan->foto) {
            $fotoPath = public_path('assets/wisudawan_terbaik/' . $wisudawan->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }

        $wisudawan->delete();

        return redirect()->route('Admin.wisudawan.wisudawan')->with('success', 'Wisudawan deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query3');

        $wisudawans = Wisudawan::where('nama', 'like', "%{$query}%")
            ->orWhere('judul', 'like', "%{$query}%")
            ->orWhere('ipk', 'like', "%{$query}%")
            ->orWhere('jurusan', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('Admin.wisudawan.wisudawan', compact('wisudawans'));
    }
}

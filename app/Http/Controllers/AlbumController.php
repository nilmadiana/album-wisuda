<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.album.album', compact('albums'));
    }

    public function create()
    {
        return view('Admin.album.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'file' => 'nullable|file|mimes:pdf|max:2048',
            'tahun' => 'required|string|max:255',
            'undangan' => 'nullable|file|mimes:pdf|max:2048',
            'total' => 'required|string|max:255',
            's1_pai' => 'required|string|max:255',
            's1_mpi' => 'required|string|max:255',
            's1_pgmi' => 'required|string|max:255',
            's2_pai' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $coverName = time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('/assets/cover_album'), $coverName);
            $validated['cover'] = 'assets/cover_album/' . $coverName;
        }

        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/assets/album'), $fileName);
            $validated['file'] = 'assets/album/' . $fileName;
        }

        if ($request->hasFile('undangan')) {
            $undanganName = time() . '.' . $request->undangan->extension();
            $request->undangan->move(public_path('/assets/undangan'), $undanganName);
            $validated['undangan'] = 'assets/undangan/' . $undanganName;
        }

        Album::create($validated);

        return redirect()->route('Admin.album.album')->with('success', 'Album added successfully');
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('Admin.album.preview', compact('album'));
    }

    public function edit($id)
    {
        $album = Album::findOrFail($id);

        return view('Admin.album.update', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'file' => 'nullable|file|mimes:pdf|max:2048',
            'tahun' => 'required|string|max:255',
            'undangan' => 'nullable|file|mimes:pdf|max:2048',
            'total' => 'required|string|max:255',
            's1_pai' => 'required|string|max:255',
            's1_mpi' => 'required|string|max:255',
            's1_pgmi' => 'required|string|max:255',
            's2_pai' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $coverName = time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('/assets/cover_album'), $coverName);
            $validated['cover'] = 'assets/cover_album/' . $coverName;
        }

        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/assets/album'), $fileName);
            $validated['file'] = 'assets/album/' . $fileName;
        }

        if ($request->hasFile('undangan')) {
            $undanganName = time() . '.' . $request->undangan->extension();
            $request->undangan->move(public_path('/assets/undangan'), $undanganName);
            $validated['undangan'] = 'assets/undangan/' . $undanganName;
        }

        $album = Album::findOrFail($id);

        $album->update($validated);

        return redirect()->route('Admin.album.album')->with('success', 'Album updated successfully');
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        if ($album->cover) {
            $coverPath = public_path('assets/cover_album/' . $album->cover);
            if (file_exists($coverPath)) {
                unlink($coverPath);
            }
        }

        if ($album->file) {
            $filePath = public_path('assets/album/' . $album->file);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        if ($album->undangan) {
            $undanganPath = public_path('assets/undangan/' . $album->undangan);
            if (file_exists($undanganPath)) {
                unlink($undanganPath);
            }
        }

        $album->delete();

        return redirect()->route('Admin.album.album')->with('success', 'Album deleted successfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $albums = Album::where('judul', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('Admin.album.album', compact('albums'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Video;
use App\Models\Wisudawan;

class IndexController extends Controller
{
    public function index()
    {
        $albumTerbaru = Album::orderBy('created_at', 'desc')->take(8)->get();
        $videoTerbaru = Video::orderBy('created_at', 'desc')->take(2)->get();
        $wisudawanTerbaru = Wisudawan::orderBy('created_at', 'desc')->take(6)->get();

        return view('index', compact('albumTerbaru', 'videoTerbaru', 'wisudawanTerbaru'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query4');

        $albumTerbaru = Album::where('judul', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $videoTerbaru = Wisudawan::where('nama', 'like', "%{$query}%")
            ->orWhere('ipk', 'like', "%{$query}%")
            ->orWhere('jurusan', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $wisudawanTerbaru = Video::where('judul', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('index', compact('albumTerbaru', 'videoTerbaru', 'wisudawanTerbaru'));
    }
}

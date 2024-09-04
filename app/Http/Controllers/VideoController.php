<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    private function getYouTubeVideoId($url)
    {
        if (preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/(?:watch\?v=|embed\/|v\/|.+\?v=)?([^"&?\/\s]{11})/', $url, $matches)) {
            return $matches[1];
        }
        return null;
    }

    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->paginate(10)->map(function ($video) {
            $video->youtube_id = $this->getYouTubeVideoId($video->link);
            return $video;
        });

        return view('Admin.video.video', compact('videos'));
    }

    public function create()
    {
        return view('Admin.video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        Video::create($request->all());

        return redirect()->route('Admin.video.video')->with('success', 'Video created successfully');
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);

        return view('Admin.video.update', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        $video = Video::findOrFail($id);

        $video->update($request->all());

        return redirect()->route('Admin.video.video')->with('success', 'Video updated successfully');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);

        $video->delete();

        return redirect()->route('Admin.video.video')->with('success', 'Video deleted successfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query2');

        $videos = Video::where('judul', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('Admin.video.video', compact('videos'));
    }
}

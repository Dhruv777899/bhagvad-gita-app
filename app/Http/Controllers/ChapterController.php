<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::orderBy('chapter_number')->get();
        return view('chapters.index', compact('chapters'));
    }

    public function show(Chapter $chapter)
    {
        $chapter->load('verses');
        return view('chapters.show', compact('chapter'));
    }
}

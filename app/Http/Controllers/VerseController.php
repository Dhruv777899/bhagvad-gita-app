<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    public function show(Chapter $chapter, Verse $verse)
    {
        $verse->load('chapter');
        
        $nextVerse = Verse::where('chapter_id', $chapter->id)
            ->where('verse_number', $verse->verse_number + 1)
            ->first();
            
        $prevVerse = Verse::where('chapter_id', $chapter->id)
            ->where('verse_number', $verse->verse_number - 1)
            ->first();

        return view('verses.show', compact('chapter', 'verse', 'nextVerse', 'prevVerse'));
    }
}

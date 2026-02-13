<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use App\Models\Verse;

class BhagavadGitaSeeder extends Seeder
{
    public function run(): void
    {
        // Chapters
        $chaptersData = json_decode(file_get_contents('https://raw.githubusercontent.com/gita/gita/master/data/chapters.json'), true);
        
        foreach ($chaptersData as $data) {
            Chapter::create([
                'chapter_number' => $data['chapter_number'],
                'name' => $data['name'],
                'name_transliterated' => $data['name_transliterated'],
                'name_translated' => $data['name_translation'],
                'verses_count' => $data['verses_count'],
                'summary' => $data['chapter_summary'],
            ]);
        }

        // Verses
        $versesData = json_decode(file_get_contents('https://raw.githubusercontent.com/gita/gita/master/data/verse.json'), true);
        
        foreach ($versesData as $v) {
            $chapter = Chapter::where('chapter_number', $v['chapter_number'])->first();
            
            if ($chapter) {
                Verse::create([
                    'chapter_id' => $chapter->id,
                    'verse_number' => $v['verse_number'],
                    'text' => $v['text'],
                    'transliteration' => $v['transliteration'],
                    'word_meanings' => $v['word_meanings'],
                    'translation' => $v['title'], 
                ]);
            }
        }
    }
}

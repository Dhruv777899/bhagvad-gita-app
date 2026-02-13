<x-app-layout>
    <x-slot name="header">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <a href="{{ route('chapters.show', $chapter) }}" class="text-gray-400 hover:text-saffron transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div class="text-center">
                <p class="text-saffron uppercase tracking-widest text-xs font-bold mb-1">Chapter {{ $chapter->chapter_number }} • Verse {{ $verse->verse_number }}</p>
                <h2 class="font-serif text-2xl text-gray-800 leading-tight">
                    {{ $chapter->name }}
                </h2>
            </div>
            <div class="w-6"></div> <!-- Spacer for symmetry -->
        </div>
    </x-slot>

    <div class="py-12 bg-parchment min-h-screen">
        <div class="max-w-3xl mx-auto px-6">
            <!-- Verse Card -->
            <div class="bg-white rounded-3xl shadow-sm border border-orange-50 overflow-hidden mb-12">
                <div class="p-8 md:p-12 text-center space-y-10">
                    <!-- Sanskrit Text -->
                    <div class="space-y-4">
                        <p class="font-serif text-3xl md:text-4xl text-gray-900 leading-relaxed">
                            {!! nl2br(e($verse->text)) !!}
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="flex items-center justify-center space-x-4">
                        <div class="h-px w-12 bg-orange-100"></div>
                        <div class="text-saffron">☸</div>
                        <div class="h-px w-12 bg-orange-100"></div>
                    </div>

                    <!-- English Translation (Human Readable) -->
                    <div class="max-w-2xl mx-auto">
                        <h3 class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-4">Translation</h3>
                        <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-medium italic">
                            "{{ $verse->translation }}"
                        </p>
                    </div>

                    <!-- Transliteration & Meanings -->
                    <div class="pt-8 border-t border-orange-50 text-left space-y-8">
                        <div>
                            <h4 class="text-xs uppercase tracking-widest text-saffron font-bold mb-3">Transliteration</h4>
                            <p class="text-gray-500 italic leading-loose">
                                {!! nl2br(e($verse->transliteration)) !!}
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xs uppercase tracking-widest text-saffron font-bold mb-3">Word Meanings</h4>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                {!! nl2br(e($verse->word_meanings)) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex items-center justify-between">
                @if($prevVerse)
                    <a href="{{ route('verses.show', [$chapter, $prevVerse]) }}" class="flex items-center gap-2 px-6 py-3 bg-white text-gray-600 rounded-full border border-orange-50 hover:bg-orange-50 transition-colors shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Previous Verse
                    </a>
                @else
                    <div></div>
                @endif

                @if($nextVerse)
                    <a href="{{ route('verses.show', [$chapter, $nextVerse]) }}" class="flex items-center gap-2 px-6 py-3 bg-saffron text-white rounded-full hover:bg-orange-800 transition-colors shadow-lg shadow-orange-200">
                        Next Verse
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

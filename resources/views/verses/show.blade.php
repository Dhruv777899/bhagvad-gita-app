<x-app-layout>
    <div class="bg-parchment min-h-screen pb-24">
        <!-- Minimal Progress Header -->
        <div class="sticky top-0 z-10 bg-white/80 backdrop-blur-md border-b border-orange-50">
            <div class="max-w-3xl mx-auto px-6 h-16 flex items-center justify-between">
                <a href="{{ route('chapters.show', $chapter) }}" class="p-2 -ml-2 text-gray-400 hover:text-saffron transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <div class="text-center">
                    <p class="text-[10px] uppercase tracking-[0.2em] text-saffron font-bold">Chapter {{ $chapter->chapter_number }} • Verse {{ $verse->verse_number }}</p>
                    <h2 class="font-serif text-lg text-gray-800 leading-tight">{{ $chapter->name }}</h2>
                </div>
                <div class="w-10"></div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto px-6 pt-12">
            <!-- Verse Focus Area -->
            <div class="space-y-16">
                
                <!-- Sanskrit Section -->
                <div class="text-center space-y-8">
                    <p class="font-serif text-3xl md:text-4xl text-gray-900 leading-[1.8] antialiased">
                        {!! nl2br(e($verse->text)) !!}
                    </p>
                    <p class="text-gray-400 italic text-sm tracking-wide">
                        {!! nl2br(e($verse->transliteration)) !!}
                    </p>
                </div>

                <!-- Decorative Divider -->
                <div class="flex items-center justify-center space-x-6 opacity-30">
                    <div class="h-[1px] w-16 bg-gradient-to-r from-transparent to-saffron"></div>
                    <div class="text-saffron text-xl">☸</div>
                    <div class="h-[1px] w-16 bg-gradient-to-l from-transparent to-saffron"></div>
                </div>

                <!-- Translation Section (Human Readable) -->
                <div class="text-center space-y-6">
                    <h3 class="text-[11px] uppercase tracking-[0.3em] text-gray-400 font-bold">Translation</h3>
                    <p class="text-2xl md:text-3xl text-gray-800 leading-relaxed font-medium italic font-serif">
                        "{{ $verse->translation }}"
                    </p>
                </div>

                <!-- Word Meanings (Togglable or subtle) -->
                <div class="pt-12 border-t border-orange-50">
                    <details class="group">
                        <summary class="list-none cursor-pointer flex items-center justify-center space-x-2 text-gray-400 hover:text-saffron transition-colors uppercase text-[10px] tracking-widest font-bold">
                            <span>View Word Meanings</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="mt-8 p-8 bg-white rounded-3xl border border-orange-50 text-gray-600 leading-loose text-sm md:text-base">
                            {!! nl2br(e($verse->word_meanings)) !!}
                        </div>
                    </details>
                </div>
            </div>
        </div>

        <!-- Floating Navigation -->
        <div class="fixed bottom-8 left-0 right-0 px-6">
            <div class="max-w-md mx-auto bg-white/90 backdrop-blur-xl border border-orange-50 p-2 rounded-full shadow-2xl flex items-center justify-between">
                @if($prevVerse)
                    <a href="{{ route('verses.show', [$chapter, $prevVerse]) }}" class="p-4 text-gray-400 hover:text-saffron transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                @else
                    <div class="w-14"></div>
                @endif

                <a href="{{ route('chapters.show', $chapter) }}" class="text-[10px] uppercase tracking-widest font-bold text-gray-400 hover:text-saffron transition-colors">
                    All Verses
                </a>

                @if($nextVerse)
                    <a href="{{ route('verses.show', [$chapter, $nextVerse]) }}" class="p-4 bg-saffron text-white rounded-full hover:bg-orange-800 transition-all shadow-lg shadow-orange-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <div class="w-14"></div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

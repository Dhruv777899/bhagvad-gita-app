<x-guest-layout>
    <div class="py-12 bg-parchment min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl text-charcoal font-bold mb-2">The Chapters</h2>
                <p class="text-gray-500 italic">Select a chapter to begin your contemplation</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($chapters as $chapter)
                    <a href="{{ route('chapters.show', $chapter) }}" class="group bg-white p-8 rounded-2xl border border-orange-50 shadow-sm hover:shadow-xl hover:border-saffron transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-4 text-orange-100 font-serif text-6xl group-hover:text-orange-200 transition-colors">
                            {{ $chapter->chapter_number }}
                        </div>
                        
                        <div class="relative z-10">
                            <span class="text-saffron font-semibold tracking-widest text-xs uppercase block mb-2">Chapter {{ $chapter->chapter_number }}</span>
                            <h3 class="font-serif text-2xl text-charcoal mb-4">{{ $chapter->name_transliterated }}</h3>
                            <p class="text-gray-600 line-clamp-3 text-sm leading-relaxed mb-6">{{ $chapter->summary }}</p>
                            
                            <div class="flex items-center text-saffron text-sm font-bold uppercase tracking-wider">
                                <span>{{ $chapter->verses_count }} Verses</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="9 5l7 7-7 7"></path></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>

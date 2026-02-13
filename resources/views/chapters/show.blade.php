<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <p class="text-saffron uppercase tracking-widest text-sm font-semibold mb-2">Chapter {{ $chapter->chapter_number }}</p>
            <h2 class="font-serif text-4xl text-gray-800 leading-tight">
                {{ $chapter->name }}
            </h2>
            <p class="text-gray-500 italic mt-2">{{ $chapter->name_transliterated }}</p>
        </div>
    </x-slot>

    <div class="py-12 bg-parchment min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Chapter Summary -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-orange-50 mb-12">
                <h3 class="font-serif text-xl text-gray-800 mb-4 border-b border-orange-100 pb-2">Summary</h3>
                <p class="text-gray-600 leading-relaxed italic">{{ $chapter->summary }}</p>
            </div>

            <!-- Verses -->
            <div class="space-y-12">
                @foreach($chapter->verses as $verse)
                    <div class="relative pl-8">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-saffron rounded-full opacity-20"></div>
                        <div class="mb-4">
                            <span class="text-saffron font-serif font-bold text-lg">॥ {{ $chapter->chapter_number }}.{{ $verse->verse_number }} ॥</span>
                        </div>
                        <div class="space-y-6">
                            <p class="font-serif text-2xl md:text-3xl text-gray-800 leading-relaxed">
                                {!! nl2br(e($verse->text)) !!}
                            </p>
                            <div class="bg-white/50 p-6 rounded-xl border border-orange-50/50">
                                <p class="text-gray-500 italic text-lg leading-relaxed mb-4">
                                    {!! nl2br(e($verse->transliteration)) !!}
                                </p>
                                <div class="text-gray-600 leading-relaxed">
                                    <strong class="text-charcoal block mb-2">Word Meanings:</strong>
                                    {!! nl2br(e($verse->word_meanings)) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-24 text-center">
                <a href="{{ route('chapters.index') }}" class="text-saffron hover:text-orange-800 font-semibold flex items-center justify-center gap-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-7-7a1 1 0 010-1.414l7-7a1 1 0 011.414 1.414L4.414 9H17a1 1 0 110 2H4.414l5.293 5.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Back to Chapters
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

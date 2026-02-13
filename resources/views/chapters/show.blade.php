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
            <div class="space-y-6">
                @foreach($chapter->verses as $verse)
                    <a href="{{ route('verses.show', [$chapter, $verse]) }}" class="group block bg-white p-6 rounded-2xl shadow-sm border border-orange-50 hover:border-saffron transition-all hover:shadow-md">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <span class="text-saffron font-serif font-bold text-lg">॥ {{ $chapter->chapter_number }}.{{ $verse->verse_number }} ॥</span>
                                <p class="text-gray-600 line-clamp-1 italic">{{ $verse->translation }}</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-200 group-hover:text-saffron transition-colors" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </a>
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-3xl text-gray-800 leading-tight text-center">
            {{ __('Divine Chapters') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-parchment min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($chapters as $chapter)
                    <a href="{{ route('chapters.show', $chapter) }}" class="group block bg-white overflow-hidden shadow-sm hover:shadow-md rounded-2xl border border-orange-50 transition-all transform hover:-translate-y-1">
                        <div class="p-8 relative">
                            <div class="absolute top-4 right-6 text-orange-200 font-serif text-4xl group-hover:text-saffron transition-colors">
                                {{ str_pad($chapter->chapter_number, 2, '0', STR_PAD_LEFT) }}
                            </div>
                            <h3 class="font-serif text-2xl text-gray-800 mb-1">{{ $chapter->name }}</h3>
                            <p class="text-saffron font-medium mb-4 text-sm tracking-widest uppercase">{{ $chapter->name_transliterated }}</p>
                            <p class="text-gray-500 text-sm italic mb-6 line-clamp-2">{{ $chapter->name_translated }}</p>
                            
                            <div class="flex items-center justify-between mt-auto">
                                <span class="bg-orange-50 text-saffron text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-tighter">
                                    {{ $chapter->verses_count }} Verses
                                </span>
                                <span class="text-saffron group-hover:translate-x-2 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

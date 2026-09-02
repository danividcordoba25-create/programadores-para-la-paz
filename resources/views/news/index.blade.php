<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Noticias y Novedades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse($news as $item)
                        <div class="border rounded-lg overflow-hidden shadow-sm">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <span class="text-xs font-bold text-emerald-600 uppercase">{{ $item->semester }}</span>
                                <h3 class="font-bold text-xl text-gray-800 my-1">{{ $item->title }}</h3>
                                <p class="text-gray-600 text-sm">{{ $item->summary }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-2 text-center text-gray-500 py-4">No hay noticias publicadas por el momento.</p>
                    @endforelse
                </div>

                <div class="mt-6">
                    {{ $news->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
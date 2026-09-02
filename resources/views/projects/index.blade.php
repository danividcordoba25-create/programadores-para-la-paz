<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos Académicos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <!-- Formulario de búsqueda -->
                <form method="GET" action="{{ route('projects.index') }}" class="mb-6 flex gap-2">
                    <input 
                        type="text" 
                        name="search" 
                        value="{{ $search }}" 
                        placeholder="Buscar proyectos..." 
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                    >
                    <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-md hover:bg-emerald-700 transition">
                        Buscar
                    </button>
                </form>

                <!-- Listado agrupado por carrera -->
                @forelse($projectsGrouped as $degree => $groupProjects)
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-emerald-900 mb-4 border-b pb-2">{{ $degree }}</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach($groupProjects as $project)
                                <div class="border rounded-lg p-4 shadow-sm hover:shadow-md transition bg-white">
                                    <h4 class="font-bold text-lg text-emerald-800 mb-1">{{ $project->title }}</h4>
                                    <p class="text-sm text-gray-500 mb-2">{{ $project->degree }}</p>
                                    <p class="text-gray-700 text-sm mb-4">{{ Str::limit($project->description, 100) }}</p>
                                    
                                    @if($project->pdf_path)
                                        <a href="{{ asset('storage/' . $project->pdf_path) }}" target="_blank" class="text-blue-600 hover:underline text-sm font-semibold">
                                            Ver documento PDF
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">No se encontraron proyectos registrados.</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
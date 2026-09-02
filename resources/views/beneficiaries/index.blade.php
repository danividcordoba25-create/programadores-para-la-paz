<x-app-layout>
    <div class="bg-gray-50 min-h-screen pb-12">
        
        <!-- Banner Principal con Foto de Fondo -->
        <div class="relative bg-emerald-900 text-white min-h-[380px] flex items-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url('{{ asset('images/banner-fondo.jpg') }}');">
            
            <div class="absolute top-6 right-8">
                <button class="w-10 h-10 bg-amber-400 hover:bg-amber-500 rounded-full flex items-center justify-center text-emerald-950 shadow-lg transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-12">
                <span class="text-xs font-bold tracking-widest text-emerald-300 uppercase block mb-2">BIENVENIDOS AL PORTAL</span>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-4">Fondo Álvaro Ulcué Chocué</h1>
                <p class="max-w-2xl text-base md:text-lg text-gray-200 mb-6 leading-relaxed">
                    Educación que transforma comunidades. Conoce los proyectos y el servicio social de nuestros beneficiarios.
                </p>
                <a href="#beneficiarios-section" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-6 py-2.5 rounded-lg text-sm shadow-md transition">
                    CONOCE MÁS
                </a>
            </div>
        </div>

        <!-- Barra de Estadísticas Flotante -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-10 mb-10">
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                
                <a href="#beneficiarios-section" class="flex items-center justify-center space-x-4 border-r border-gray-100 last:border-none p-2 rounded-xl hover:bg-emerald-50/60 transition group">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center group-hover:scale-105 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <div class="text-left">
                    <span class="block text-2xl font-black text-gray-950">{{ $beneficiariesCount }}</span>
                    <span class="text-xs text-gray-500 font-medium group-hover:text-gray-700">Beneficiarios activos</span>

                    </div>
                </a>

                <a href="{{ route('projects.index') }}" class="flex items-center justify-center space-x-4 border-r border-gray-100 last:border-none p-2 rounded-xl hover:bg-emerald-50/60 transition group">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center group-hover:scale-105 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <div class="text-left">
                    <span class="block text-2xl font-black text-gray-950">{{ $projectsCount }}</span>
                    <span class="text-xs text-gray-500 font-medium group-hover:text-gray-700">Proyectos desarrollados</span>
    
                    </div>
                </a>

                <a href="{{ route('social-service.index') }}" class="flex items-center justify-center space-x-4 border-r border-gray-100 last:border-none p-2 rounded-xl hover:bg-emerald-50/60 transition group">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center group-hover:scale-105 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </div>
                    <div class="text-left">
                        <span class="block text-2xl font-black text-gray-900">128</span>
                        <span class="text-xs text-gray-500 font-medium group-hover:text-emerald-700">Actividades de servicio social</span>
                    </div>
                </a>

                <a href="#documentos-section" class="flex items-center justify-center space-x-4 p-2 rounded-xl hover:bg-emerald-50/60 transition group">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center group-hover:scale-105 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <div class="text-left">
                        <span class="block text-2xl font-black text-gray-900">65</span>
                        <span class="text-xs text-gray-500 font-medium group-hover:text-emerald-700">Documentos y actas</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Sección de Perfiles de Beneficiarios -->
        <div id="beneficiarios-section" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
            
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-extrabold text-gray-900">Beneficiarios destacados</h2>
            </div>

            <!-- Tarjetas de Beneficiarios -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12">
                @forelse($beneficiaries as $beneficiary)
                    <div class="bg-white border border-gray-200 rounded-2xl p-5 text-center shadow-sm hover:shadow-md transition flex flex-col items-center justify-between">
                        
                        <!-- Avatar / Foto -->
                        <div class="relative group mb-3">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-2 border-emerald-600 bg-emerald-50 flex items-center justify-center">
                                @if($beneficiary->photo_path)
                                    <img src="{{ asset('storage/' . $beneficiary->photo_path) }}" alt="{{ $beneficiary->name }}" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-16 h-16 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                @endif
                            </div>

                            <form action="{{ route('beneficiaries.updatePhoto', $beneficiary) }}" method="POST" enctype="multipart/form-data" class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition cursor-pointer">
                                @csrf
                                <label class="cursor-pointer text-white text-[11px] font-bold text-center px-2">
                                    <span>Cambiar foto</span>
                                    <input type="file" name="photo" class="hidden" onchange="this.form.submit()">
                                </label>
                            </form>
                        </div>

                        <!-- Info del Beneficiario -->
                        <div class="w-full">
                            <h3 class="font-bold text-gray-900 text-base leading-tight">{{ $beneficiary->name }}</h3>
                            <p class="text-xs text-gray-700 font-semibold mt-1">{{ $beneficiary->degree ?? 'Carrera no asignada' }}</p>
                            <p class="text-xs text-gray-500 mb-2">{{ $beneficiary->institution ?? 'UNAD' }}</p>
                            @if($beneficiary->community)
                                <div class="flex items-center justify-center gap-1 text-xs text-gray-500 mb-3">
                                    <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span>{{ $beneficiary->community }}</span>
                                </div>
                            @endif
                        </div>

                        <button class="w-full mt-2 py-1.5 px-4 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-lg text-xs font-bold hover:bg-emerald-100 transition">
                            VER PERFIL
                        </button>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-8 text-gray-500">
                        No hay beneficiarios registrados.
                    </div>
                @endforelse
            </div>

            <!-- Sección de Documentos y Actas -->
            <div id="documentos-section" class="mb-12 scroll-mt-24">
                <h2 class="text-2xl font-extrabold text-gray-900 mb-4">Documentos y Actas Publicadas</h2>
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                    <ul class="divide-y divide-gray-100 text-sm">
                        <li class="py-3 flex justify-between items-center">
                            <span class="font-medium text-gray-700">📄 Acta de Selección y Adjudicación de Cupos - Periodo Actual</span>
                            <a href="#" class="text-xs font-bold text-emerald-700 hover:underline">Descargar PDF</a>
                        </li>
                        <li class="py-3 flex justify-between items-center">
                            <span class="font-medium text-gray-700">📄 Reglamento Operativo del Fondo Álvaro Ulcué Chocué</span>
                            <a href="#" class="text-xs font-bold text-emerald-700 hover:underline">Descargar PDF</a>
                        </li>
                        <li class="py-3 flex justify-between items-center">
                            <span class="font-medium text-gray-700">📄 Formato de Control e Informe de Servicio Social</span>
                            <a href="#" class="text-xs font-bold text-emerald-700 hover:underline">Descargar PDF</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Secciones Informativas Inferiores -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900 mb-3">¿Qué es el Fondo Álvaro Ulcué Chocué?</h3>
                        <p class="text-sm text-gray-600 leading-relaxed mb-6">
                            Es un fondo destinado a apoyar la educación superior de jóvenes indígenas, promoviendo su formación profesional y el desarrollo de proyectos que beneficien a sus comunidades.
                        </p>
                    </div>
                    <div>
                        <button class="bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs px-5 py-2.5 rounded-lg transition">
                            MÁS INFORMACIÓN
                        </button>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                    <h3 class="font-bold text-lg text-gray-900 mb-4">Nuestros objetivos</h3>
                    <ul class="space-y-3 text-sm text-gray-700 font-medium">
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Apoyar la educación superior indígena</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Promover el servicio social en comunidades</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 bg-emerald-600 text-white rounded-full flex items-center justify-center text-xs font-bold">✓</span>
                            <span>Fortalecer proyectos que generen impacto social</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>s
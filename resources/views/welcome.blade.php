<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo Álvaro Ulcué Chocué</title>
    
    <!-- Cargamos los estilos de Tailwind y los scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- BARRA DE NAVEGACIÓN SUPERIOR (NAVBAR) -->
    <nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logotipo del Fondo -->
                <div class="flex items-center space-x-3">
                    <div class="h-14 w-14 bg-emerald-700 rounded-full flex items-center justify-center text-white font-bold text-xs text-center p-1">
                        FONDO
                    </div>
                    <div>
                        <span class="font-extrabold text-emerald-800 text-lg block leading-tight">FONDO ÁLVARO</span>
                        <span class="font-bold text-amber-600 text-sm block leading-none">ULCUÉ CHOCUÉ</span>
                    </div>
                </div>

                <!-- Menú de Enlaces de tu maqueta -->
                <div class="hidden md:flex space-x-6 text-sm font-semibold tracking-wide uppercase text-gray-600">
                    <a href="{{ route('beneficiaries.index') }}" class="text-emerald-700 border-b-2 border-emerald-700">BENEFICIARIOS</a>
                    <a href="{{ route('projects.index') }}" class="hover:text-emerald-700 transition">PROYECTOS</a>
                    <a href="{{ route('news.index') }}" class="hover:text-emerald-700 transition">NOTICIAS</a>
                    <a href="#" class="hover:text-emerald-700 transition">Servicio Social</a>
                    
                    <a href="#" class="hover:text-emerald-700 transition">Contacto</a>
                </div>

                <!-- Botones de Acceso (Login / Registro) -->
                <div class="flex items-center space-x-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm bg-emerald-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-emerald-800 transition">Mi Panel</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-emerald-700 transition">Ingresar</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm bg-emerald-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-emerald-800 transition">Registrarse</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- BANNER PRINCIPAL (HERO SECTION) -->
    <header class="relative bg-gradient-to-r from-emerald-900 to-emerald-850 text-white py-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <p class="text-amber-400 font-bold uppercase tracking-wider text-sm mb-2">Bienvenidos al portal</p>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
                Fondo Álvaro Ulcué Chocué
            </h1>
            <p class="text-lg md:text-xl text-emerald-100 max-w-2xl mb-8">
                Educación que transforma comunidades. Conoce los proyectos y el servicio social de nuestros beneficiarios.
            </p>
            <a href="#" class="bg-amber-500 hover:bg-amber-600 text-emerald-950 font-bold px-6 py-3 rounded-lg shadow-md transition uppercase text-sm tracking-wider inline-block">
                Conoce más
            </a>
        </div>
    </header>
        <!-- SECCIÓN DE ESTADÍSTICAS -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Tarjeta 1: Beneficiarios -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between border border-gray-100 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="h-14 w-14 bg-emerald-800 text-white rounded-full flex items-center justify-center shadow-inner">
                        <!-- Icono Beneficiarios (Grupo) -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-3xl font-extrabold text-gray-900">85</span>
                        <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Beneficiarios activos</span>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Proyectos -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between border border-gray-100 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="h-14 w-14 bg-emerald-700 text-white rounded-full flex items-center justify-center shadow-inner">
                        <!-- Icono Proyectos (Maletín / Carpeta) -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-3xl font-extrabold text-gray-900">42</span>
                        <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Proyectos desarrollados</span>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Servicio Social -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between border border-gray-100 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="h-14 w-14 bg-emerald-800 text-white rounded-full flex items-center justify-center shadow-inner">
                        <!-- Icono Actividades (Manos / Corazón) -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-3xl font-extrabold text-gray-900">128</span>
                        <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Actividades de servicio social</span>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4: Documentos Publicados (Aquí irán los PDFs) -->
            <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between border border-gray-100 hover:shadow-lg transition">
                <div class="flex items-center space-x-4">
                    <div class="h-14 w-14 bg-emerald-700 text-white rounded-full flex items-center justify-center shadow-inner">
                        <!-- Icono Documentos (Página con doblez) -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-3xl font-extrabold text-gray-900">65</span>
                        <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Documentos publicados</span>
                    </div>
                </div>
            </div>

        </div>
    </section>


</body>
</html>

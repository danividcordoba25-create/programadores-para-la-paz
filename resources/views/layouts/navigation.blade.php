<nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center space-x-8">
                <!-- Logo Oficial -->
                <a href="{{ route('beneficiaries.index') }}" class="flex items-center space-x-3 group py-2">
                    <!-- Imagen en círculo/óvalo -->
                    <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0 border border-amber-400">
                        <img src="{{ asset('images/logo-indigena.png') }}" alt="Logo Fondo Álvaro Ulcué" class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Texto del Logo estilo Oficial -->
                    <div class="flex flex-col justify-center">
                        <span class="font-black text-emerald-900 text-sm tracking-tight leading-none block">FONDO</span>
                        <span class="font-black text-emerald-900 text-sm tracking-tight leading-none block mt-0.5">ÁLVARO</span>
                        <span class="font-black text-emerald-900 text-sm tracking-tight leading-none block mt-0.5">ULCUÉ CHOCUÉ</span>
                        
                        <!-- Línea dorada divisora -->
                        <div class="h-[2px] bg-amber-500 w-full my-1"></div>
                        
                        <span class="text-[9px] font-extrabold text-gray-800 tracking-wider block leading-none uppercase">COMUNIDADES INDÍGENAS</span>
                    </div>
                </a>

                <!-- Enlaces del Menú -->
                <div class="hidden sm:flex space-x-6 text-xs font-bold tracking-wider uppercase">
                   <a href="{{ route('beneficiaries.index') }}#beneficiarios-section" class="{{ request()->routeIs('beneficiaries.*') ? 'text-emerald-700 border-b-2 border-emerald-700 pb-1' : 'text-gray-600 hover:text-emerald-700' }}">
                    BENEFICIARIOS
                    </a>
                    <a href="{{ route('projects.index') }}" class="{{ request()->routeIs('projects.*') ? 'text-emerald-700 border-b-2 border-emerald-700 pb-1' : 'text-gray-600 hover:text-emerald-700' }}">
                        PROYECTOS
                    </a>
                    <a href="{{ route('social-service.index') }}" class="{{ request()->routeIs('social-service.*') ? 'text-emerald-700 border-b-2 border-emerald-700 pb-1' : 'text-gray-600 hover:text-emerald-700' }}">
                        SERVICIO SOCIAL
                    </a>
                    <a href="{{ route('news.index') }}" class="{{ request()->routeIs('news.*') ? 'text-emerald-700 border-b-2 border-emerald-700 pb-1' : 'text-gray-600 hover:text-emerald-700' }}">
                        NOTICIAS
                    </a>
                    <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.*') ? 'text-emerald-700 border-b-2 border-emerald-700 pb-1' : 'text-gray-600 hover:text-emerald-700' }}">
                        CONTACTO
                    </a>
                </div>
            </div>

            <!-- Estado de Sesión / Invitado -->
            <div class="hidden sm:flex items-center space-x-4">
                @auth
                    <span class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-xs text-red-600 hover:underline font-bold">Cerrar Sesión</button>
                    </form>
                @else
                    <span class="text-sm font-semibold text-gray-500">Invitado</span>
                    <a href="{{ route('login') }}" class="text-xs font-bold text-emerald-700 hover:underline">INICIAR SESIÓN</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
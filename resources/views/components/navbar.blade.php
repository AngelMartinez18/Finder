<nav class="w-full bg-gray-900 text-white top-0 left-0 z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('Imagenes/finder.ico') }}" class="w-10 h-10" alt="Finder Logo">
            <span class="text-xl font-semibold">Finder</span>
        </a>

        <!-- CENTER NAV -->
        <div class="hidden md:flex flex-1 justify-center">
            <a href="{{ route('searchjob') }}"
               class="text-white text-lg font-semibold hover:text-yellow-400 transition">
               Buscar Empleos
            </a>
        </div>

        <!-- RIGHT SIDE -->
        <div class="hidden md:flex items-center gap-8">

            @guest
                <a href="{{ route('login') }}"
                   class="text-white hover:text-yellow-400 transition">
                   Log in
                </a>

                <a href="{{ route('register') }}"
                   class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                   Register
                </a>
            @endguest

            @auth
                <div class="relative">

                    <button id="userMenuBtn"
                            class="flex items-center gap-3 focus:outline-none">

                        <img src="{{ Auth::user()->candidato->foto_perfil
                            ? asset('storage/' . Auth::user()->candidato->foto_perfil)
                            : asset('imagenes/default-user.png') }}"
                            class="w-10 h-10 rounded-full object-cover border border-gray-700">

                        <span class="font-semibold">
                            {{ Auth::user()->nombre }}
                        </span>

                        <svg id="arrowIcon"
                             class="w-5 h-5 transition-transform"
                             fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- DROPDOWN -->
                    <div id="userDropdown"
                         class="hidden absolute right-0 mt-3 w-52 bg-white text-gray-800 rounded-lg shadow-xl overflow-hidden">

                        <!-- MI PANEL -->
                        @if(Auth::user()->tipo_usuario === 'candidato')
                            <a href="{{ route('candidato.home') }}"
                               class="block px-4 py-3 hover:bg-gray-100">
                                Mi Panel
                            </a>
                        @else
                            <a href="{{ route('empresario.home') }}"
                               class="block px-4 py-3 hover:bg-gray-100">
                                Mi Panel
                            </a>
                        @endif

                        <a href="{{ route('candidato.perfil') }}"
                           class="block px-4 py-3 hover:bg-gray-100">
                           Editar Perfil
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-3 hover:bg-gray-100">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>

        <!-- MOBILE BURGER -->
        <button id="burgerBtn" class="md:hidden flex flex-col gap-1.5 focus:outline-none">
            <span class="w-6 h-0.5 bg-white transition"></span>
            <span class="w-6 h-0.5 bg-white transition"></span>
            <span class="w-6 h-0.5 bg-white transition"></span>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class=" bg-gray-800 w-full px-6 py-6 md:hidden flex flex-col items-center text-center gap-5">

        <a href="{{ route('searchjob') }}"
           class="text-white text-lg hover:text-yellow-400">
           Buscar Empleos
        </a>

        @guest
            <a href="{{ route('login') }}"
               class="text-white text-lg hover:text-yellow-400">
               Log in
            </a>

            <a href="{{ route('register') }}"
               class="bg-green-500 w-full py-2 rounded-lg text-white hover:bg-green-600 transition">
               Register
            </a>
        @endguest

        @auth
            <!-- PERFIL - CENTRADO -->
            <div class="flex flex-col items-center gap-2 mt-2">
                <img src="{{ Auth::user()->candidato->foto_perfil
                    ? asset('storage/' . Auth::user()->candidato->foto_perfil)
                    : asset('imagenes/default-user.png') }}"
                     class="w-16 h-16 rounded-full border border-gray-600 object-cover">

                <p class="font-semibold">{{ Auth::user()->nombre }}</p>
                <p class="text-sm text-gray-300">{{ Auth::user()->email }}</p>
            </div>

            <!-- MI PANEL -->
            @if(Auth::user()->tipo_usuario === 'candidato')
                <a href="{{ route('candidato.home') }}"
                   class="text-white hover:text-yellow-400 text-lg mt-4">
                    Mi Panel
                </a>
            @else
                <a href="{{ route('empresario.home') }}"
                   class="text-white hover:text-yellow-400 text-lg mt-4">
                   Mi Panel
                </a>
            @endif

            <a href="{{ route('candidato.perfil') }}"
               class="text-white hover:text-yellow-400 text-lg">
               Editar Perfil
            </a>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button class="w-full py-2 text-center text-white hover:text-red-400 text-lg">
                    Cerrar Sesión
                </button>
            </form>
        @endauth
    </div>
</nav>

<!-- JS -->
<script>
    const burgerBtn = document.getElementById("burgerBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    burgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        burgerBtn.children[0].classList.toggle("rotate-45");
        burgerBtn.children[1].classList.toggle("opacity-0");
        burgerBtn.children[2].classList.toggle("-rotate-45");
    });

    const userMenuBtn = document.getElementById("userMenuBtn");
    const dropdown = document.getElementById("userDropdown");
    const arrowIcon = document.getElementById("arrowIcon");

    userMenuBtn?.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");
        arrowIcon.classList.toggle("rotate-180");
    });

    document.addEventListener("click", (e) => {
        if (!userMenuBtn?.contains(e.target)) {
            dropdown?.classList.add("hidden");
            arrowIcon?.classList.remove("rotate-180");
        }
    });
</script>

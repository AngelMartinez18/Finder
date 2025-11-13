<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel del Candidato | Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('Imagenes/finder.ico') }}">
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- NAVBAR FIJA -->
    <x-navbar />

    <!-- ESPACIADO PARA EVITAR SUPERPOSICIÓN DEL NAVBAR -->
    <div class="h-20"></div>

    <!-- LAYOUT PRINCIPAL -->
    <div class="flex flex-1">

        <!-- SIDEBAR MODERNO -->
        <aside
            class="hidden md:flex flex-col w-64 bg-white shadow-lg fixed top-20 left-0 h-[calc(100vh-5rem)] p-6 rounded-tr-3xl">

            <h2 class="text-3xl font-extrabold text-blue-600 mb-10">Finder</h2>

            <nav class="space-y-3">
                <a href="{{ route('candidato.home') }}"
                    class="modern-link bg-blue-50 text-blue-700 font-semibold">
                    🏠 Dashboard
                </a>

                <a href="#" class="modern-link">📄 Mi CV</a>
                <a href="#" class="modern-link">💼 Mis experiencias</a>
                <a href="#" class="modern-link">🎓 Educación</a>
                <a href="#" class="modern-link">⭐ Mis habilidades</a>
                <a href="#" class="modern-link">📨 Mis postulaciones</a>
                <a href="#" class="modern-link">⚙️ Configuración</a>
            </nav>
        </aside>

        <!-- CONTENIDO -->
        <main class="flex-1 md:ml-64 p-6">

            <!-- HEADER MOBILE -->
            <div class="md:hidden flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-600">{{ Auth::user()->nombre }}</h1>
                <button id="menuBtn" class="p-2 bg-blue-600 text-white rounded-lg">☰</button>
            </div>

            <!-- WELCOME CARD MODERNO -->
            @if($candidato)
            <section
                class="rounded-3xl bg-white shadow-xl shadow-blue-100/40 p-8 mb-10 flex flex-col sm:flex-row items-center gap-8">

                @php
                $foto = $candidato->foto_perfil
                    ? asset('storage/' . $candidato->foto_perfil)
                    : asset('imagenes/default-user.png');
                @endphp

                <img src="{{ $foto }}" class="w-32 h-32 rounded-2xl object-cover shadow-lg border-4 border-white">

                <div class="text-center sm:text-left space-y-1">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        {{ $user->nombre }} {{ $candidato->apellido }}
                    </h2>
                    <p class="text-gray-600">{{ $user->email }}</p>
                    <p class="text-gray-600">{{ $candidato->ubicacion }}</p>
                </div>
            </section>
            @endif

            <!-- TARJETAS MODERNAS -->
            <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

                <x-candidate-card title="Perfil Profesional" color="blue"
                    text="Completa tu perfil para aumentar tus oportunidades." btn="Editar perfil" icon="👤" />

                <x-candidate-card title="Experiencias" color="green"
                    text="Registra tu historial laboral." btn="Ver experiencias" icon="💼" />

                <x-candidate-card title="Educación" color="purple"
                    text="Añade títulos, certificados o cursos." btn="Administrar educación" icon="🎓" />

                <x-candidate-card title="Habilidades" color="yellow"
                    text="Destaca tus habilidades principales." btn="Gestionar habilidades" icon="⭐" />

                <x-candidate-card title="Postulaciones" color="red"
                    text="Controla tus empleos aplicados." btn="Ver postulaciones" icon="📨" />

            </section>

        </main>
    </div>

    <!-- FOOTER -->
    <x-footer />

    <script>
        const menuBtn = document.getElementById("menuBtn");
        const sidebar = document.querySelector("aside");

        if (menuBtn) {
            menuBtn.addEventListener("click", () => {
                sidebar.classList.toggle("hidden");
            });
        }
    </script>

    <style>
        .modern-link {
            @apply flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-50 hover:bg-gray-100 transition font-medium text-gray-700;
        }
    </style>

</body>

</html>

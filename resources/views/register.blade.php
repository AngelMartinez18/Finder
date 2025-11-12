<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro | Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('Imagenes/finder.ico') }}">
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <x-navbar />

    <main class="flex-grow flex items-center justify-center px-4 py-10">
        <div class="max-w-5xl w-full bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">

                <!-- Columna izquierda -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-10 flex flex-col justify-center text-center">
                    <h2 class="text-2xl font-semibold mb-3">Crea tu cuenta Finder</h2>
                    <p class="text-blue-100 mb-6 text-sm max-w-xs mx-auto">
                        Encuentra oportunidades laborales o publica tus ofertas como empresa.
                    </p>
                    <a href="{{ route('login') }}"
                        class="bg-white text-blue-600 font-semibold px-6 py-2.5 rounded-lg shadow hover:bg-gray-100 transition">
                        Ya tengo una cuenta
                    </a>
                </div>

                <!-- Columna derecha -->
                <div class="p-8 md:p-10">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Registro</h1>
                    <p class="text-gray-600 mb-6 text-sm">Completa los campos para crear tu cuenta.</p>

                    <form method="POST" action="{{ route('register.post') }}" enctype="multipart/form-data" id="registerForm" class="space-y-5">
                        @csrf

                        <!-- Nombre -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                                Nombre completo <span class="text-red-500">*</span>
                            </label>
                            <input id="nombre" name="nombre" type="text" value="{{ old('nombre') }}" required
                                placeholder="Ej. Juan Pérez"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Correo -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                Correo electrónico <span class="text-red-500">*</span>
                            </label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                placeholder="ejemplo@correo.com"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Tipo de usuario -->
                        <div>
                            <label for="tipo_usuario" class="block text-sm font-medium text-gray-700 mb-1">
                                Tipo de usuario <span class="text-red-500">*</span>
                            </label>
                            <select id="tipo_usuario" name="tipo_usuario" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                                <option value="">Selecciona una opción</option>
                                <option value="candidato">Candidato</option>
                                <option value="empleador">Empleador</option>
                            </select>
                        </div>

                        <!-- Campos Candidato -->
                        <div id="candidatoFields" class="hidden space-y-4">
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                                <input id="telefono" name="telefono" type="text" placeholder="Número de contacto"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label for="ubicacion" class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                                <input id="ubicacion" name="ubicacion" type="text" placeholder="Ciudad, país"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label for="cv" class="block text-sm font-medium text-gray-700 mb-1">Currículum (PDF)</label>
                                <input id="cv" name="cv" type="file" accept=".pdf"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 cursor-pointer">
                            </div>
                        </div>

                        <!-- Campos Empleador -->
                        <div id="empleadorFields" class="hidden space-y-4">
                            <div>
                                <label for="nombre_empresa" class="block text-sm font-medium text-gray-700 mb-1">Nombre de la empresa</label>
                                <input id="nombre_empresa" name="nombre_empresa" type="text" placeholder="Ej. TechFinder S.A."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label for="sector" class="block text-sm font-medium text-gray-700 mb-1">Sector</label>
                                <input id="sector" name="sector" type="text" placeholder="Ej. Tecnología, Educación, Salud..."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label for="ubicacion_empresa" class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                                <input id="ubicacion_empresa" name="ubicacion" type="text" placeholder="Ej. Managua, Nicaragua"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                                <textarea id="descripcion" name="ubicacion" rows="3" placeholder="Breve descripción de la empresa"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"></textarea>
                            </div>
                            <div>
                                <label for="sitio_web" class="block text-sm font-medium text-gray-700 mb-1">Sitio web</label>
                                <input id="sitio_web" name="sitio_web" type="url" placeholder="https://www.ejemplo.com"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                                    Contraseña <span class="text-red-500">*</span>
                                </label>
                                <input id="password" type="password" name="password" required placeholder="••••••••"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                                    Confirmar contraseña <span class="text-red-500">*</span>
                                </label>
                                <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Repite la contraseña"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                        </div>

                        <!-- Errores -->
                        @if ($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 rounded-md text-sm">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Botón -->
                        <button type="submit"
                            class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2.5 rounded-lg shadow-md hover:shadow-lg transition-transform duration-300 hover:scale-[1.02]">
                            Registrarme
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <script>
        // Mostrar/ocultar campos según tipo de usuario
        const tipoUsuario = document.getElementById('tipo_usuario');
        const candidatoFields = document.getElementById('candidatoFields');
        const empleadorFields = document.getElementById('empleadorFields');
        const form = document.getElementById('registerForm');

        function toggleFields() {
            const valor = tipoUsuario.value;
            candidatoFields.classList.toggle('hidden', valor !== 'candidato');
            empleadorFields.classList.toggle('hidden', valor !== 'empleador');
        }

        tipoUsuario.addEventListener('change', toggleFields);
        document.addEventListener('DOMContentLoaded', toggleFields);

        // Antes de enviar, asegurar que el campo de ubicación no esté vacío
        form.addEventListener('submit', (e) => {
            const tipo = tipoUsuario.value;

            if (tipo === 'candidato') {
                const ubicacion = document.getElementById('ubicacion');
                if (!ubicacion.value.trim()) {
                    e.preventDefault();
                    alert('Por favor ingresa tu ubicación antes de continuar.');
                    ubicacion.focus();
                }
            } else if (tipo === 'empleador') {
                const ubicacionEmpresa = document.getElementById('ubicacion_empresa');
                if (!ubicacionEmpresa.value.trim()) {
                    e.preventDefault();
                    alert('Por favor ingresa la ubicación de la empresa.');
                    ubicacionEmpresa.focus();
                }
            }
        });
    </script>


</body>

</html>
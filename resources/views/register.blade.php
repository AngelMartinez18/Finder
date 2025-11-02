<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva cuenta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
  

    <main class="max-w-6xl mx-auto mt-8 px-6">
        <h1 class="text-4xl text-blue-500 font-semibold mb-8">Nueva cuenta</h1>

        <form method="POST" action="{{ route('register') }}" class="bg-gray-100 rounded-lg shadow p-8">
            @csrf
           

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Columna izquierda: Información personal y rol -->
                <div>
                    <h2 class="text-3xl text-blue-500 font-semibold mb-2">Información personal</h2>
                    <hr class="border-t border-gray-200 mb-4">

                    <label class="block text-sm text-gray-700 mb-1">Nombre <span class="text-red-500">*</span></label>
                    <input name="name" type="text" value="{{ old('name') }}" required class="w-full px-4 py-2 border rounded mb-3 focus:outline-none focus:ring-2 focus:ring-orange-200">

                    <label class="block text-sm text-gray-700 mb-1">Apellido <span class="text-red-500">*</span></label>
                    <input name="apellido" type="text" value="{{ old('apellido') }}" required class="w-full px-4 py-2 border rounded mb-3 focus:outline-none focus:ring-2 focus:ring-orange-200">

                    <label class="block text-sm text-gray-700 mb-1">Selecciona tu rol <span class="text-red-500">*</span></label>
                    <select id="roleSelect" name="role" class="w-full px-4 py-2 border rounded mb-4 focus:outline-none focus:ring-2 focus:ring-orange-200">
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Candidato</option>
                        <option value="employer" {{ old('role') == 'employer' ? 'selected' : '' }}>Empleador</option>
                    </select>

                    <label class="block text-sm text-gray-700 mb-1">Correo electrónico <span class="text-red-500">*</span></label>
                    <input name="email" type="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded mb-3 focus:outline-none focus:ring-2 focus:ring-orange-200">

                    <label class="block text-sm text-gray-700 mb-1">Contraseña <span class="text-red-500">*</span></label>
                    <input name="password" id="password" type="password" required class="w-full px-4 py-2 border rounded mb-2 focus:outline-none focus:ring-2 focus:ring-orange-200">
                    <p class="text-xs text-gray-500 mb-3">Seguridad de la contraseña: usa al menos 8 caracteres.</p>

                    <label class="block text-sm text-gray-700 mb-1">Confirmar contraseña <span class="text-red-500">*</span></label>
                    <input name="password_confirmation" id="password_confirmation" type="password" required class="w-full px-4 py-2 border rounded mb-6 focus:outline-none focus:ring-2 focus:ring-orange-200">

                    <div id="passwordError" class="hidden text-red-500 text-sm mt-2"></div>
                    <div id="passwordConfirmError" class="hidden text-red-500 text-sm mt-2"></div>

                    <div class="mt-5 flex justify-between items-center">
                        <label class="inline-flex items-center">
                            <a href="{{ route('login') }}" class="ml-4 bg-blue-500 text-white px-4 py-2 rounded-md font-semibold hover:bg-blue-600">Ir al login</a>
                        </label>
                    </div>
                    
                    <!-- Botón enviar alineado a la derecha como en la imagen -->
                    <div class="mt-5 flex justify-end">
                        <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-md  bg-green-400  font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300  hover:bg-green-600">ENVIAR</button>
                    </div>
                   

                     
                </div>

                <!-- Columna derecha: Sign-in information -->
                <div>
                   <h2 class="text-3xl text-blue-500 font-semibold mb-2">Perfil Profesional</h2>
                    <hr class="border-t border-gray-200 mb-4">

                      <!-- Campos específicos para Candidato -->
                    <div id="candidateFields" class="space-y-3">
                        <label class="block text-sm text-gray-700">Resumen / Perfil profesional</label>
                        <textarea name="resumen" rows="4" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">{{ old('resumen') }}</textarea>

                        <label class="block text-sm text-gray-700">Experiencia (breve)</label>
                        <input name="experiencia" type="text" value="{{ old('experiencia') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">

                        <label class="block text-sm text-gray-700">Educación</label>
                        <input name="educacion" type="text" value="{{ old('educacion') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">

                        <label class="block text-sm text-gray-700">Habilidades</label>
                        <input name="habilidades" type="text" value="{{ old('habilidades') }}" placeholder="Ej: PHP, Laravel, Comunicación" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">
                    </div>

                    <!-- Campos específicos para Empleador -->
                    <div id="employerFields" class="hidden space-y-3">
                        <label class="block text-sm text-gray-700">Nombre de la empresa <span class="text-red-500">*</span></label>
                        <input name="empresa" type="text" value="{{ old('empresa') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">

                        <label class="block text-sm text-gray-700">Rubro</label>
                        <input name="rubro" type="text" value="{{ old('rubro') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">

                        <label class="block text-sm text-gray-700">Teléfono de la empresa</label>
                        <input name="telefono_empresa" type="text" value="{{ old('telefono_empresa') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">

                        <label class="block text-sm text-gray-700">Dirección</label>
                        <input name="direccion_empresa" type="text" value="{{ old('direccion_empresa') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">

                        <label class="block text-sm text-gray-700">Sitio web</label>
                        <input name="website" type="url" value="{{ old('website') }}" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">
                    </div>

                <div>
                   

                    @if ($errors->any())
                        <div class="mt-2 text-red-600">
                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    
                </div>
            </div>

            
        </form>
    </main>

    <script>
        // Controlar visibilidad de campos según rol seleccionado
        const roleSelect = document.getElementById('roleSelect');
        const candidateFields = document.getElementById('candidateFields');
        const employerFields = document.getElementById('employerFields');

        function toggleRoleFields() {
            const role = roleSelect.value;
            if (role === 'user') {
                candidateFields.classList.remove('hidden');
                employerFields.classList.add('hidden');
            } else {
                candidateFields.classList.add('hidden');
                employerFields.classList.remove('hidden');
            }
        }

        roleSelect.addEventListener('change', toggleRoleFields);

        // Inicializar según valor anterior (si existiera)
        document.addEventListener('DOMContentLoaded', toggleRoleFields);

        // --- validación de contraseña en cliente ---
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form[action="{{ route('register') }}"]') || document.querySelector('form');
            const password = document.getElementById('password');
            const passwordConfirm = document.getElementById('password_confirmation');
            const passwordError = document.getElementById('passwordError');
            const passwordConfirmError = document.getElementById('passwordConfirmError');

            function clearErrors() {
                passwordError.classList.add('hidden'); passwordError.innerHTML = '';
                passwordConfirmError.classList.add('hidden'); passwordConfirmError.innerHTML = '';
            }

            function validatePassword() {
                clearErrors();
                const val = password.value || '';
                const conf = passwordConfirm.value || '';
                const errors = [];

                if (val.length < 8) errors.push('La contraseña debe tener al menos 8 caracteres.');
                if (!/[A-Z]/.test(val)) errors.push('Debe contener al menos una letra mayúscula.');
                if (!/[a-z]/.test(val)) errors.push('Debe contener al menos una letra minúscula.');

                if (errors.length) {
                    passwordError.innerHTML = errors.join('<br>');
                    passwordError.classList.remove('hidden');
                    return false;
                }

                if (val !== conf) {
                    passwordConfirmError.textContent = 'Las contraseñas no coinciden.';
                    passwordConfirmError.classList.remove('hidden');
                    return false;
                }

                return true;
            }

            // validación en tiempo real
            password.addEventListener('input', clearErrors);
            passwordConfirm.addEventListener('input', clearErrors);

            // validar al enviar
            form.addEventListener('submit', function (e) {
                if (!validatePassword()) {
                    e.preventDefault();
                    // opcional: desplazar al campo de contraseña
                    password.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
    </script>
</body>
</html>
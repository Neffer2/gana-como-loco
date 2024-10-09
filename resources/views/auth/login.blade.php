<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-container">
        <h2 class="login-title">Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="form-error" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="form-error" />
            </div>

            <!-- Remember Me -->
            <div class="form-group form-remember">
                <label for="remember_me" class="form-remember-label">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span>Recuérdame</span>
                </label>
            </div>

            <div class="form-group">
                @if (Route::has('password.request'))
                    <a class="form-link" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>

            <div class="form-group-button">
                <button type="submit" class="form-button">Aceptar</button>
            </div>
        </form>
    </div>
</x-guest-layout>
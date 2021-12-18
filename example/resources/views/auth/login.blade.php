@include('components.headcss')
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="logo">
                <a href="/">
                    <img src="{{ URL::asset('./img/logo.png') }}" alt="">
                </a>
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </div>

            <div class="text-center mt-4 name"> Đăng nhập </div>

            <!-- Email Address -->
            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
                <x-input placeholder="Tài khoản" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <!-- Password -->
            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
                <x-input placeholder="Mật khẩu" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Nhớ đăng nhập') }}</span>
                </label>
            </div>

            <button class="btn mt-3">Đăng nhập</button>

            <div class="mt-10">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    Bạn đã quên mật khẩu?
                </a>
                @endif

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><u>Đăng ký</u></a>
                @endif
            </div>

        </form>
    </div>
</x-guest-layout>
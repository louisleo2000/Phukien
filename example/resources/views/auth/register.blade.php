@include('components.headcss')
<x-guest-layout>
    <div class="wrapper">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="logo">
                <a href="/">
                    <img src="{{ URL::asset('./img/logo.png') }}" alt="">
                </a>
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </div>

            <div class="text-center mt-4 name">Đăng ký </div>

            <!-- Name -->
            <div class="form-field d-flex align-items-center">
                <x-input placeholder="Họ tên" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="form-field d-flex align-items-center">
                <x-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="form-field d-flex align-items-center">
                <x-input placeholder="Mật khẩu" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-field d-flex align-items-center">
                <x-input placeholder="Nhập lại mật khẩu" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>
            <button class="btn mt-3">Đăng ký</button>
            <div class="mt-3">

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Đã có tài khoản?') }}
                </a>
            </div>


        </form>
    </div>
</x-guest-layout>
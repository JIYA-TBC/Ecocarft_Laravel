<html lang="en">
<!-- @if(session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif -->

    <head>
 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="1Px0vsKUEzp0d9xUJ6aNjtRzOvZw0IP4NDu04v77">

        <title>ECOCRAFT</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair:wght@400;600;700&display=swap">

        <!-- Template Stylesheet -->
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
   
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-f52d8432.css') }}" />
        <script type="module" src="{{ asset('build/assets/app-113fdd3a.js') }}"></script>

    </head>
    
    <body>

        <div id="logindiv" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <div>
            <img style="height: 100px; width: 100px;" src="{{ asset('front/img/logo.png') }}" alt="Logo">

            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
               
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-black-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-black-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    
                    <x-primary-button>
                        {{ __('Log in') }}
                    </x-primary-button>
                    
                    <a class="underline text-sm text-black-600 hover:text-grey-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Sign in') }}
                    </a>

                </div>

                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                        <a class="underline text-sm text-black-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    </div>
            </form>

            </div>
        </div>
    </body>
</html>

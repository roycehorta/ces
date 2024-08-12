<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cayambanan ES</title>
    <link href="{{ URL('images/logo.jpg') }}" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            /* background-color: white; Set background color to white */
            background: linear-gradient(to top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0), rgba(250, 250, 250, 0.4)), url("{{ URL('assets/images/banner.jpg') }}");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: fit-content;
        overflow-x: hidden;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-size: 30px;
        }

    </style>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 600px;"> <!-- Increased max-width to 400px -->
            <img src="{{ URL('assets/images/logo.jpg') }}" alt="School Logo" class="mx-auto mt-4" style="max-width: 150px;">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="mb-3">
                    <label for="remember_me" class="form-check-label">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="text-center">
                    <x-primary-button class="mt-3 btn btn-primary">
                        {{ __('Sign in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

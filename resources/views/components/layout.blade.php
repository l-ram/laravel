<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ isset($title) ? $title . ' Laravel' : ' Laravel' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen flex flex-col bg-base-200 font-sans">
        @if (Route::has('login'))
            <nav class="navbar bg-base-100">
                <div class="navbar-start">
                    <a href="/" class="btn btn-ghost text-x1">Laravel</a>
                </div>
                <div class="navbar-end gap-2">
                    @auth                
                        <form method="POST" action={{ route('logout') }}>
                        @csrf
                            <button type="submit">
                                Logout
                            </button>
                        </form>
                    @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-ghost btn-sm"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                         class="btn btn-primary btn-sm"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth

                </div>

            </nav>
        @endif

                    <main class="flex-1 container mx-auto px-4 py-8">
                        {{ $slot }}
                    </main>

                    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-rs">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    @yield('style')
    @livewireStyles
    <title>Sobirjon Dev</title>
</head>
<body>

<div class="container">
    <!-- Bosh qismi HEADER start -->
    <div class="header">
        <header>
            <nav class="navbar">
                <a href="{{ route('index') }}" class="brand text-decoration-none">
                    <!-- LOGOTIP UCHUN -->
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="logoType">
                    <!-- Navbar Logo Name -->
                    Sobirjon Dev
                </a>
                <div class="menuBar">
                    <i class="fa fa-navicon icon"></i>
                </div>
                <div class="navigation">
                    <a href="{{ route('index') }}#home" class="text-decoration-none">Home</a>
                    <a href="{{ route('index') }}#about-us" class="text-decoration-none">About Us</a>
                    <a href="{{ route('index') }}#service" class="text-decoration-none">Service</a>
                    <a href="{{ route('index') }}#skills" class="text-decoration-none">Skills</a>
                    @if(\App\Models\Work::all()->count()>0)
                        <a href="{{ route('index') }}#work" class="text-decoration-none">Work</a>
                    @endif
                    @if(\App\Models\Company::all()->count()>0)
                        <a href="{{ route('index') }}#company" class="text-decoration-none">Company</a>
                    @endif
                    <a href="{{ route('contact') }}" class="text-decoration-none">Contact</a>
                </div>
            </nav>
        </header>
    </div>
    <!-- Bosh qismi HEADER finish -->
    @yield('content')
</div>

@livewireScripts
@yield('script')
</body>
</html>

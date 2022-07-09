<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - {{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <div id="app">

        @php
            if (!isset($showNav)) {
                $showNav = true;
            }
            
        @endphp

        @if ($showNav)
            {{-- sidebar --}}
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar bg-white">
                <button class="navbar-toggler m-1 btn btn-light ms-auto bar" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-close"></i>
                </button>
                <div class="position-sticky">
                    <div class="list-group list-group-flush mt-4">

                        {{-- <div class="logo-img my-3 align-center">
                        <img src="https://www.tecrondigital.com/main_public/assets/logo.png" class="img-fluid mx-auto d-block" style="height:60px;width:60px"/>
                    </div> --}}
                        <a href="{{ route('admin.dashboard') }}"
                            class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                        </a>
                        <a href="{{ route('admin.create-order') }}"
                            class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-truck fa-fw me-3"></i><span>Create Order</span></a>
                        <a href="{{ route('admin.orders') }}"
                            class="list-group-item list-group-item-action py-2 ripple">
                            <i class="fas fa-box fa-fw me-3"></i><span>Orders</span>
                        </a>
                        <a href="{{ route('admin.logout') }}"
                            class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-sign-out-alt fa-fw me-3"></i><span>Logout</span></a>
                    </div>
                </div>
            </nav>
        @endif


        {{-- sidebar --}}

        @if ($showNav)
            <div class="main">
            @else
                <div class="main p-0">
        @endif

        @if ($showNav)
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white mb-3">
                <button class="navbar-toggler m-1 btn btn-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="navbar-nav px-4 ms-auto">
                    <li class="text-secondary font-weight-light ms-auto">
                        Welcome {{ Auth::user()->name }}
                    </li>
                </ul>
            </nav>
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
    </div>
</body>

</html>

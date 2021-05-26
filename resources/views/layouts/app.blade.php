<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Barangay Profiling & Document Issuance System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid d-flex">
              <a class="navbar-brand" href="#">Barangay Profiling & Document Issuance System</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                  <li class="nav-item  p-2">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                  </li>
                  <li class="nav-item  p-2">
                    <a class="nav-link active" aria-current="page" href="/residents">Resident Profiling</a>
                  </li>
                  <li class="nav-item  p-2">
                    <a class="nav-link active" href="/transactions">Document Issuance</a>
                  </li>
                  <li class="nav-item dropdown  p-2">
                    <a class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Archives
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item btn button btn-light" href="/residents-archive">Resident Archive</a>
                        <a class="dropdown-item btn button btn-light" href="/transactions-archive">Document Issuance Archive</a>
                    </ul>
                </li>
                <li class="nav-item dropdown p-2">
                    <a  style="color:white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                </ul>
              </div>
            </div>
          </nav>

        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

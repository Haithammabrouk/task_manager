<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"></style>
    <style href="https://fastly.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"></style>
    <style>
        .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination .page-link {
    padding: 5px 10px;
    margin: 0 2px;
    color: #333;
    background-color: #fff;
    border: 1px solid #ccc;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}

.pagination .page-link:hover {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
             
                <a class="navbar-brand" href="{{ url('/') }}">
                    Admins
                </a>
                <a class="navbar-brand" href="{{ url('/users') }}">
                    Users
                </a>
                <a class="navbar-brand" href="{{ url('/tasks') }}">
                   Tasks
                </a>
               
                <a class="navbar-brand" href="{{ url('/tasks/create') }}">
                    Create Task
                </a>
                <a class="navbar-brand" href="{{ url('/statistics') }}">
                   Statistics
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

              
            </div>
        </nav>

        <main class="py-4">
            @include('flash-message')
            @yield('content')
        </main>
    </div>

    <script href="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script href="https://fastly.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script href="https://fastly.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('select').selectpicker();
    </script>
    @yield('scripts')

</body>

</html>
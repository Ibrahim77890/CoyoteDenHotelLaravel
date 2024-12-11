<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coyote Den Hostel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Links -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/images.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles-services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_nemro.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @stack('styles')
</head>
<body>
    <!-- Include Header Partial -->
    @include('partials.header')

    <!-- Main Content -->
    <div class="">
        @yield('content')
    </div>

    <!-- Include Footer Partial -->
    @include('partials.footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
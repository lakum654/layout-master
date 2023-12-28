<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Include any additional stylesheets -->
    @stack('styles')
    <!-- Include CSS scripts -->
    @include('layouts.css_scripts')
</head>
<body>
    <!-- Include the main content -->
    @yield('content')
    <!-- Include JS scripts -->
    @include('layouts.js_scripts')
    <!-- Include any additional scripts -->
    @stack('scripts')
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lumen Starter</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/lib/material-design-lite/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('styles')
</head>

<body>
<div
        class="site-container
        mdl-layout 
        mdl-js-layout 
        mdl-layout--fixed-header 
        mdl-layout--no-desktop-drawer-button"
>
    @include('layouts/main/part/header')
    <main class="mdl-layout__content">
        @yield('content')
    </main>
    @include('layouts/main/part/footer')
</div>
</body>

<script src="/lib/material-design-lite/material.min.js"></script>
<script src="/js/app.js"></script>
@yield('scripts')
</html>
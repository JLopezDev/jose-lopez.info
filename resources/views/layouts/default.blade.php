<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$pageTitle}} | Jose M. Lopez</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    @yield('content')
</div>
<!-- JQUERY -->
<script src="/js/jquery.min.js"></script>
<!-- BOOTSTRAP -->
<script src="/js/bootstrap.min.js"></script>
<!-- SCRIPTS -->
<script src="/js/scripts.js"></script>
</body>
</html>
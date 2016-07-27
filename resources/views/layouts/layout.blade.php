<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MVP</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('partials.navbar')
        @include('partials.sidebar')
    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

{{--<script type="text/javascript" src="/js/libs.js"></script>--}}
<script type="text/javascript" src="/js/theme.js"></script>
@yield('js')

</body>
</html>
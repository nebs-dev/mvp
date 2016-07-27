<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MVP</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
</head>

<body>


<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('navbar');
        @include('sidebar');
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" src="/js/libs.js"></script>
<script type="text/javascript" src="/js/theme.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InWork</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/app/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{asset('assets/app/iCheck/skins/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/app/css/template.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

@yield('content')


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('assets/app/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/app/iCheck/icheck.js')}}"></script>


<script src="{{asset('assets/app/js/main.js')}}"></script>
</body>
</html>

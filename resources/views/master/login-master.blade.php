<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Hospital management system" />
    <title>Login</title>
     <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!-- <link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('public/css/extra_pages.css')}}">
	<!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" /> 
</head>
<body>
    @yield('login_contents')
    <!-- start js include path -->
     <script src="{{asset('public/js/jquery.min.js')}}" ></script>
    <!-- bootstrap -->
    <script src="{{asset('public/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('public/js/extra_pages.js')}}"></script>
    <!-- end js include path -->
</body>
</html>
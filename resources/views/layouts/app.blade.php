<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel QuickTask</title>
    <link rel="stylesheet" href="{{ asset('')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('')}}css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('')}}css/style.css">
</head>
<body>
	<div class="row">
		<h3 class="col-md-6 offset-md-3 text-center">Todo Quiz Tasks
         <span class="add">
        	<a href="{{ route('get.task')}}">
        	<i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>
        </span>
		</h3>
		 @include('layouts.notification')
        <div class="col-md-6 offset-md-3">
		  @yield('content')
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('')}}js/jquery-3.2.1.slim.min.js"></script>
	<script src="{{ asset('')}}js/bootstrap.js"></script>
	<script src="{{ asset('')}}js/bootstrap.min.js"></script>
</body>
</html>


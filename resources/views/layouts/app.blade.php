<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Laravel QuickTask</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('')}}css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('')}}css/style.css">
</head>
<body>
	<div class="row">
		<h3 class="col-md-6 offset-md-3 text-center">Todo Quiz Tasks
         <span class="add">
        	<a href="{{ route('task.create')}}">
        	<i class="fa fa-plus-circle" aria-hidden="true"></i>
         </a>
        </span>
        <span class="float-left h5">
        	<div class="btn-group">
				<div class="dropdown">
				   @php $locale = session()->get('locale'); @endphp
			      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
			         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
			          @switch($locale)
			              @case('vi')
			              <img src="{{asset('image/vi.png')}}"> VN
			              @break
			              @case('en')
			              <img src="{{asset('image/en.png')}}"> English
			              @break
			              @default
			              <img src="{{asset('image/vi.png')}}"> VN
			          @endswitch
			          <span class="caret"></span>
			      </a>
			      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="{{ route('change-language',['vi'])}}"><img src="{{asset('image/vi.png')}}"> VN</a>
			          <a class="dropdown-item" href="{{route('change-language',['en'])}}"><img src="{{asset('image/en.png')}}"> English</a>
			      </div>
			   </div>
		  </div>
        </span>
		</h3>
		 @include('layouts.notification')
        <div class="col-md-6 offset-md-3">
		  @yield('content')
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	@yield('script')
	<script type="text/javascript" src="{{asset('')}}js/client/taskdel.js"></script>
</body>
</html>

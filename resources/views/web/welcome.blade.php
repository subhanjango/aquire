<!DOCTYPE html>
<html lang="en">

@include('web.shared.head')

<body class="landing-page">

<div class="content-bg-wrap">
<div class="content-bg"></div>
</div>


<div class="header--standard header--standard-landing">
<div class="container">
<div class="header--standard-wrap">

<a href="#" class="logo">
<img src="{{asset('web/img/logo-landing.png')}}" alt="Olympus">
<h6 class="logo-title">olympus</h6>
SOCIAL NETWORK
</a>

<a href="#" class="open-responsive-menu js-open-responsive-menu">
<svg class="olymp-menu-icon">
<use xlink:href="{{ asset('web/icons/icons.svg#olymp-menu-icon')}}"></use>
</svg>
</a>
</div>
</div>
</div>

<div class="header-spacer--standard"></div>


<!-- Login-Registration Form  -->

<div class="container">
<div class="row display-flex">
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="landing-content">
<h1>Welcome to the Biggest Social Network in the World</h1>
<p>We are the best and biggest social network with 5 billion active users all around the world. Share you thoughts, write
blog posts, show your favourite music via Stopify, earn badges and much more!
</p>
<a href="#" class="btn btn-md btn-border c-white">JOIN NOW!</a>
</div>
</div>

<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if(\Session::has('error'))
<div class="alert alert-danger">
<ul>
<li><h6>{{ \Session::get('error') }}</h6></li>
</ul>
</div>
@endif

<div class="registration-login-form">
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link " data-toggle="tab" href="#home" role="tab">
<svg class="olymp-login-icon">
<use xlink:href="{{ asset('web/icons/icons.svg#olymp-login-icon') }}"></use>
</svg>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
<svg class="olymp-register-icon">
<use xlink:href="{{ asset('web/icons/icons.svg#olymp-register-icon') }}"></use>
</svg>
</a>
</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
<div class="title h6">Register to Olympus</div>
<form class="content" method="post" action="{{url('register-user')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group label-floating is-empty">
<label class="control-label">First Name</label>
<input class="form-control" name="first_name" placeholder="" type="text" required>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group label-floating is-empty">
<label class="control-label">Last Name</label>
<input class="form-control" name="last_name" placeholder="" type="text" required>
</div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12">
<div class="form-group label-floating is-empty">
<label class="control-label">Your Email</label>
<input class="form-control" name="email" placeholder="" type="email" required>
</div>
<div class="form-group label-floating is-empty">
<label class="control-label">Your Password</label>
<input class="form-control" name="password" placeholder="" type="password" required>
</div>

<div class="form-group date-time-picker label-floating">
<label class="control-label">Your Birthday</label>
<input name="datetimepicker" value="10/24/1984" />
<span class="input-group-addon" required>
<svg class="olymp-calendar-icon">
<use xlink:href="{{asset('web/icons/icons.svg#olymp-calendar-icon')}}"></use>
</svg>
</span>
</div>

<div class="form-group label-floating is-select">
<label class="control-label">Your Gender</label>
<select name="gender" class="selectpicker form-control" required>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
<div class="file-upload" style="width:100%">
<label for="upload" class="file-upload__label">Upload Image</label>
<input id="upload" class="file-upload__input" type="file" name="file_upload" required>
</div>
<div class="remember">
<div class="checkbox">
<label>
<input name="terms" type="checkbox" required> I accept the
<a href="#">Terms and Conditions</a> of the website
</label>
</div>
</div>

<button type="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>
</div>
</div>
</form>
</div>

<div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
<div class="title h6">Login to your Account</div>
<form class="content" method="post" action="{{url('register-login')}}">
{{ csrf_field() }}
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12">
<div class="form-group label-floating is-empty">
<label class="control-label">Your Email</label>
<input class="form-control" name="email" placeholder="" type="email">
</div>
<div class="form-group label-floating is-empty">
<label class="control-label">Your Password</label>
<input class="form-control" name="password" placeholder="" type="password">
</div>

<div class="remember">

<div class="checkbox">
<label>
<input name="optionsCheckboxes" type="checkbox"> Remember Me
</label>
</div>
<a href="#" class="forgot">Forgot my Password</a>
</div>

<button class="btn btn-lg btn-primary full-width">Login</button>

<div class="or"></div>

<a href="{{ url('login/facebook')}}" class="btn btn-lg bg-facebook full-width btn-icon-left">
<i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>



<p>Don’t you have an account?
<a  data-toggle="tab" href="#home" role="tab">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- ... end Login-Registration Form  -->


<a class="back-to-top" href="#">
<img src="{{ asset('web/icons/back-to-top.svg') }}" alt="arrow" class="back-icon">
</a>



@include('web.shared.script')


</body>

</html>
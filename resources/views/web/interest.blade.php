@extends('web.home')
@section('content')

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap">
		<div class="content-bg bg-music"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
				<div class="main-header-content">
					<h1>Howdy ! {{ $user->name}}</h1>
					<p>Here you’ll be able to manage your interests so that when you enter the beautiful world inside you are able to view shops and products as per your liking , please help us to let you know more !
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Account -->

@if ($errors->any())
<div class="alert alert-danger col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<div class="h6 title">Select your interests</div>
				</div>
			</div>
		</div>
	</div>
</div>

                   
<form method="{{ $method }}" action="{{ $action }}" novalidate> 
{{ csrf_field() }}
<div class="container">
	<div class="row">
    
 @foreach($tags as $tag)
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="ui-block">
				<div class="available-widget">
                   <div class="checkbox">
						<label>
							<input name="interest[]" type="checkbox" value="{{ $tag->id }}">
							{{ $tag->title }}
						</label>
					</div>
				</div>
			</div>
		</div>
@endforeach
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">

					<div class="align-right">
					<button class="btn btn-primary btn-md-2">Save Changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
@stop

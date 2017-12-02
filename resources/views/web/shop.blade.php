@extends('web.home')
@section('content')

<!-- Top Header -->

@include('web.shared.shop-header')

<!-- ... end Top Header -->



<div class="container">
<div class="row">

<!-- Main Content -->


<!-- ... end Main Content -->


<!-- Left Sidebar -->

<div class="col-xl-3">
<div class="ui-block">
<div class="ui-block-title">
<h6 class="title">Profile Intro</h6>
</div>
<div class="ui-block-content">
<ul class="widget w-personal-info item-block">
    <li>
        <span class="title">About Me:</span>
        <span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
    </li>
    <li>
        <span class="title">Favourite TV Shows:</span>
        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
    </li>
    <li>
        <span class="title">Favourite Music Bands / Artists:</span>
        <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
    </li>
</ul>

</div>
</div>

</div>


<!-- ... end Right Sidebar -->
<div class="photo-album-item-wrap col-xl-9">
				<div class="photo-album-item create-album" data-mh="album-item" style="height: 414.984px;">

					<a href="#" data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>

					<div class="content">

						<a href="{{ url('products/add') }}" class="btn btn-control bg-primary">
							<svg class="olymp-plus-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('web/icons/icons.svg#olymp-plus-icon')}}"></use></svg>
						<div class="ripple-container"></div></a>

						<a href="" class="title h5" data-toggle="modal" data-target="#create-photo-album">Add Products In Your Store</a>
						<span class="sub-title">It only takes a few minutes!</span>

					</div>

				</div>
			</div>
</div>
</div>



<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
<div class="modal-dialog ui-block window-popup update-header-photo">
<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
<svg class="olymp-close-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-close-icon')}}"></use></svg>
</a>

<div class="ui-block-title">
<h6 class="title">Update Cover Photo</h6>
</div>

<form id="cover_upload" method="post" action="{{ url('coverUpload') }}" enctype="multipart/form-data">
<label  style="width:100%" class="upload-photo-item">
<svg class="olymp-computer-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-computer-icon')}}"></use></svg>

<h6>Upload Photo</h6>
<span>Browse your computer.</span>
{{ csrf_field() }}
<input id="upload-file" name="cover_upload" type="file" style="display:none"/>
</label>
</form>
</div>
</div>
<!-- Window-popup Update User Photo -->

<div class="modal fade" id="update-user-photo">
<div class="modal-dialog ui-block window-popup update-header-photo">
<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
<svg class="olymp-close-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-close-icon')}}"></use></svg>
</a>

<div class="ui-block-title">
<h6 class="title">Update Your Avatar</h6>
</div>

<form id="user_upload" method="post" action="{{ url('userUpload') }}" enctype="multipart/form-data">
<label  style="width:100%" class="upload-photo-item">
<svg class="olymp-computer-icon"><use xlink:href="{{asset('web/icons/icons.svg#olymp-computer-icon')}}"></use></svg>

<h6>Upload Photo</h6>
<span>Browse your computer.</span>
{{ csrf_field() }}
<input id="user_image" name="user_image" type="file" style="display:none"/>
</label>
</form>
</div>
</div>


@stop
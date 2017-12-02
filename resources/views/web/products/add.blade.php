@extends('web.home')
@section('content')

<!-- Top Header -->
@include('web.shared.shop-header')

<!-- ... end Top Header -->



<div class="container">
<div class="row">

<!-- Main Content -->


<!-- ... end Main Content -->



<!-- ... end Right Sidebar -->
<div class="photo-album-item-wrap col-xl-12">
<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Favorite Page Information</h6>
				</div>
				<div class="ui-block-content">
					<form>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control" placeholder="" type="text" value="Green Goo">
								<span class="material-input"></span></div>

								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control" placeholder="" type="email" value="greengoo_gigs@yourmail.com">
								<span class="material-input"></span></div>

								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Since</label>
									<input name="datetimepicker" value="10/24/1984">
									<span class="input-group-addon">
										<svg class="olymp-calendar-icon icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="icons/icons.svg#olymp-calendar-icon"></use></svg>
									</span>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control" placeholder="" type="text" value="Rock">
								<span class="material-input"></span></div>

								<div class="form-group label-floating">
									<label class="control-label">Your Website</label>
									<input class="form-control" placeholder="" type="email" value="www.ggrock.com">
								<span class="material-input"></span></div>


								<div class="form-group label-floating is-empty">
									<label class="control-label">Your Phone Number</label>
									<input class="form-control" placeholder="" type="text">
								<span class="material-input"></span></div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your Country</label>
									<div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="United States"><span class="filter-option pull-left">United States</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">United States</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Australia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
										<option value="US">United States</option>
										<option value="AU">Australia</option>
									</select></div>
								<span class="material-input"></span></div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your State / Province</label>
									<div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="California"><span class="filter-option pull-left">California</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">California</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Texas</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
										<option value="CA">California</option>
										<option value="TE">Texas</option>
									</select></div>
								<span class="material-input"></span></div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your City</label>
									<div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="San Francisco"><span class="filter-option pull-left">San Francisco</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">San Francisco</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
										<option value="SF">San Francisco</option>
										<option value="NY">New York</option>
									</select></div>
								<span class="material-input"></span></div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Write a little description about the page</label>
									<textarea class="form-control" placeholder="">We are Rock Band from Los Angeles, now based in San Francisco, come and listen to us play!</textarea>
								<span class="material-input"></span></div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

								<div class="form-group label-floating is-empty">
									<label class="control-label">Based In</label>
									<input class="form-control" placeholder="" type="text">
								<span class="material-input"></span></div>

								<div class="form-group label-floating is-select">
									<label class="control-label">Category</label>
									<div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Rock Band"><span class="filter-option pull-left">Rock Band</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Rock Band</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pop Band</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Jazz Band</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
										<option value="MA">Rock Band</option>
										<option value="FE">Pop Band</option>
										<option value="FE">Jazz Band</option>
									</select></div>
								<span class="material-input"></span></div>
							</div>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Additional Info</label>
								<textarea class="form-control" placeholder="">We are open for gigs all over the country. If you are interested, please contact us via our website or send us an email to gigs@ggrock.com</textarea>
								<span class="material-input"></span></div>
							</div>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Facebook Account</label>
									<input class="form-control" type="text" value="www.facebook.com/greengoo_rock">
									<i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
								<span class="material-input"></span></div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Twitter Account</label>
									<input class="form-control" type="text" value="www.twitter.com/greengoo_rock">
									<i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
								<span class="material-input"></span></div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Your RSS Feed Account</label>
									<input class="form-control" type="text">
									<i class="fa fa-rss c-rss" aria-hidden="true"></i>
								<span class="material-input"></span></div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Your Dribbble Account</label>
									<input class="form-control" type="text" value="">
									<i class="fa fa-dribbble c-dribbble" aria-hidden="true"></i>
								<span class="material-input"></span></div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Spotify Account</label>
									<input class="form-control" type="text" value="green_goo@spotify.com">
									<i class="fa fa-spotify c-spotify" aria-hidden="true"></i>
								<span class="material-input"></span></div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<a href="#" class="btn btn-secondary btn-lg full-width">Restore all Attributes</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<a href="#" class="btn btn-primary btn-lg full-width">Save all Changes</a>
							</div>
						</div>
					</form>
				</div>
			</div> 			
</div>
</div>
</div>


@stop
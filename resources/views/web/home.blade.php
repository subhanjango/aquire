<!DOCTYPE html>
<html lang="en">

@include('web.shared.head')
<!-- Fixed Sidebar Left -->

@include('web.shared.left-side')

<!-- ... end Fixed Sidebar Left -->

<!-- Fixed Sidebar Left -->

@include('web.shared.responsive-left')

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

@include('web.shared.right-side')

<!-- ... end Fixed Sidebar Right -->

<!-- Fixed Sidebar Right -->

@include('web.shared.responsive-right')

<!-- ... end Fixed Sidebar Right -->


<!-- Header -->

@include('web.shared.header')

<!-- ... end Header -->


<!-- Responsive Header -->

@include('web.shared.responsive-header')

<!-- ... end Responsive Header -->

<div class="header-spacer"></div>


<div class="container">
	<div class="row">

		<!-- Main Content -->
        @yield('content')
		
	</div>
</div>


<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<a class="back-to-top" href="#">
	<img src="{{ asset('web/icons/back-to-top.svg') }}" alt="arrow" class="back-icon">
</a>



@include('web.shared.script')


</body>

</html>
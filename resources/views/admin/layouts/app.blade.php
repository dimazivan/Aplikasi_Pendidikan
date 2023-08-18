<!DOCTYPE html>
<html>

<!-- Mirrored from thetheme.io/flaty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 02:40:31 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		@hasSection('title')
		@yield('title')
		@else
		Aplikasi Pendidikan
		@endif
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{ asset('asset/icon/dimaz4.png') }}">

	@include('admin.components.css.css')

	<!-- In File Style -->
	@hasSection('style')
	@yield('style')
	@endif
	<!-- <style>
		footer {
			position: absolute;
			bottom: 0;
		}
	</style> -->

	<!-- @hasSection('style_right_menu')
	@yield('style_right_menu')
	@else
	<style>
		#right_menu {
			position: fixed;
			z-index: 10000;
			width: 150px;
			background: #1b1a1a;
			border-radius: 5px;
			/* display: none; */
			transform: scale(0);
			transform-origin: top left;
		}

		#right_menu.visible {
			/* display: block; */
			transform: scale(1);
			transition: transform 200ms ease-in-out;
		}

		#right_menu .right_menu_item {
			padding: 8px 10px;
			font-size: 15px;
			color: #eee;
			cursor: pointer;
			border-radius: inherit;
		}

		#right_menu .right_menu_item:hover {
			background: #343434
		}
	</style>
	@endif -->
</head>

<body>
	<!-- Setting -->
	@include('admin.components.setting.setting')

	<!-- Navbar -->
	@include('admin.layouts.navbar')

	<div class="container" id="main-container">
		<!-- Sidebar -->
		@include('admin.layouts.sidebar')
		<div id="main-content">
			<!-- Content -->
			@yield('content')

			<!-- Footer -->
			@include('admin.layouts.footer')
			<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
	</div>
	<!-- Script -->
	@include('admin.components.script.script')

	<!-- In File Script -->
	@hasSection('script')
	@yield('script')
	@endif

	<!-- Load Custom -->
	@hasSection('components')
	@yield('components')
	@endif


</body>

</html>
@include('frontend.layouts.header_link')
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		@include('frontend.layouts.header')
		<!-- //Header -->
		<!-- Start Search Popup -->
		@include('frontend.layouts.search')
		<!-- End Search Popup -->
        <!-- Start Slider area -->
        @yield('slider')
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		@yield('content')
		<!-- Best Sale Area Area -->
		<!-- Footer Area -->
		@include('frontend.layouts.footer')
		<!-- //Footer Area -->
		<!-- QUICKVIEW PRODUCT -->
		@yield('quick_view')
		<!-- END QUICKVIEW PRODUCT -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
@include('frontend.layouts.footer_link')
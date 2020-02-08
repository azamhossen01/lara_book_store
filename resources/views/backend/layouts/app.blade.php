@include('backend.layouts.header')

  @include('backend.layouts.topmenu')

  <div id="wrapper">

    <!-- Sidebar -->
    @include('backend.layouts.sidebar')

    @yield('content')
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  @include('backend.layouts.footer_link')

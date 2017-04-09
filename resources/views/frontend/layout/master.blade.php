<!DOCTYPE html>

<html lang="en">

@section('header')
    @include('frontend.partials.header')
@show


<body id="home">

     @include('frontend.partials.nav')


     <!-- Main content -->
     <section class="content">
     	 <!-- Your Page Content Here -->
         @yield('main-content')<!-- /.content -->
     </section><!-- /.content-wrapper -->

     @include('frontend.partials.footer')



    @include('frontend.partials.js')


    @yield('js')

    <!-- custom js functions -->
    @yield('script')
    <!-- ./custom js functions -->



</body>

</html>
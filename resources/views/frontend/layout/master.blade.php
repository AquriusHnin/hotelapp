@inject('user','Illuminate\Auth\Guard')
<?php 
    
    $user_name=$user->user()->name; 
    $user_role=$user->user()->role['id'];
    
?>
<!DOCTYPE html>

<html lang="en">

@section('header')
    @include('frontend.partials.header')
@show


<body id="home">

     @include('frontend.partials.nav')

     <section class="content">
         @yield('main-content')
     </section>

     @include('frontend.partials.footer')

</body>

</html>
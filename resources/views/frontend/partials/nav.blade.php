<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('frontend/') }}"><img src="{{asset('img/images/logo.png') }}"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('frontend/rooms') }}">ROOMS</a></li>        
        <li><a href="{{ url('frontend/services') }}">SERVICES</a></li>
        <li><a href="{{ url('frontend/gallery') }}">GALLERY</a></li>
        <li><a href="{{ url('frontend/contact') }}">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>


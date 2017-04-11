<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{route('index')}}">N.O.R.S.U</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{route('index')}}">Home</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li> 
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::user())
          <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        @else
          <li><a href="{{route('staff_login')}}"><span class="glyphicon glyphicon-log-in"></span> Teacher</a></li>
        @endif
        
      </ul>
    </div>
  </div>
</nav>
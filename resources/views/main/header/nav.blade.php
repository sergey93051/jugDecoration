<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav__Bar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    @if (Request::path()!="/")
    <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    @endif
    @if (Auth::guard("newuser")->check())
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ Auth::guard("newuser")->user()->email }}
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <div class="dropdown-item">
          <a class="btn btn-light w-100" href="{{ url('/profile') }}">my profile</a>
        </div>
        <div class="dropdown-item">
          <form action="{{ Route('logouts') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger w-100">logout</button>
          </form>
        </div>
      </div>
    </div>
    @else
    @if (Request::path()=="/")
    <ul class="navbar-nav">
      <li class="nav-item active">
        <span type="button" class="navbar-brand singbut">{{__("mess.Sing up") }}</span>
      </li>
      <li class="nav-item">
        <span type="button" class="navbar-brand logbut">{{__("mess.Log in")}}</span>
      </li>
    </ul>
    @endif
    @endif
      <ul class="navbar-nav" id="lang">
        <li class="nav-item">
          <a class="navbar-brand" href="mess/arm">
            <img src="{{ asset('storage/flag/Armenia.png') }}" width="35px" height="auto" alt="">
          </a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="mess/en">
            <img src="{{ asset('storage/flag/usd.png') }}" width="35px" height="auto" alt="">
          </a>
        </li>
      </ul>
   <div id="icons__nav">
     <ul class="navbar-nav" >
       <li class="nav-item">
         <img src="{{ asset('storage/phone/phone.png') }}" width="35px" height="auto">
          <span>00099999999</span>
       </li>
       <li class="nav-item">
         <img src="{{ asset('storage/phone/support.png') }}" width="35px" height="auto">
         <span><a class="" href="#">support</a></span>
       </li>
    </ul> 
   </div>
    
     
  </div>

</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav__Bar" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    {{-- <a class="navbar-brand" href="#">Home</a> --}}
    {{-- <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="locale/arm">arm</a>
      <a class="dropdown-item" href="locale/en">eng</a> 
   </div> --}}
  
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
    <ul class="navbar-nav">
      <li class="nav-item active">
        <span type="button" class="navbar-brand singbut">{{__("mess.Sing up") }}</span>
      </li>
      <li class="nav-item">
      <span type="button" class="navbar-brand logbut">{{__("mess.Log in")}}</span>
      </li>
    </ul>
    @endif
    <div class="row" id="lang">
      <ul class="navbar-nav   mt-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="mess/arm">arm</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="mess/en">eng</a> 
        </li>
      </ul>
    </div>
    
    {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}

  </div>

</nav>
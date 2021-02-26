<div class="mainNav">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" id="nav__Bar">
    <div class="showdown" style="background: rgb(255, 255, 255);opacity:0.0;"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="alertMessLIkeEles" style="display: none;">
        <div class="alert alert-warning col-md-7" role="alert">
          {{ __("mess.մուտք գործեք ձեր հաշիվ բովանդակությունը տեսնելու համար")}}
        </div>
      </div>
      @if (Request::path()!="/")
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>

      @endif
      @if (Auth::guard("newuser")->check())
      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          {{ Auth::guard("newuser")->user()->email }}
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="margin:3px;">
          <div class="dropdown-item">
            <a class="btn btn-light w-100" href="{{ url('/profile') }}">{{__("mess.Պրոֆիլ")}}</a>
          </div>
          <div class="dropdown-item">
            <form action="{{ Route('logouts') }}" method="post">
              @csrf
              <button type="submit" class="btn btn-danger w-100">{{__("mess.Դուրս գալ")}}</button>
            </form>
          </div>
        </div>
      </div>
      @else
      @if (Request::path()=="/")
      <ul class="navbar-nav">
        <li class="nav-item">
          <span type="button" class="navbar-brand singbut">{{__("mess.Գրանցվել") }}</span>
        </li>
        <li class="nav-item">
          <span type="button" class="navbar-brand logbut">{{__("mess.Մուտք գործեք")}}</span>
        </li>
      </ul>
      @endif
      @endif
      <ul class="navbar-nav" id="lang">
        <li class="nav-item">
          <span class="navbar-brand langArm" type="button">
            <img src="{{ asset('storage/flag/Armenia.png') }}" width="35px" height="auto" alt="">
          </span>
        </li>
        <li class="nav-item">
          <span class="navbar-brand langEn" type="button">
            <img src="{{ asset('storage/flag/usd.png') }}" width="35px" height="auto" alt="">
          </span>
        </li>
        <li class="nav-item favorite">
          <a @if (Auth::guard("newuser")->check()) href="{{ url('/favorite') }}" @else type="button"
            class="elseLikePage" @endif>
            <span class="secelm">
              <img src='{{ asset("storage/account/like.png")}}'>
            </span>
            <span class="firstelm">
              {{__("mess.Ձեր հավանածնները")}}
            </span>
          </a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <span class="navbar-brand cardNav" type="button">
          <a href="{{route('mycardshow')}}">
            <img src="{{ asset('storage/account/card.png') }}" width="35px" height="auto">
            <span class="countcartshopp">
              <p>0</p>
            </span>
          </a>
        </span>
      </li>
    </ul>
  </nav>
</div>
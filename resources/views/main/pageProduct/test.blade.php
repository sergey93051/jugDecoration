<div class="container-fluid">
  <div class="row col-md-13 productItemMain">
    @foreach ($Catjoinprod as $item)
    <div>
      <img class="prodImgItem" id="{{ $item->id }}" type="button"
        src='{{ asset("storage/prodImg{$item->directory}/$item->img")}}'>
      <p class="headerItem">{{__("pro.$item->title")}}</p>
      <p class="priceItem"><strong>{{__("mess.Գինը")}}</strong><span>AMD{{ $item->price }}<span></p>
      <p class="likeItem">
        <span id="{{ $item->id }}" type="button" @if(Auth::guard("newuser")->check()) class="likeButTrue" @else
          class="likeButFalseprod" @endif>
          <img src='{{ asset("storage/account/like.png")}}'>
          <span>
            {{ $item->tottle }}
          </span>
          @if(!Auth::guard("newuser")->check())
          <div class="alert alert-warning likealertprod" role="alert" style="font-size:9px;">
            {{__("mess.Մուտք գործեք գնահատման համար")}}
          </div>
          @endif
        </span>
      @include("main.alert.loadSpinner")
      </p>
    </div>
    @endforeach
  </div>
  {{-- prodImgItem--}}
</div>
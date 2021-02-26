@extends('main.layouts.index')
@section('page1','productbuy')

@section('header')
@include('main.header.nav')
@include('main.header.regiSter')
@endsection
@section('fcmess')
@include('main.messfc.messlink')
@endsection
@section('containerMain')
@foreach ($dBProdcompact[0] as $item)
{{-- order --}}
<div class="main__order">
  <span type="button" class="material-icons">
    <img src='{{ asset("storage/account/close.png")}}' width="25px" height="auto">
  </span>
  <h2>
    {{__("mess.Ընտրել ձեռք բերման տարբերակը")}}
  </h2>
  <div class="row orders">
    <p class="col-sm cashSent" type="button">{{__("mess.Կանխիկ")}}<br>{{__("mess.(առաքման ժամանակ)")}}</p>
    <p class="col-sm" type="button">{{__("mess.Բանկային քարտով")}}<br>{{__("mess.օնլայն")}}<br>
      <strong style="color: crimson">(շուտով հասանելի կլինի)</strong>
    </p>
  </div>
</div>
{{-- end --}}
<div class="container">
  <div class="row__productinfo">
    <div class="card lg-5">
      <div class="row no-gutters">
        <div class="col-lg-6 imgshow">
          <img src='{{ asset("storage/prodImg{$item->directory}/{$item->img}")}}' class="card-img"
            style="width:100%;height:auto;">
          <img src='' class="card__img">
          @if($item->img_2==true)
          <img src='{{ asset("storage/prodImg{$item->directory}/{$item->img_2}")}}' class="card__img">
          @endif
          @if($item->img_3==true)
          <img src='{{ asset("storage/prodImg{$item->directory}/{$item->img_3}")}}' class="card__img">
          @endif
        </div>
        <div class="col-md-6">
          <div class="card-body cardBody">
            <h3 class="card-title itemNameProd">{{__("pro.$item->title")}}</h3>
            <p class="card-text textTitle">{{__("pro.$item->text")}}</p>
            <div class="card-text orderSent">
              <span><strong>{{__("mess.քանակ")}}</strong></span>
              <span class="orderAddBuy">
                <span><img src="{{asset('storage/account/back.png')}}" type="button" width="30px" height="auto"></span>
                <span>1</span>
                <span><img src="{{asset('storage/account/next.png')}}" type="button" width="30px" height="auto"></span>
              </span>
            </div>
            <div class="card-text">
              <strong class="orderpr">{{__("mess.Գինը")}} <span>{{$item->price}}</span>AMD</strong>
            </div>
            <p class="card-text">
              @section('fclink')
              <meta property="og:url" content="http://jug.getserver.net/products/info/{{$item->id}}" />
              <meta property="og:type" content="Jug" />
              <meta property="og:title" content='{{__("pro.$item->title")}}' />
              <meta property="og:description" content='{{__("pro.$item->text")}}' />
              <meta property="og:image" content="{{ asset("storage/prodImg{$item->directory}/{$item->img}")}}" />
              @endsection
              <div id="fb-root"></div>
              <script src="{{ asset('/js/flink.js') }}"></script>
              <div class="fb-share-button" data-href="http://jug.getserver.net/products/info/{{$item->id}}"
                data-layout="button_count">
              </div>
            </p>
            <div class="card-text likeMainProdinfo">
              <span id="{{ $item->id }}" type="button" @if(Auth::guard("newuser")->check()) class="likeButTrue" @else
                class="likeButFalse" @endif>
                <img src='{{ asset("storage/account/like.png")}}' class="likeImg">
                <span>
                  @foreach ($dBProdcompact[1] as $itottle)
                  {{$itottle->tottle}}
                  @endforeach
                </span>
                <div class="alert alert-warning likealertprod" role="alert" style="display: none;">
                  {{__("mess.Մուտք գործեք գնահատման համար")}}
                </div>
              </span>
            </div>
            <div class="card-button buy__prod">
              <div class="messBuy">
                <button type="button" class="btn btn-outline-primary buyprod">
                  {{__("mess.Գնել հիմա")}}
                </button>
              </div>
            </div>
            <div class="card-button addCard" id="{{$item->id}}">
              <button type="button" class="btn btn-warning">
                <img src="{{asset('storage/account/addcard.png')}}" width="35px" height="auto" alt="">
                {{__("mess.Ավելացնել")}} 
              </button>
              @include('main.alert.loadSpinner')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mainAssortment">
 <span>{{__("mess.Նոր տեսականի")}}</span> 
  <span><img src="{{ asset("storage/account/nextnext.png") }}" ></span>
  <div class="col">
    @foreach ($dBProdcompact[2] as $item)
    <div class="card mb-3 cardassortment" id="{{ $item->id }}" type="button">
      <div class="row g-0">
        <div class="col-4">
          <img src="{{ asset("storage/prodImg{$item->directory}/$item->img")}}" width="100%" height="100px" alt="...">
        </div>
        <div class="col-8">
          <div class="card-body">
            <h5 class="card-title">{{__("pro.$item->title")}}</h5>
            <p class="card-text">{{__("pro.$item->text")}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endforeach
@endsection
{{-- footer --}}
@section('footer')
@include('main.footer.footer')
@endsection
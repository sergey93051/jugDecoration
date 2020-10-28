@extends('main.layouts.index')
@section('page1','productbuy')

@section('header')
@include('main.controlheader.mainheader')
@endsection

@section('containerMain')

<div class="row__productinfo">

  @foreach ($dBProdinfo as $item)

  <div class="card mb-5" style="max-width:85%;">
    <div class="row no-gutters">
      <div class="col-md-4 imgshow">
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img)}}' class="card-img" style="width:100%;height:auto;">
        <img src='' class="card__img">
        @if($item->img_2==true)
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_2)}}' class="card__img">
        @endif
        @if($item->img_3==true)
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_3)}}' class="card__img">
        @endif
      </div>
      <div class="col-md-8">
        <div class="row col-5 buy__prod">
          @if (Auth::guard("newuser")->check())
          <input type="hidden" class="orderId" value="{{$item->id}}">
          <p type="button" class="alert alert-success buyprod" role="alert">
            {{__("mess.Գնել հիմա")}}
          </p>
          @else
          <p type="button" class="alert alert-danger singbut" role="alert">
            {{__("mess.Գրանցվեք գնումններ կատարելու համար")}}
          </p>
          @endif
        </div>
        <div class="card-body" id="card__body">
          <h5 class="card-title">{{__("pro.$item->title")}}</h5>
          <p class="card-text" style="max-width:400px">{{__("pro.$item->text")}}</p>
          <p class="card-text">
            <div id="fb-root"></div>

            <div class="fb-share-button" 
            data-href="http://localhost:8000/products/info/{{$item->id}}" 
            data-layout="box_count">
            </div>
          </p>
          <strong class="card-text">{{__("mess.Գինը")}} {{ $item->price }} AMD</strong>        
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
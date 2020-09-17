@extends('main.layouts.index')
@section('page1','productbuy')

@section('header')
@include('main.controlheader.mainheader')   
@endsection

@section('containerMain')

<div class="row__productinfo">
  
  @foreach ($dBProdinfo as $item)
  <div class="card mb-5" style="max-width:70%;">
    <div class="row no-gutters">
      <div class="col-md-4 imgshow">
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img)}}' class="card-img">
        <img src='' class="card__img">
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_2)}}' class=" card__img">
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_3)}}' class=" card__img">
      </div>
      <div class="col-md-8">
        <div class="row col-5 buy__prod">
          @if (Auth::guard("newuser")->check())
          <p type="button" class="alert alert-success buyprod" role="alert">
            Գնել հիմա
          </p>
          @else
          <p type="button" class="alert alert-danger singbut" role="alert">
            registration for buying a product
          </p>
          @endif
        </div>
        <div class="card-body" id="card__body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">{{$item->text }}</p>
          <p class="card-text">price ${{ $item->price }}</p>
          <p class="card-text">Author {{ $item->after }}</p>
        </div>
      </div>
    </div>
  
  </div>
  @endforeach  
</div>


@endsection
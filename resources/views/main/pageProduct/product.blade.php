@extends('main.layouts.index')
@section('page1','Product')

@section('header')
@include('main.header.nav')
@endsection

@section('containerMain')
<div class="main__page__product">
  @if($Catjoinprod->isEmpty())
  <div class="container" style="margin-top:10%">
    <div class="alert alert-secondary" role="alert">
      Empty
    </div>
  </div> 
  @else
  @foreach ($Catjoinprod as $item)
  <div class="card mb-5 card__prod">
    <div>
      <img id="{{ $item->id }}" type="button" src='{{ asset("storage/prodimg__{$item->directory}/".$item->img)}}'
        class="card-img-top but__prodinfo" >
      <div class="card-body title">
        <h5 class="card-title">{{__("prolang.$item->title")}}</h5>
        <p class="card-text price"><strong>{{__("mess.Գինը")}}</strong><span> ${{ $item->price }}<span></p>
        <p class="card-text like__main">
          <span type="button" @if(Auth::guard("newuser")->check())  class="like__but" id="{{ $item->id }}" @endif >
            <img src='{{ asset("storage/account/like.png")}}'>
            <span>{{ $item->tottle }}</span>
            <span class="spinner-border text-dark prod__load" role="status" style="display:none;">
              <span class="sr-only">Loading...</span>
            </span>
          </span>
        </p>
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>
@endsection
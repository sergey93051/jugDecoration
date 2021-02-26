@extends('main.layouts.index')
@section('page1',"product")
@section('header')
@include("main.header.nav")
@endsection
@section('containerMain')
@if($Catjoinprod->isEmpty())
<div class="container" style="margin-top:10%">
  <div class="alert alert-secondary" role="alert">
    Empty
  </div>
</div>
@else
<div class="container-fluid">
  <div class="rowcontrolprod">
    <div class="row productItemMain">
      @foreach ($Catjoinprod as $item)
      <div class="card">
        <img class="prodImgItem" id="{{ $item->id }}" type="button"
          src='{{ asset("storage/prodImg{$item->directory}/$item->img")}}'>
        <div class="card-body">
          <h5 class="card-title headerItem">{{__("pro.$item->title")}}</h5>
          <p class="card-text priceItem">
            <strong>{{__("mess.Գինը")}}</strong><span>AMD{{ $item->price }}<span>
          </p>
          <p class="card-text likeItem">
            <span id="{{ $item->id }}" type="button" @if(Auth::guard("newuser")->check()) class="likeButTrue" @else
              class="likeButFalseprod" @endif>
              <img src='{{ asset("storage/account/like.png")}}'>
              <span>
                {{ $item->tottle }}
              </span>
            </span>
            @include("main.alert.loadSpinner")
          </p>
          <p class="card-text likealertprod">
            @if(!Auth::guard("newuser")->check())
            {{__("mess.Մուտք գործեք գնահատման համար")}}
            @endif
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endif
@endsection
{{-- footer --}}
@section('footer')
@include('main.footer.footer')
@endsection
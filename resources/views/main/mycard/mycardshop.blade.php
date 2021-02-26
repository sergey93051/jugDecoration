@extends('main.layouts.index')
@section('page1','Cart')

@section('header')
@include('main.header.nav')
@endsection

@section('containerMain')
<div class="container maintitlecard" style="">
  <img src='{{ asset("storage/account/card.png")}}'>
  <strong>
    {{__("mess.Գնումների զամբյուղ")}}
  </strong>
</div>
@if($cartarray[0]<=0) 
<div class="container" style="margin-top:75px;">
  <div class="alert alert-secondary" role="alert">
    Empty
  </div>
  </div>
  @else
  {{-- order --}}
  <div class="center main__order">
    <span type="button" class="material-icons">
      <img src='{{ asset("storage/account/close.png")}}' width="25px" height="auto">
    </span>
    <h2>
      {{__("mess.Ընտրել ձեռք բերման տարբերակը")}}
    </h2>
    <div class="row orders">
      {{-- href='{{ url("/orders/{$item->id}")}}' --}}
      <p class="col-sm cashSentwithcard" type="button">{{__("mess.Կանխիկ")}}<br>{{__("mess.(առաքման ժամանակ)")}}

      </p>
      <p class="col-sm" type="button">{{__("mess.Բանկային քարտով")}}<br>{{__("mess.օնլայն")}}<br>
        <strong style="color: crimson">(շուտով հասանելի կլինի)</strong>
      </p>
    </div>
  </div>
  {{-- end --}}
  <div class="container-fluid ">
    <div class="rowcontrolcart">
      <div class="row  carditemMain">
        @foreach($cartarray[0] as $i=>$item)
        <div class="card">
          <img src='{{ asset("$item->img")}}' class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title cartName">{{__("pro.$item->itemNameProd")}}</h5>
            <p class="card-text "><strong>{{__("mess.քանակ")}}</strong><span
                class="countprod">{{$item->totalcash}}</span></p>
            <p class="card-text "><strong>{{__("mess.Գինը")}} </strong>AMD<span class="tottleprice">
                {{ $item->totalPrace }}<span>
            </p>
            <p class="card-text">
              <button type="button" id="{{ $item->id }}"
                class="btn btn-outline-dark but__prodinfo__fromprofile">{{__("mess.դիտել")}}</button>
            </p>
            <p class="card-text cardtextitem">
              <button type="button" class="btn btn-primary cardbayprod buyprod">{{__("mess.Գնել հիմա")}}</button>
              <a href="{{ URL('/mycard/delete/'.$item->id )}}" class="btn btn-danger">{{__("mess.ջնջել")}}</a>
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endif
  @endsection
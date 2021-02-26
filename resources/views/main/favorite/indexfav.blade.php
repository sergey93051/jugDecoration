@extends('main.layouts.index')
@section('page1','favorite')

@section('header')
@include('main.header.nav')   
@endsection


@section('containerMain')
<div class="container favMain">
    <img src='{{ asset("storage/account/like.png")}}'>
    <strong>
      {{__("mess.Ձեր հավանածնները")}}
    </strong>
  </div>
    @if($likeProd->isEmpty()) 
    <div class="container" style="margin-top:75px;">
      <div class="alert alert-secondary" role="alert">
        Empty
      </div> 
    </div>
    @else
    <div class="container favitem">
      <div class="row col-md productItemMain">
        @foreach ($likeProd as $item)
        <div>
          <img class="but__prodinfo__fromprofile" id="{{ $item->id }}" type="button"
            src='{{ asset("storage/prodImg{$item->directory}/$item->img")}}'>
          <p class="headerItem">{{__("pro.$item->title")}}</p>
          <p class="priceItem"><strong>{{__("mess.Գինը")}}</strong><span>AMD{{ $item->price }}<span></p>    
        </div>
        @endforeach  
      </div>
    </div>    
  @endif
  @endsection



 
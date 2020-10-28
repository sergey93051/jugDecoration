@extends('main.layouts.index')
@section('page1','Orders')

@section('header')
@include('main.controlheader.mainheader')
@endsection
@section('containerMain')
<div class="container order__finish__success">
  <div class="row">
    <div class="col-sm">
      <div class="alert alert-success" role="alert">
        {{__("mess.Շնորակալություն գնումների համար")}}
      </div>
    </div>
  </div>
</div>
<div class="container order__finish">
    <div class="column">
      <h2>
        {{__("mess.Ձեր գնումը")}}
      </h2>
      <table class="table table-bordered" style=" table-layout: fixed;" >
        @foreach ($orderinfo as $i)
        <thead>
          <tr  >
            <th scope="col">{{__("mess.Ապրանք")}}</th>
            <th scope="col">{{__("mess.քանակ")}}</th>
            <th scope="col">{{__("mess.Գինը")}}</th>
            <th scope="col">{{__("mess.ընտամենը")}}</th>
          </tr>
        </thead>
        <tbody>
          <tr class="order__table">
            <td>{{__("pro.$i->title")}}</td>
            <td class="ordaddprod"><button>-</button><span>1</span><button>+</button></td>
            <td class="orderpr">{{$i->price}}</td>
            <td class="totalord"></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <div class="ord__button__main">
        <button type="button" class="btn" style="background: coral;color:white;">{{__("mess.Հաստատել")}}</button>
      </div>
    </div>
</div>
@endsection
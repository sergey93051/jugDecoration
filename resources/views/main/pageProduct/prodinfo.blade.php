@extends('main.layouts.index')
@section('page1','product')
@section('containerMain')
@include('main.controlheader.mainheader')
<div class="row__productinfo">
  @foreach ($dBProdinfo as $item)
  <div class="card mb-5" style="max-width:70%;">
    <div class="row no-gutters">
      <div class="col-md-4 imgshow">
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img)}}' class="card-img" >
        <img src='' class="card__img" >
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_2)}}' class=" card__img" >
        <img src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_3)}}' class=" card__img" >
      </div>
      <div class="col-md-8">
        <div class="buy__prod">
          <button type="button" class="btn btn-primary singbut">Buy now</button>
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
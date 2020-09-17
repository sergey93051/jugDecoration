@extends('main.layouts.index')
@section('page1','Product')

@section('header')
@include('main.controlheader.mainheader')
@endsection

@section('containerMain')
<div id="main__page__product">
  @if($Catjoinprod->isEmpty())
  <div class="container" style="margin-top:10%">
    <div class="alert alert-secondary" role="alert">
      Empty
    </div>
  </div>
  @else
  @foreach ($Catjoinprod as $item)
  <div class="container cate__name">
    <p>
      {{$item->name}}
    </p>
  </div>
  <div class="card mb-5" style="width: 18rem;">
    <div class="prod__card">
      <img id="{{ $item->id }}" type="button" src='{{ asset("storage/prodimg__{$item->directory}/".$item->img_2)}}'
        class="card-img-top but__prodinfo" alt="...">
      <div class="card-body title">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text price"><strong>Price</strong><span> ${{ $item->price }}<span></p>
        <p class="card-text author"> <strong>Author</strong><span>{{ $item->after }}</span></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
@endif
@endsection
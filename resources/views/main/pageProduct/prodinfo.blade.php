@extends('main.layouts.index')
@section('page1','product')
@section('containerMain')
@include('main.controlheader.mainheader')
<div class="row__product">
  @foreach ($dBProdinfo as $item)
  <div class="card mb-5" style="max-width: 850px;">
    <div class="row no-gutters">
      <div class="col-md-4">
       <img src="{{ asset("storage/productImg/".$item->img) }}" class="card-img" alt="..."> 
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div> 
  @endforeach 
</div>

@endsection







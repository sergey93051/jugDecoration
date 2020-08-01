@extends('main.layouts.index')
@section('page1','profile')
@include('main.controlheader.mainheader')
@section('containerMain')
<div class="row__profile">
    {{-- @foreach ($prodinfo as $item) --}}
    <div class="card mb-5"  id="profile">
      <div class="row no-gutters">
        <div class="col-md-4">
         {{-- <img src="{{ asset("storage/productImg/".$item->img) }}" class="card-img" alt="...">  --}}
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Profile</h5>
            <p class="card-text">Name Surname:</p>
            <p class="card-text">email:</p>
            <p class="card-text">Telefone:</p>
            <p class="card-text">country:</p>
            <p class="card-text">city:</p>
            <p class="card-text">post:</p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div> 
    {{-- @endforeach  --}}
  </div>



@endsection
@extends('main.layouts.index')
@section('page1','profile')
@include('main.controlheader.mainheader')
@section('containerMain')
<div class="row__profile">
  {{-- @foreach ($prodinfo as $item) --}}
  <div class="card mb-5" id="profile">
    <div class="row no-gutters">
      {{-- <div class="col-md-4">
         <img src="{{ asset("storage/productImg/".$item->img) }}" class="card-img" alt="..."> 
      </div> --}}
      <div class="card__menu">        
          <div class="card-body">
            <span id="errormessangeP" style="display:none">
              <div class="alert alert-danger">
                  <ul></ul>
               </div>
            </span>
             <span id="successmessangeP" style="display:none">
              <div class="alert alert-success" role="alert">
                  successful change
              </div>
             </span>
            <h5 class="card-title">Profile</h5>
            @foreach ($profUser as $item)
           <div class="alert alert-warning" role="alert">
                  if you want to change your email address and password, 
                  write to the support center
            </div>
            <small class="card-text">Name Surname:</small>
            <input class="form-control mb-2"    type="text" name="nameSname"     value="{{$item->nameS}}" id="exampleInput__nameSnameP">
            <small class="card-text">Telefone:</small>
            <input class="form-control mb-2"  type="number" name="phone"    value="{{$item->phone}}" id="exampleInput__phoneP">
            <small class="card-text">country:</small>
            <input class="form-control mb-2"    type="text" name="country"   value="{{$item->country}}" id="exampleInput__countryP">
            <small class="card-text">city:</small>
            <input class="form-control mb-2"   type="text" name="city"  value="{{$item->city}}" id="exampleInput__cityP">
            <small class="card-text">post:</small>
            <input class="form-control mb-2"   type="number" name="postcode" value="{{$item->postcode}}" id="exampleInput__postcodeP">
            @endforeach

            <button type="submit" class="btn btn-primary" id="sent__prof">change</button>
          </div>       
      </div>
    </div>
  </div>
  {{-- @endforeach  --}}
</div>

@endsection
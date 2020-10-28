@extends('main.layouts.index')
@section('page1','profile')

@section('header')
@include('main.controlheader.mainheader')
@endsection

@section('containerMain')

<div class="container" style="margin-top:5%;">
  <strong>
    {{__("mess.Ձեր հավանածնները")}}
  </strong>
</div>
<div class="main__page__product">
  @if($likeProd->isEmpty())
  <div class="container" style="margin-top:10%">
    <div class="alert alert-secondary" role="alert">
      Empty
    </div>
  </div>
  @else
  @foreach ($likeProd as $item)
  <div class="card mb-5 card__prod">
    <div>
      <img id="{{ $item->id }}" type="button" src='{{ asset("storage/prodimg__{$item->directory}/".$item->img)}}'
        class="card-img-top but__prodinfo__fromprofile">
      <div class="card-body title">
        <h5 class="card-title">{{__("prolang.$item->title")}}</h5>
        <p class="card-text price"><strong>{{__("mess.Գինը")}}</strong><span> ${{ $item->price }}<span></p>
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>
<div class="row__profile">
  <div class="card mb-5" id="profile">
    <div class="row no-gutters">
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
          <input class="form-control mb-2" type="text" name="nameSname" value="{{$item->nameS}}"
            id="exampleInput__nameSnameP">
          <small class="card-text">Telefone:</small>
          <input class="form-control mb-2" type="number" name="phone" value="{{$item->phone}}"
            id="exampleInput__phoneP">
          <small class="card-text">country:</small>
          <input class="form-control mb-2" type="text" name="country" value="{{$item->country}}"
            id="exampleInput__countryP">
          <small class="card-text">city:</small>
          <input class="form-control mb-2" type="text" name="city" value="{{$item->city}}" id="exampleInput__cityP">
          <small class="card-text">street:</small>
          <input class="form-control mb-2" type="text" name="street" value="{{$item->street}}"
            id="exampleInput__street">
          @endforeach
          <button type="submit" class="btn btn-primary" id="sent__prof">change</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
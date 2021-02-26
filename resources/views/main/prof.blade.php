@extends('main.layouts.index')
@section('page1','profile')

@section('header')
@include('main.header.nav')
@endsection

@section('containerMain')
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
            <small><Strong>{{__("mess.ձեր առաքման հասցեն")}}</Strong></small>
            <div class="form-group">
                <input type="text" name="country" class="form-control" id="exampleInput__country" value="{{$item->country}}">
            </div> 
            <div class="form-group">
                <input type="text" name="city" class="form-control" id="exampleInput__city" value="{{$item->city}}">
            </div>
            <div class="form-group">
                <input type="text" name="street" class="form-control" id="exampleInput__street" value="{{$item->street}}">
            </div>
          @endforeach
          <button type="submit" class="btn btn-primary" id="sent__prof">change</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
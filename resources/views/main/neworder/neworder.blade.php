 @extends('main.layouts.index')
 @section('page1','Orders')

@section('header')
  @include('main.header.nav')
@endsection


 @section('containerMain') 
 <div class="container order__finish">
   <div class="column">
     <h2>
       {{__("mess.Ձեր գնումը")}}
     </h2>
     <div class="alert alert-success order__finish__success" role="alert">
      @lang("mess.Շնորակալություն գնումների համար")
    </div>
     <div class="alert alert-primary" role="alert">
       {{__('mess.Պատվերը պատրաստ է լինում 15-30 օրվա ընթացքում')}}
    </div>
     <table class="table table-bordered" style=" table-layout: fixed;">
      @if (session()->has('orderproduct'))
      @php
       $orderinfo = [];
       $orderinfo[] = Session::get('orderproduct');
       @endphp
       @foreach ($orderinfo as $i)
       <thead>
         <tr>
           <th scope="col">{{__("mess.Ապրանք")}}</th>
           <th scope="col">{{__("mess.քանակ")}}</th>
           <th scope="col">{{__("mess.Գինը")}}</th>
         </tr>
       </thead>
       <tbody>
         <tr class="orderSent">
           <td>{{__("pro.$i[itemNameProd]")}}</td>
           <td>{{ $i["totalcash"] }}</td>
           <td class="orderpr">{{$i["totalPrace"]}}</td>
         </tr>
       </tbody>
       @endforeach
       @endif
     </table>
     @if (!Auth::guard("newuser")->check())
     <div class="container-fluid">
       <div class="row">
         <p class="alert alert-warning col-sm-6" role="alert">
           {{__("mess.Գրանցվեք կամ մուտք գործեք ձեր հաշիվ գնումններ կատարելու համար")}}
         </p>
       </div>
       <div class="row">
         <div class="col">
           {{-- reg --}}
           <div class="mainRegOrder">
             <strong>{{__("mess.Գրանցվել") }}</strong>
               @include('main.alert.regerrormess')        
             <div class="form-group">
               <input type="email" name="email" class="form-control" id="orderInput__Email1"
                 placeholder="{{__("mess.էլ փոստի հասցե")}}*">
             </div>
             <div class="form-group">
               <input type="text" name="nameSname" class="form-control" id="orderInput__nameSname"
                 placeholder="{{__("mess.Անուն ազգանուն")}}*">
             </div>
             <div class="form-group">
               <input type="number" name="phone" class="form-control" id="orderInput__phone"
                 placeholder="{{__("mess.հեռախոսահամար")}}*">
             </div>
             <div class="form-group">
               <small></small>
               <input type="password" name="password" class="form-control" id="orderInput__Password1"
                 placeholder="{{__("mess.գաղտնաբառ")}}*">
             </div>
             <small><Strong>{{__("mess.ձեր առաքման հասցեն")}}</Strong></small>
             <div class="form-group">
               <input type="text" name="country" class="form-control" id="orderInput__country"
                 placeholder="{{__("mess.երկիր")}}">
             </div>
             <div class="form-group">
               <input type="text" name="city" class="form-control" id="orderInput__city"
                 placeholder="{{__("mess.քաղաք")}}">
             </div>
             <div class="form-group">
               <input type="text" name="street" class="form-control" id="orderInput__street"
                 placeholder="{{__("mess.փողոց")}}">
             </div>

             <button id="but__regOrder" type="submit" class="btn btn-primary">{{__("mess.Գրանցվել") }}</button>
             <span class="closereg">@include('main.alert.loadSpinner')</span> 
           </div>
          </div>
         {{-- log --}}
         <div class="col">
           <div class="mainlogOrder">
             <strong>{{__("mess.Մուտք գործեք")}}</strong>
             @include('main.alert.logerrormess')
             <div class="form-group">
               <label for="logexampleInputEmail1">{{__("mess.էլ փոստի հասցե")}}</label>
               <input type="email" class="form-control" id="orderInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
             <div class="form-group">
               <label for="logexampleInputPassword1">{{__("mess.գաղտնաբառ")}}</label>
               <input type="password" class="form-control" id="orderInputPassword1">
             </div>
             <button type="submit" id="log__butOrder" class="btn btn-primary">{{__("mess.Մուտք գործեք")}}</button>
             <span class="closelog">@include('main.alert.loadSpinner')</span> 
            </div>
         </div>
       </div>
       @else
       <div class="ord__button__main">
         <button type="button" class="btn" >{{__("mess.Հաստատել")}}</button>
         @include('main.alert.loadSpinner')
       </div>
       @endif
     </div>
    </div>
   @endsection

  
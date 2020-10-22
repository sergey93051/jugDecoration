<div class="container main__order">
  <span type="button" class="material-icons">
    <img src='{{ asset("storage/account/close.png")}}' width="25px" height="auto">
  </span>
  <h2>
    {{__("mess.Ընտրել ձեռք բերման տարբերակը")}}
  </h2>
  <div class="row orders">
    <a class="col-sm" href="{{ url('/orders')}}">{{__("mess.Կանխիկ")}}<br>{{__("mess.(առաքման ժամանակ)")}}</a>
    <a class="col-sm" href="#">{{__("mess.Բանկային քարտով")}}<br>{{__("mess.օնլայն")}}<br>
      <p style="color: crimson">(շուտով հասանելի կլինի)</p>
    </a>
  </div>
</div>
<div class="container Regform__row" style="display:none;">
    <span type="button" class="material-icons">
        <img src='{{ asset("storage/account/close.png")}}' width="25px" height="auto">
    </span>  
    {{-- <div class="alert alert-warning warning__foruser" role="alert">
        {{__("Խնդրում ենք նշել իրական տվյալներ առաքման համար")}}           
    </div> --}}
    @include('main.header.message')
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="exampleInput__Email1" placeholder="{{__("mess.էլ փոստի հասցե")}}*">
    </div>
    <div class="form-group">
        <input type="text" name="nameSname" class="form-control" id="exampleInput__nameSname" placeholder="{{__("mess.Անուն ազգանուն")}}*">
    </div>
    <div class="form-group">
        <input type="number" name="phone" class="form-control" id="exampleInput__phone" placeholder="{{__("mess.հեռախոսահամար")}}*">
    </div>
       <div class="form-group">
        <input type="text" name="country" class="form-control" id="exampleInput__country" placeholder="{{__("mess.երկիր")}}*">
    </div>
    <div class="form-group">
        <input type="text" name="city" class="form-control" id="exampleInput__city" placeholder="{{__("mess.քաղաք")}}*">
    </div>
    <div class="form-group">
        <input type="text" name="street" class="form-control" id="exampleInput__street" placeholder="{{__("mess.փողոց")}}">
    </div>
    <div class="form-group">
        <small>{{__("mess.գաղտնաբառ")}}</small>
        <input type="password" name="password" class="form-control" id="exampleInput__Password1">
    </div>
    {{-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}

    <button id="but__reg" type="submit" class="btn btn-primary">{{__("mess.Գրանցվել") }}</button>
</div>
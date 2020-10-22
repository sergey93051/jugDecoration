<div class="container logform__row" style="display:none;">
  <span type="button" class="material-icons">
    <img src='{{ asset("storage/account/close.png")}}' width="25px" height="auto">
  </span>
  @include('main.header.message')
  <div class="form-group">
    <label for="logexampleInputEmail1">{{__("mess.էլ փոստի հասցե")}}</label>
    <input type="email" class="form-control" id="logexampleInput__Email1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="logexampleInputPassword1">{{__("mess.գաղտնաբառ")}}</label>
    <input type="password" class="form-control" id="logexampleInput__Password1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Forgot Password</label>
  </div>
  <button type="submit" id="log__but" class="btn btn-primary">{{__("mess.Մուտք գործեք")}}</button>
</div>
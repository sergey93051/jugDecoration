<div class="container Regform__row" style="display:none;">
    <span type="button" class="material-icons">
        close
    </span>
    {{-- error --}}
    <span id="errormessange">
        <div class="alert alert-danger">
            <ul></ul>
        </div>
    </span>
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="exampleInput__Email1" placeholder="Email*">
    </div>
    <div class="form-group">
        <input type="text" name="nameSname" class="form-control" id="exampleInput__nameSname" placeholder="Name Surname*">
    </div>
    <div class="form-group">
        <input type="number" name="phone" class="form-control" id="exampleInput__phone" placeholder="phone*">
    </div>
    <div class="form-group">
        <input type="number" name="postcode" class="form-control" id="exampleInput__postcode" placeholder="postcode*">
    </div>
    <div class="form-group">
        <input type="text" name="country" class="form-control" id="exampleInput__country" placeholder="country*">
    </div>
    <div class="form-group">
        <input type="text" name="city" class="form-control" id="exampleInput__city" placeholder="city*">
    </div>
    <div class="form-group">
        <small>password</small>
        <input type="password" name="password" class="form-control" id="exampleInput__Password1" placeholder="password*">
    </div>
    {{-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}

    <button id="but__reg" type="submit" class="btn btn-primary">register</button>
</div>
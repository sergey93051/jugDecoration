<div class="container helpmailform__row" style="display:none;">
    <div>
        <span type="button" class="material-icons">
            <img src='{{ asset("storage/account/close.png")}}' width="25px" height="auto">
        </span>
        <div>
            @include('main.header.message')
        </div>
    </div>
    <div class="form-group">
        <strong>{{__("mess.ՈՒղղարկել հաղորդագրություն")}}</strong>
    </div>
    <div>
        <input type="file" name="files" class="helpformGroup__file">
    </div>
    <div class="form-group">
        <textarea class="form-control helpformGroup__text" cols="86.5">
        </textarea>
    </div>
    <button type="submit" class="help__but" class="btn btn-primary">{{__("mess.ուղղարկել")}}</button>
</div>
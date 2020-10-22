<div class="container-fluid main__cate">
    <div class="row">
        @foreach ($Category as $k=>$item)
        @if ($k===0)
        <div class="col-sm-8 div1 hov__show">
            <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
            <div class="cat__row__maintext" id="{{$item->id}}">
                <div class="text__show">
                    <h1>{{__("catlang.$item->name")}}</h1>
                    <p>{{__("catlang.$item->text")}}</p>
                </div>
            </div>
        </div>
        @elseif($k===1)
        <div class="col-sm-4">
            <div class="div2 hov__show">
                <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
                <div class="cat__row__maintext" id="{{$item->id}}">
                    <div class="text__show">
                        <h1>{{__("catlang.$item->name")}}</h1>
                        <p>{{__("catlang.$item->text")}}</p>
                    </div>
                </div>
            </div>
            @elseif($k===2)
            <div class="div3 hov__show">
                <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
                <div class="cat__row__maintext" id="{{$item->id}}">
                    <div class="text__show">
                        <h1>{{__("catlang.$item->name")}}</h1>
                        <p>{{__("catlang.$item->text")}}</p>
                    </div>
                </div>
            </div>
        </div>
        @elseif($k>2)
        <div class="col-sm-4 divelse hov__show">
            <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
            <div class="cat__row__maintext" id="{{$item->id}}">
                <div class="text__show">
                    <h1>{{__("catlang.$item->name")}}</h1>
                    <p>{{__("catlang.$item->text")}}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
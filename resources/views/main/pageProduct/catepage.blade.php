<div class="container-fluid main__cate">

    <div class="row">
        @foreach ($Category as $k=>$item)
        @if ($k===0)
        <div class="col-sm-8 div1" style="background-color:lavender;">
            <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
            <div class="cat__row__maintext heig">
                <h1>{{$item->name}}</h1>
                <p>{{$item->text}}</p>
            </div>
        </div>
        @elseif($k===1)
        <div class="col-sm-4" style="background-color:lavenderblush;">
            <div class="div2" style="background-color:rgb(241, 82, 135);">
                <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
                <div class="cat__row__maintext heig2" id="maintext">
                    <h1>{{$item->name}}</h1>
                    <p>{{$item->text}}</p>
                </div>
            </div>
            @elseif($k===2)
            <div class="div3" style="background-color:rgb(5, 235, 63);">
                <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
                <div class="cat__row__maintext">
                    <h1>{{$item->name}}</h1>
                    <p>{{$item->text}}</p>
                </div>
            </div>
          
        </div>
        @elseif($k>2)
        <div class="col-sm-4 divelse" style="background-color:rgb(5, 235, 63);">
            <img src="{{ asset("storage/Cate_img/{$item->img}") }}" alt="">
            <div class="cat__row__maintext">
                <h1>{{$item->name}}</h1>
                <p>{{$item->text}}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>

</div>
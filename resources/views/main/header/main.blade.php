<div class="container-fluid">
   <div class="row" id="main__headCont">
      <div class="col-md jug__mainfoto">
         <img src="{{ asset("storage/mainImg/jugMain.jpg")}}" >
        <div class="alert alert-light jug__ptext" role="alert">
        <img src="{{asset('storage/tokos/5toc.png')}}">
         <span>{{__("mess.յուրաքանչյուր գնումից նվիրաբերում ենք բարեգործությանը")}}</span>
      </div>
      </div>
      <div class="col-md" id="videoKav1">
          <video controls autoplay preload="none" controlsList="nodownload" width="100%" height="400px"
            <source src="{{ asset("video/kav1.mp4") }}" type="video/mp4">
            <source src="{{ asset("video/kav1.ogg") }}" type="video/ogg">
         </video>
      </div>
   </div>
   <div class="row">
      <div class="col" id="title__head">
         <hr>
         <h2 class="font-italic">{{__("mess.Կիրառական և դեկորատիվ կավե պարագաներ")}}</h2>
         <p class="lead my-3">{{__("mess.Միայն ձեռքի աշխատանք")}}</p>
      </div>
   </div>
</div>

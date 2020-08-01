function sentAjax(){
//Auth
   $("#but__reg").on("click",function(){

   $.ajaxSetup({
 	   headers:{
 	   	   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
 	   }
    });
    $.ajax({
 	  url:"/register",
 	  type:"POST",
 	  data:{
         email:$("#exampleInput__Email1").val(),
         nameS:$("#exampleInput__nameSname").val(),
         phone:$("#exampleInput__phone").val(),
         postcode:$("#exampleInput__postcode").val(),
         country:$("#exampleInput__country").val(),
         city:$("#exampleInput__city").val(),
         password:$("#exampleInput__Password1").val()
         },//number rating
       error: function(data) {
        if( data.status === 422 ) {
            $('#errormessange>div>ul').html('');
            let showError = '';
            var errors = $.parseJSON(data.responseText);
            $.each(errors['errors'], function (key, value) {
               showError = $("<li>"+value+"</li>");
             $('#errormessange>div>ul').append(showError);
             
          })
          $('#errormessange').css({
                 display:"block"
           })
        }
      }, 
       success:function(){
         $(".Regform__row").css({
            display:'none'
         })
         $(".logform__row").css({
            display:'block'
         }) 
          $('#success__reg').css({
            display:'block'
          })
         $('#success__reg').html($('<div class="alert alert-success" role="alert">'+
         'success'+'</div>'));
         }
      });

 });
//  end
$("#log__but").on("click",function(){
    let email = $("#logexampleInput__Email1").val();
    let pass = $("#logexampleInput__Password1").val();
    $.ajaxSetup({
 	   headers:{
 	   	   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
 	   }
    });
    $.ajax({
 	  url:"profile",
 	  type:"POST",
 	  data:{email:email,password:pass},//number rating
       error: function(data) {
        if( data.status === 422 ) {
            $('#logerrormessange>div>ul').html('');
            let showError = '';
            var errors = $.parseJSON(data.responseText);
            $.each(errors['errors'], function (key, value) {
               showError = $("<li>"+value+"</li>");
             $('#logerrormessange>div>ul').append(showError);
             
          })
          $('#logerrormessange').css({
                 display:"block"
           })
        }
      }, 
       success:function(){
        
       window.location.reload();


       }
      });
});
//endAuth

//ProductInfo

$(".but__prodinfo").on("click",function(){
   let id = $(this).attr("id");
   $.ajaxSetup({
      headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
      }
   });
   $.ajax({
     url:"productinfo/"+id,
     type:"GET",
     data:{id:id},
     error:function(jqXHR,textStatus,errorTHrown){
      alert("error:please check your network");
     },
      success:function(){
               window.location.href="productinfo/"+id;
       }
     });
});




}


export {
    sentAjax
}
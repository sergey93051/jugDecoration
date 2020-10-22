function sentAjax() {

   $(".help__but").on("click", function () {
      var file_data = $('.helpformGroup__file').prop('files')[0];
      var texts = $(".helpformGroup__text").val();
      var form_data = new FormData();
      form_data.append('files', file_data);
      form_data.append('texts', texts);

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "/helpmess",
         type: "POST",
         cache: false,
         contentType: false,
         processData: false,
         data: form_data,
         beforeSend: function () {
            // setting a timeout
            $('.mail__load').css('display', "block");
            $('.errormessange').css({
               display: "none"
            });

         },
         error: function (data) {
            if (data.status === 422) {
               $('.errormessange>div>ul').html('');
               let showError = '';
               var errors = $.parseJSON(data.responseText);
               $.each(errors['errors'], function (key, value) {
                  showError = $("<li>" + value + "</li>");
                  $('.errormessange>div>ul').append(showError);

               });
               $('.errormessange').css({
                  display: "block"
               });
               $('.mail__load').css('display', "none");
            }
         },
         success: function () {
            $('.errormessange').css({
               display: "none"
            });
            $('.mail__load').css('display', "none");
            $(".success__alert").css('display', "block");
            $(".help__but").attr("disabled", true);
         }
      });

   });

   //Auth
   $("#but__reg").on("click", function () {

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "/register",
         type: "POST",
         cache: true,
         beforeSend: function () {
            // setting a timeout
            $('.mail__load').css('display', "block");
            $('.errormessange').css({
               display: "none"
            });
            $(".warning__foruser").css({
               display: "none"
            });
         },
         data: {
            email: $("#exampleInput__Email1").val(),
            nameS: $("#exampleInput__nameSname").val(),
            phone: $("#exampleInput__phone").val(),
            country: $("#exampleInput__country").val(),
            city: $("#exampleInput__city").val(),
            street: $("#exampleInput__street").val(),
            password: $("#exampleInput__Password1").val()
         },//number rating
         error: function (data) {
            if (data.status === 422) {
               $('.errormessange>div>ul').html('');
               let showError = '';
               var errors = $.parseJSON(data.responseText);
               $.each(errors['errors'], function (key, value) {
                  showError = $("<li>" + value + "</li>");
                  $('.errormessange>div>ul').append(showError);

               });
               $('.errormessange').css({
                  display: "block"
               });
            }
            $('.mail__load').css('display', "none");
            $(".warning__foruser").css({
               display: "none"
            });
         },
         success: function () {
            $('.mail__load').css('display', "none");
            $('.success-reg').css({
               display: 'block'
            });
            $(".warning__foruser").css({
               display: "none"
            });
            $(".Regform__row").css({
               display: 'none'
            });
            $(".logform__row").css({
               display: 'block'
            });


         }
      });

   });
   //like
   $(".like__but").click(function () {

      var th = $(this);
      let id = th.attr("id");


      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "/like/" + id,
         type: "GET",
         cache: false,
         beforeSend: function () {
            th.find(".prod__load").css("display", 'inline-block');
         },
         error: function (jqXHR, textStatus, errorTHrown) {
            alert("error:please check your network");
         },
         success: function (data) {
            th.find("span").text(data);
            th.find(".prod__load").css({ display: 'none' });
         }
      });
   });




   //prof
   $("#sent__prof").on("click", function () {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "profileChange",
         type: "GET",
         cache: false,
         data: {
            nameS: $("#exampleInput__nameSnameP").val(),
            phone: $("#exampleInput__phoneP").val(),
            country: $("#exampleInput__countryP").val(),
            city: $("#exampleInput__cityP").val(),
            street: $("#exampleInput__street").val(),
         },//number rating
         error: function (data) {
            if (data.status === 422) {
               $('#errormessangeP>div>ul').html('');
               let showError = '';
               var errors = $.parseJSON(data.responseText);
               $.each(errors['errors'], function (key, value) {
                  showError = $("<li>" + value + "</li>");
                  $('#errormessangeP>div>ul').append(showError);

               })
               $('#errormessangeP').css({
                  display: "block"
               })
            }
            $("#successmessangeP").css({
               display: "none"
            })

         },
         success: function () {
            $("#successmessangeP").css({
               display: "block"
            })

            // window.location.href="/profileChange"
         }
      });

   });


   //  end
   $("#log__but").on("click", function () {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "authorization",
         type: "POST",
         cache: true,
         beforeSend: function () {
            // setting a timeout
            $('.mail__load').css('display', "block");
            $('.logerrormessange').css({
               display: "none"
            })
         },
         data: {
            email: $("#logexampleInput__Email1").val(),
            password: $("#logexampleInput__Password1").val()
         },//number rating
         error: function (data) {
            if (data.status === 422) {
               $('.logerrormessange>div>ul').html('');
               let showError = '';
               var errors = $.parseJSON(data.responseText);
               $.each(errors['errors'], function (key, value) {
                  showError = $("<li>" + value + "</li>");
                  $('.logerrormessange>div>ul').append(showError);

               })
               $('.logerrormessange').css({
                  display: "block"
               })
            }
            $('.mail__load').css('display', "none");
         },
         success: function () {

            window.location.reload();


         }
      });
   });
   //endAuth

   //ProductInfo

   $(".but__prodinfo").on("click", function () {
      let id = $(this).attr("id");
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "info/" + id,
         type: "GET",
         cache: false,
         error: function (jqXHR, textStatus, errorTHrown) {
            alert("error:please check your network");
         },
         success: function () {
            window.location.href = "info/" + id;
         }
      });
   });
   $(".but__prodinfo__fromprofile").on("click", function () {
      let id = $(this).attr("id");
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $.ajax({
         url: "products/info/" + id,
         type: "GET",
         cache: false,
         error: function (jqXHR, textStatus, errorTHrown) {
            alert("error:please check your network");
         },
         success: function () {
            window.location.href = "products/info/" + id;
         }
      });
   });

   $(".cat__row__maintext").on("click", function () {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      let id = $(this).attr("id");
      $.ajax({
         type: "GET",
         url: "products/" + id,
         cache: false,
         error: function (jqXHR, textStatus, errorTHrown) {
            alert("error:please check your network");
         },
         success: function () {
            window.location.href = "products/" + id;
         }
      });
   });

}


export {
   sentAjax
}
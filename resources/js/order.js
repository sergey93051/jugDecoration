import { css } from "jquery";

export default class Orders {

    ordersAjaxtoreg() {
        $("#but__regOrder").on("click", function () {
            $(".closereg").css("display", "inline-block");
            $(".closelog").css("display", "none");
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
                    $(".prodLoad").css("display", 'inline-block');
                    // setting a timeout
                    $('.errormessange').css({
                        display: "none"
                    });
                    $(".warning__foruser").css({
                        display: "none"
                    });
                },
                data: {
                    email: $("#orderInput__Email1").val(),
                    nameS: $("#orderInput__nameSname").val(),
                    phone: $("#orderInput__phone").val(),
                    country: $("#orderInput__country").val(),
                    city: $("#orderInput__city").val(),
                    street: $("#orderInput__street").val(),
                    password: $("#orderInput__Password1").val()
                },//number rating
                error: function (datas) {
                    if (datas.status === 422) {
                        $('.errormessange>div>ul').html('');
                        let showError = '';
                        var errors = $.parseJSON(datas.responseText);
                        $.each(errors['errors'], function (key, value) {
                            showError = $("<li>" + value + "</li>");
                            $('.errormessange>div>ul').append(showError);

                        });
                        $(".prodLoad").css("display", 'none');
                        $('.errormessange').css({
                            display: "block"
                        });
                    }
                },
                success: function () {
                    window.location.reload();
                }
            });

        });
    }
    ordersAjaxtolog() {
        $("#log__butOrder").on("click", function () {
            $(".closereg").css("display", "none");
            $(".closelog").css("display", "inline-block");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/authorization",
                type: "POST",
                cache: true,
                beforeSend: function () {
                    // setting a timeout
                    $(".prodLoad").css("display", 'inline-block');
                    $('.logerrormessange').css({
                        display: "none"
                    })

                },
                data: {
                    email: $("#orderInputEmail1").val(),
                    password: $("#orderInputPassword1").val()
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
                        $(".prodLoad").css("display", 'none');
                        $('.logerrormessange').css({
                            display: "block"
                        });
                    }

                },
                success: function () {
                    window.location.reload();
                }
            });
        });
    }
    ordersAjax() {
        let orderSent = $(".orderSent>*");
        $(".ord__button__main>button").on("click", function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "Post",
                url: "/orders/full",
                beforeSend: function () {
                    $(".prodLoad").css("display", 'inline-block');
                },
                data: {
                    prod: orderSent.eq(0).text(),
                    price: orderSent.eq(1).text(),
                    total: orderSent.eq(2).text()
                },
                error: function (jqXHR, textStatus, errorTHrown) {
                    alert("error:please check your network");
                },
                success: function () {
                    $(".prodLoad").css("display", 'none');
                    $(".order__finish__success").css("display", "block");
                }
            });


        });



    }




}
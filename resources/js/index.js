import Cookies from 'js-cookie';
// function screen() {
//     $(window).on("load resize", function () {
//         $('.messBuy').css("display", "block");
//         if ($(window).width() >= ' 1159') {
//             $('.messBuy').addClass("addClassBuy");
//         } else {
//             $('.messBuy').removeClass("addClassBuy");
//         }

//     });
// }
export default class Mainpage {
    shopcardnav() {
        $(window).on("load resize", function () {
            if ($(".countcartshopp>p").html() == "0") {
                $(".countcartshopp>p").css("color", "red");
            } else {
                $(".countcartshopp>p").css("color", "blue");
            }
        });
    }

    cookiefunction() {

        if (Cookies.get('shopp')) {
            let cookiesData = Cookies.get('shopp');
            cookiesData = $.parseJSON(cookiesData);
            $(".countcartshopp>p").html(cookiesData.length);
            // console.log(cookiesData.length);
        } else {
            $(".countcartshopp>p").html(0);
        }
    }
    index() {
        let main_reg = $(".Regform__row");
        let main_log = $(".logform__row");
        let showdown = $(".showdown");
        let successreg = $(".success-reg");
        //show__order
        let main_orders = $('.main__order');
        //show__helpmess
        let helpmess = $(".helpmailform__row");
        //display:block;
        $(".material-icons").on("click", function () {
            if (main_reg.css('display') === 'block') {
                main_reg.css({
                    display: 'none'
                });
            } else if (main_log.css('display') === 'block') {
                main_log.css({
                    display: 'none'
                });
            } else if (main_orders.css('display') === 'block') {
                main_orders.css({
                    display: 'none'
                });
            }
            if (helpmess.css('display') === 'block') {
                helpmess.css({
                    display: 'none'
                });
            }
            if (showdown.css('display') === 'block') {
                showdown.css({
                    display: 'none'
                });
            }
            if ($('.errormessange').css("display") === "block") {
                $('.errormessange').css({
                    display: "none"
                })
            }
            if ($('.logerrormessange').css("display") === "block") {
                $('.logerrormessange').css({
                    display: "none"
                })
            }
            if (successreg.css('display') === 'block') {
                successreg.css({
                    display: 'none'
                });
            }

        });
        $(".mess__but").click(function () {
            if (showdown.css('display') === 'none') {
                showdown.css({
                    display: 'block'
                });
            }
            if (helpmess.css('display') === 'none') {
                helpmess.css({
                    display: 'block'
                });
            }

        });
        $('.buyprod').click(function () {
            if (showdown.css('display') === 'none') {
                showdown.css({
                    display: 'block'
                });
            }
            main_orders.css({
                display: "block"
            });
        });

        $(".singbut").click(function () {
            main_reg.css({
                display: "block"
            });
            if (main_log.css('display') === 'block') {
                main_log.css({
                    display: 'none'
                });
            }
            if (showdown.css('display') === 'none') {
                showdown.css({
                    display: 'block'
                });
            }

        });


        $(".logbut").click(function () {
            main_log.css({
                display: "block"
            })
            if (main_reg.css('display') === 'block') {
                main_reg.css({
                    display: 'none'
                });
            }
            if (showdown.css('display') === 'none') {
                showdown.css({
                    display: 'block'
                });
            }

        });
        // sing up and log in
    }

    catePage() {
        let cat_maintext = $(".cat__row__maintext");
        cat_maintext.attr("type", "submit");
        $(".hov__show").on('mouseenter', function () {
            $(this).find('.text__show').animate({
                height: "160px"
            }, 1000)
                .css({ backgroundColor: "rgba(109, 109, 109, 0.9)" })
                .children("p").animate({ opacity: "1" }, 2100)
        }).on('mouseleave', function () {
            $(this).find('.text__show').animate({
                height: "70px"
            }, 5)
                .css({ backgroundColor: "rgba(187, 187, 187, 0.6)" })
                .children("p").css({ opacity: "0" });
        });

    }

    catePageAjax() {
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

    authAjax() {
        //registration
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
        //login
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

    }

    lang() {
        //lang
        $(".langArm").on("click", function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/mess",
                type: "POST",
                data: { locale: "arm" },
                success: function () {
                    location.reload();
                }

            })

        });
        $(".langEn").on("click", function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/mess",
                type: "POST",
                data: { locale: "en" },
                success: function () {
                    location.reload();
                }

            })

        });

    }

}




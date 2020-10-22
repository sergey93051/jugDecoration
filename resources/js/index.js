function index() {
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
        let id = $(".orderId").val();

        if (showdown.css('display') === 'none') {
            showdown.css({
                display: 'block'
            });
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "Post",
            url: "/orders/id",
            data: { id: id },
            success: function () {
                main_orders.css({
                    display: "block"
                });
            }
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

function catem() {
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
function product() {
    $(".card__prod").on('mouseenter', function () {
        $(this).css({
            border: "0.5px solid #808080"
        });
    }).on('mouseleave', function () {
        $(this).css({
            border: "0.5px solid white"
        });
    });
    var img = $(".imgshow>img");
    img.eq(1).attr("src", img.eq(0).attr("src"))

    img.on("click", function () {
        img.eq(0).attr("src", $(this).attr("src"))
    })

    //order
    let add = $(".ordaddprod>*");
    let pr = $(".orderpr").text();
    let totorder = $(".totalord");

    var total = 1;
    var newprice = pr;
    totorder.text(pr);
    add.eq(2).click(function () {
        total++;
        add.eq(1).text(total);
        if (total == 30) {
            total = 0;
        }
        newprice = pr * total;
        totorder.text(newprice)
    })
    add.eq(0).click(function () {
        add.eq(1).text(total);
        if (total > 1) {
            total--;
        } else {
            total = 1;
        }
        newprice = pr * total;
        totorder.text(newprice)
    })

    //orderfinish

    let orderSent = $(".order__sent>*");

    $(".ord__button__main>button").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "Post",
            url: "/orders/full",
            data: {
                prod: orderSent.eq(1).text(),
                price: orderSent.eq(2).text(),
                total: orderSent.eq(4).text() + "=>" + orderSent.eq(3).text()
            },
            success: function () {
                $(".order__finish__success").css("display", "block");
            }
        });

    });



}
export {
    index,
    product,
    catem
} 
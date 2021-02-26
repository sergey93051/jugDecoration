import Cookies from 'js-cookie';
export default class Product {

    prodItem() {
        $(".productItemMain>div").on('mouseenter', function () {
            $(this).css({
                boxShadow: "0px 1px 25px -7px rgba(255,157,0,0.75)"
            });
        }).on('mouseleave', function () {
            $(this).css({
                boxShadow: " 0px 0px 0px 0px "
            });
        });
    }
    productItemAjax() {
        $(".prodImgItem,.cardassortment").on("click", function () {
            let id = $(this).attr("id");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/products/info/" + id,
                type: "GET",
                cache: false,
                error: function (jqXHR, textStatus, errorTHrown) {
                    alert("error:please check your network");
                },
                success: function () {
                    location.href = "/products/info/" + id;
                }
            });
        });
    }
    productinfo() {

        let nameproductinfo = $(".itemNameProd").text();
        let cashSent = $(".cashSent");
        let add = $(".orderAddBuy>*");
        let prNumber = $(".orderpr>span");
        let newprNumber = prNumber.text();
        newprNumber = parseFloat(newprNumber)
        let total = 1;
        let newprice = 0;
        add.eq(0).on("click", function () {
            add.eq(1).text(total);
            newprice = newprNumber * total;
            prNumber.text(newprice);
            if (total > 1) {
                total--;
            } else {
                total = 1;
            }
        });
        add.eq(2).on("click", function () {
            total++;
            newprice = newprNumber * total;
            prNumber.text(newprice);
            add.eq(1).text(total);
            if (total == 30) {
                total = 0;
            }

        });
        //    img
        let img = $(".imgshow>img");
        img.eq(1).attr("src", img.eq(0).attr("src"));

        img.on("click", function () {
            img.eq(0).attr("src", $(this).attr("src"));
        });
        //send to order page  
        cashSent.on("click", function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/order/data",
                type: "Post",
                cache: false,
                data: {
                    itemNameProd: nameproductinfo,
                    totalPrace: prNumber.text(),
                    totalcash: add.eq(1).text()
                },
                error: function (jqXHR, textStatus, errorTHrown) {
                    alert("error:please check your network");
                },
                success: function (req) {
                    location.replace("/order");
                }

            });
        });
        //send to addcard    
        $(".addCard").on("click", function () {
            let id = $(this).attr("id");
            let imgforcard = $(".card__img").attr('src');
            let newimgforcardname = '';
            let countcut = imgforcard.search("storage");
            newimgforcardname = imgforcard.substring(countcut);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/mycard/data",
                type: "Post",
                cache: false,
                beforeSend: function () {
                    // setting a timeout
                    $(".prodLoad").css("display", 'inline-block');

                },
                data: {
                    ids: id,
                    img: newimgforcardname,
                    itemNameProd: nameproductinfo,
                    totalPrace: prNumber.text(),
                    totalcash: add.eq(1).text()

                },
                error: function (jqXHR, textStatus, errorTHrown) {
                    alert("error:please check your network");
                },
                success: function (req) {
                    $(".prodLoad").css("display", 'none');
                    if (Cookies.get('shopp')) {
                        let cookiesData = Cookies.get('shopp');
                        cookiesData = $.parseJSON(cookiesData);
                        $(".countcartshopp>p").html(cookiesData.length);
                        $(".countcartshopp>p").css("color", "blue");

                    }
                }

            });
        });

    }
    productinfoAjax() {
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
    }
    likeProduct() {
        $(".likeButTrue").on("click", function () {
            var th = $(this);
            var id = th.attr("id");
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
                    th.next(".prodLoad").css("display", 'inline-block');
                },
                error: function (jqXHR, textStatus, errorTHrown) {
                    alert("error:please check your network");
                },
                success: function (data) {
                    th.find("span").text(data);
                    th.next(".prodLoad").css("display", 'none');
                }
            });


        });
        //likeelse
        $(".elseLikePage").on("click", function () {
            $(".alertMessLIkeEles").css("display", "block");
            $(".mainNav").on("mouseleave", function () {
                $(".alertMessLIkeEles").css("display", "none");
            });
        });
        $(".likeButFalse").on("click", function () {
            $(".likealertprod").css("display", "inline-block");
            $(".likeButFalse").on("mouseleave", function () {
                $(".likealertprod").css("display", "none");
            });
        });

    }

    cartsentorder() {


        var tempcartname = "";
        var tempcountprod = "";
        var temptottleprice = "";
        $(".cardbayprod").on("click", function () {
            const thiscart = $(this);
            const cartname = thiscart.parent().parent("div").find('.cartName').text();
            const countprod = thiscart.parent().parent("div").find('.countprod').text();
            const tottleprice = thiscart.parent().parent("div").find('.tottleprice').text();

            tempcartname = cartname;
            tempcountprod = countprod;
            temptottleprice = tottleprice;

        });
        $(".cashSentwithcard").on("click", function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/order/data",
                type: "Post",
                cache: false,
                data: {
                    itemNameProd: tempcartname,
                    totalPrace: temptottleprice,
                    totalcash: tempcountprod
                },
                error: function (jqXHR, textStatus, errorTHrown) {
                    alert("error:please check your network");
                },
                success: function (req) {
                    location.replace("/order");
                }

            });

        });
    }

}




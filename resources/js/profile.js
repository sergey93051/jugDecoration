export default class Profpage {

    profpageAjax() {
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
                    country: $("#exampleInput__country").val(),
                    city: $("#exampleInput__city").val(),
                    street: $("#exampleInput__street").val()
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

    }


}
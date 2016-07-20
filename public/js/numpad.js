$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var pin = $('#pin');
        $(pin).val(pin.val() + text);
    });

    $('.empnum').click(function  (){
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var pin = $('#emppin');
        $(emppin).val(pin.val() + text);
    })

    $("#remove").click(function () {
        $(pin).val(
            function(index, value){
                return value.substr(0, value.length -1);
            }
        )
    })

    $("#empremove").click(function () {
        $(emppin).val(
            function(index, value){
                return value.substr(0, value.length -1);
            }
        )
    })

    $("#ok").click(function () {
        if ($(".panel-heading").text() == "Organization Pin"){
            orgPin = $(pin).val();
            $(".panel-heading").text("Store Pin");
            $(pin).val("");
        } else {
            $.ajax({
                type: 'POST',
                url: 'main',
                data: {orgPin: orgPin, storePin: $(pin).val(), _token: $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if ( data.status == 'ok' )
                        window.location.replace(data.url);
                }
            })
        }
    });

    $("#empok").click(function () {

        $.ajax({
            type: 'POST',
            url: 'empmain',
            data: {empPin: $(emppin).val(), _token: $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if ( data.status == 'ok' )
                    window.location.replace(data.url);
            }
        })
    });
});
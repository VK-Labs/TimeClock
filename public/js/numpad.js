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

    $("#remove").click(function () {
        $(pin).val(
            function(index, value){
                return value.substr(0, value.length -1);
            }
        )
    })

    $("#ok").click(function () {
        $.ajax({
            type: 'POST',
            url: 'main',
            data: {pin:$(pin).val(), _token:$('meta[name="csrf-token"]').attr('content')},
            success: function(data){
                return data;
            }
        })

    });
});
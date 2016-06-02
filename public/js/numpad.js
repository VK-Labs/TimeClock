$(document).ready(function () {
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
        alert($(pin).val());
    })
});
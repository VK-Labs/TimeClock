$(document).ready(function () {
    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var pin = $('#pin');
        $(pin).val(pin.val() + text);
    });
});
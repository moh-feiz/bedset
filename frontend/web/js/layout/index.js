$(document).ready(function () {
    $(".logout-btn").click(function(){
        $("#logout-form").submit();
    });
    /* chat img in bottom */

    $('div.click-chat').click(function () {
        $('div.chat-show').toggle()
    });


});
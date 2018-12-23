

$(document).ready(function () {
    $(".clickscale").click(function () {
        window.id = $(this).attr('id');
        window.id = window.id.split('image-');
        window.id = window.id[1];
        $("#image-"+window.id).removeClass("clickscale").addClass("clickscale1");

    });



    /* add like */
    $(".add-like").click(function () {
        window.id = $(this).attr('id');
        window.id = window.id.split('like-');
        window.id = window.id[1];

        $.ajax({
            url: $("#url-product-like").val(),
            type: 'POST',
            //cache: false,
            data: {product_id : window.id},
            dataType: "json",
            success: function(result){
                if(result.code == 200){

                    M.toast({html: result.message});
                }else{

                    M.toast({html: result.message});
                }
            },
            error: function(){

            },
            complete: function(){

            }
        });

    });
    /*add comment*/
    $(".comment").click(function () {
        window.id = $(this).attr('id');
        window.id = window.id.split('comment-');
        window.id = window.id[1];
        $("#text-comment-"+window.id ).show();
        $("#comment-"+window.id ).hide();

        $("button.add-comment").click(function () {
            window.text = $(this).parent().children('textarea').val();
            if(window.text == ''){
                alert('comment is empty');
            }else{
                window.id = $(this).attr('id');
                window.id = window.id.split('add-comment-');
                window.id = window.id[1];

                $.ajax({
                    url: $("#url-product-comment").val(),
                    type: 'POST',
                    //cache: false,
                    data: {product_id : window.id , text : window.text},
                    dataType: "json",
                    success: function(result){
                        if(result.code == 200){

                            M.toast({html: result.message});
                        }else{

                            M.toast({html: result.message});
                        }
                    },
                    error: function(){

                    },
                    complete: function(){

                    }
                });

            }

        });


    });


});
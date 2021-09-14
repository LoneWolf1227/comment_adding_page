window.onload = show();

function show()
{
    $.ajax({
        method: "GET",
        url: window.location.href + 'show',
    }).done(function( data ) {

        var string = "";

        $.each( data, function( key, value ) {

            var type = ( key % 2 ) ? "secondary" : "success";

            string += "<div class=\"col-lg-3 mb-5\">"+
                "<div class=\"card text-"+type+"\">" +
    "                        <div class=\"card-header bg-"+type+" text-light\">" +
    "                            <h4>" + value['name']+ "</h4>" +
    "                        </div>" +
    "                        <div class=\"card-body text-"+type+" font-weight-bolder\" style=\"font-size: large\">" +
    "                            <p class=\"text-"+type+"\">" + value['email'] + "</p>" +
    "                            <p class=\"col-lg-9 ml-4\ text-"+type+"\">" + value['comment'] + "</p>" +
    "                            <br>" +
    "                        </div>" +
    "                    </div>"+
                "                    </div>";
        });

        $("#comment-area").html(string);
    });
};



$(document).ready(function() {
    $('#record').click(function() {

        $('#error_name').html('');
        $('#error_email').html('');
        $('#error_comment').html('');

        var form = $("#comment_form").serialize()

            $.ajax({
                type: 'POST',
                url: window.location.href + 'store',
                data: form,
                success: function(data) {
                    show();
                },
                error: function(data) {
                    var errorMassage = 'Поле не должно быть пустым';

                    if (data.responseJSON.name) {
                        $('#error_name').html(errorMassage);
                    }
                    if (data.responseJSON.email) {
                        $('#error_email').html(errorMassage);
                    }
                    if (data.responseJSON.comment) {
                        $('#error_comment').html(errorMassage);
                    }
                }
            });
    });
});

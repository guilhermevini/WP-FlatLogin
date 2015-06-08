(function($) {

    $(document).ready(function() {

        // Clean
        $("#login h1").remove();
        $("#wp-submit").removeClass("button button-primary button-large");

        if ($('body').hasClass('login-action-lostpassword')) {
            // Lost Password


        } else if ($('body').hasClass('login-action-login')) {
            // Login

            $("#login").append("<div id='foto'><img class='fotoIcone' /></div>");
            $('#user_login').blur(function() {
                if ($(this).val() != "") {
                    var imageUrl = hex_md5($(this).val());
                    $('.fotoIcone').attr('src', 'http://www.gravatar.com/avatar/' + imageUrl + '?s=200');
                }
            });

            // Create
            $("#login").append("<div id='info'></div>");

            // Move
            $("form#loginform").appendTo("#info");
            $("#login_error").appendTo("#login"); // To End
            $( ".submit" ).appendTo("label[for='user_pass']");
        }

        $("p#nav").appendTo("form#loginform");

        // Init
        $('#user_login').focus();
    });

})(jQuery);

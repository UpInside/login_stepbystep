$(function () {

    $('html').on('submit', 'form[name="validate_email"]', function (event) {
        event.preventDefault();

        var userEmail = $(this).find('input[name="userEmail"]').val();

        $.post('controller.php', {action: 'validate_email', userEmail: userEmail}, function (data) {

            if(data.validate_email !== true){

            } else {

                $('.userName').html(data.userName);
                $('.userPhoto').attr('src', '_img/' + data.userPhoto);
                $('.j_enter_email').slideToggle();
                $('.j_enter_password').slideToggle();
            }
        }, 'json');
    });

    $('html').on('click', '.j_login_other_account', function (event) {
        event.preventDefault();
        $('.j_enter_email').slideToggle();
        $('.j_enter_password').slideToggle();
    });

    $('html').on('submit', 'form[name="validate_password"]', function (event) {
        event.preventDefault();

        var userPassword = $(this).find('input[name="userPassword"]').val();

        $.post('controller.php', {action: 'validate_password', userPassword: userPassword}, function (data) {

            if(data.validate_password !== true){

            } else {

               window.location = 'http://localhost/play/login_stepbystep/painel.php';
            }
        }, 'json');
    });

});
$(function () {

    $('html').on('submit', 'form[name="validate_email"]', function (event) {
        event.preventDefault();

        var userEmail = $(this).find('input[name="userEmail"]').val();

        $.post('controller.php', {action: 'validate_email', userEmail: userEmail}, function (data) {

            if(data.validate_email !== true){
                $('.j_enter_email .error').html("<p>O e-mail informado não é válido!</p>").slideToggle();
            } else {

                if($('.j_enter_email .error').css('display') != 'none'){
                    $('.j_enter_email .error').html("").slideToggle();
                }

                $('.userName').html(data.userName);

                if(data.userPhoto === '' || data.userPhoto === null){
                    $('.userPhoto').attr('src', '_img/no-user.png');
                } else {
                    $('.userPhoto').attr('src', '_img/' + data.userPhoto);
                }

                $('.j_enter_email').slideToggle();
                $('.j_enter_password').slideToggle();
            }
        }, 'json');
    });

    $('html').on('click', '.j_login_other_account', function (event) {
        event.preventDefault();

        if($('.j_enter_password .error').css('display') != 'none'){
            $('.j_enter_password .error').html("").slideToggle();
        }

        $('.j_enter_email').slideToggle();
        $('.j_enter_password').slideToggle();
    });

    $('html').on('submit', 'form[name="validate_password"]', function (event) {
        event.preventDefault();

        var userPassword = $(this).find('input[name="userPassword"]').val();

        $.post('controller.php', {action: 'validate_password', userPassword: userPassword}, function (data) {

            if(data.validate_password !== true){
                $('.j_enter_password .error').html("<p>A senha informada não confere. Tente novamente!</p>").slideToggle();
            } else {

                if($('.j_enter_password .error').css('display') != 'none'){
                    $('.j_enter_password .error').html("").slideToggle();
                }

               window.location = 'http://localhost/play/login_stepbystep/painel.php';
            }
        }, 'json');
    });

});
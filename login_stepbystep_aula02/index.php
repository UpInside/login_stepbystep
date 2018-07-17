<!DOCTYPE>
<html lang="pt_br">
<head>
    <title>Login Step by Step</title>
    <link rel="stylesheet" href="_cdn/css/reset.css">
    <link rel="stylesheet" href="_cdn/css/style.css">
</head>
<body>

<div class="container-full bg-light-gray">
    <div class="content-full">
        <div class="box-login">

            <div class="box-login-header">
                <img src="_img/upinside.png">
                <h1>Efetuar Login</h1>
            </div>

            <div class="box-login-content j_enter_email">

                <div class="error" style="display: none;"></div>

                <p>Insira o seu e-mail de acesso:</p>

                <form action="" method="post" name="validate_email">
                    <input type="email" name="userEmail" placeholder="E-mail">
                    <span class="box-login-content-form-actions">
                        <a href="#">Esqueceu a senha?</a>
                        <button class="btn btn-blue">Próximo</button>
                    </span>
                </form>

            </div>

            <div class="box-login-content j_enter_password" style="display: none;">

                <div class="box-login-content-welcome">
                    <img src="" width="80" height="80" class="userPhoto">
                    <p>Seja bem-vindo novamente <span class="userName"></span>!</p>
                </div>

                <div class="error" style="display: none;"></div>

                <p>Insira a sua senha para continuar:</p>

                <form action="" method="post" name="validate_password">
                    <input type="password" name="userPassword" placeholder="Senha">
                    <span class="box-login-content-form-actions">
                        <a href="#">Esqueceu a senha?</a>
                        <button class="btn btn-blue">Próximo</button>
                        <p><a href="javascrit:void(0);" class="j_login_other_account">&leftarrow; Logar com outra conta</a></p>
                    </span>
                </form>

            </div>

            <div class="box-login-footer">
                <p>* Todos os seus dados estão seguros!</p>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="_cdn/js/script.js"></script>
</body>
</html>
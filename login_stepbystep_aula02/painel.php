<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 17/07/2018
 * Time: 11:29
 */

ob_start();
session_start();

echo "<h1>Bem vindo ao Painel Administrativo!</h1>";

var_dump($_SESSION);

ob_end_flush();
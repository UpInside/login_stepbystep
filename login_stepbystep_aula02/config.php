<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 16/07/2018
 * Time: 17:07
 */

define('DATABASE', [
    'HOST' => 'localhost',
    'USER' => 'root',
    'PASS' => '',
    'NAME' => 'play_logindinamico',
]);

require_once __DIR__ . '/source/crud/Conn.php';
require_once __DIR__ . '/source/crud/Read.php';
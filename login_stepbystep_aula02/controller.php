<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 17/07/2018
 * Time: 11:14
 */

ob_start();
session_start();

$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$action = $postData['action'];
unset($postData['action']);

switch ($action) {
    case 'validate_email':

        require_once __DIR__ . '/config.php';

        $read = new \CRUD\Read;

        $read->read('users', "WHERE user_email = :email", "email={$postData['userEmail']}");

        if(!$read->getResult()){
            $json['validate_email'] = false;
            break;
        } else {
            $json['validate_email'] = true;
            $json['userName'] = $read->getResult()[0]['user_name'];
            $json['userPhoto'] = $read->getResult()[0]['user_photo'];
            $_SESSION['app']['userEmail'] = $read->getResult()[0]['user_email'];
            break;
        }

        break;

    case 'validate_password':

        require_once __DIR__ . '/config.php';

        $read = new \CRUD\Read;

        $read->read('users', "WHERE user_email = :email AND user_password = :pass", "email={$_SESSION['app']['userEmail']}&pass={$postData['userPassword']}");

        if(!$read->getResult()){
            $json['validate_password'] = false;
            break;
        } else {
            unset($_SESSION['app']['userEmail']);
            $_SESSION['app']['login'] = $read->getResult()[0];
            $json['validate_password'] = true;
            break;
        }

        break;
}

echo json_encode($json);

ob_end_flush();
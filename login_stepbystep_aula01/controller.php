<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 17/07/2018
 * Time: 11:14
 */

$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$action = $postData['action'];
unset($postData['action']);

switch ($action) {
    case 'validate_email':
        $json['validate_email'] = true;
        $json['userName'] = 'Gustavo Web';
        $json['userPhoto'] = 'gustavo.jpg';
        break;

    case 'validate_password':
        $json['validate_password'] = true;
        break;
}

echo json_encode($json);
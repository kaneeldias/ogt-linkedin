<?php

    include_once "config.php";
    include_once "tet.php";

    if (!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['education']) ||
        !isset($_FILES['cv']) ||
        !isset($_POST['g-recaptcha-response'])){
        $output = json_encode(array('type' => 'fail', 'text' => "Incomplete form"));
        die($output);
}

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $education = $_POST['education'];
    $cv = $_FILES['cv'];
    $gcaptcha = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $gcaptcha_private,
        'response' => $gcaptcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    );

    $curlConfig = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
    );

    $ch = curl_init();
    curl_setopt_array($ch, $curlConfig);
    $response = curl_exec($ch);
    curl_close($ch);

    $jsonResponse = json_decode($response);

    /*
    if (!$jsonResponse || !$jsonResponse->success === true) {
        $output = json_encode(array('type' => 'fail', 'text' => "Captcha invalid"));
        die($output);
    }
    */

    echo append([[$first_name, $last_name, $email, $phone, $education]])



?>

<?php
require "autoload.php";
$Error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && $_SESSION['token'] == esc($_POST['token'])) {
    $email = esc($_POST['email']);
    $date = date("Y-m-d H:i:s");
    $url_address = get_random_string(60);
    $firstname = esc($_POST['fname']);
    $lastname = esc($_POST['lname']);
    $password = password_hash(esc($_POST['password']), PASSWORD_DEFAULT);
    $phone = esc($_POST['telephone']);
    $zipcode = esc($_POST['zipcode']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Error = "Please enter a valid email";
    }
    if (!preg_match("/^[0-9\-\(\)\/\+\s]*$/", $phone)) {
        $Error = "Please enter a valid phone number";
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/", $firstname)) {
        $Error = "Please enter a valid first name";
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/", $lastname)) {
        $Error = "Please enter a valid last name";
    }
    if (!preg_match("/^\d{5}(?:[-\s]\d{4})?$/", $zipcode)) {
        $Error = "Please enter a valid zipcode";
    }

    //Check if email is already taken
    $arr = false;
    $arr['email'] = $email;
    $query = "SELECT * FROM users WHERE email = :email limit 1";
    $stm = $connection->prepare($query);
    $check = $stm->execute($arr);

    if ($check) {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if (is_array($data) && count($data) > 0) {
            $Error = "That email is already registered";
        }
    }

    if ($Error == "") {
        $arr['url_address'] = $url_address;
        $arr['date'] = $date;
        $arr['password'] = $password;
        $arr['email'] = $email;
        $arr['phone'] = $phone;
        $arr['firstname'] = $firstname;
        $arr['lastname'] = $lastname;
        $arr['zipcode'] = $zipcode;

        $query = "insert into users (url_address, first_name, last_name, password, email, created_at, phone, zipcode) values (:url_address, :firstname, :lastname, :password, :email, :date, :phone, :zipcode)";
        $stm = $connection->prepare($query);
        $stm->execute($arr);
        $_SESSION['url_address'] = $url_address;
        header("Location: dashboard.php");
        die;
    }

}

/*
place in html later
if(isset($Error) && !$Error ==""){
echo $Error;
}

 */



$_SESSION['token'] = get_random_string(60);

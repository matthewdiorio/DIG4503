<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../private/autoload.php";
$Error = "";
$email = "";
$username = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Error = "Please enter a valid email";
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
        $Error = "Please enter a valid phone";
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        $Error = "Please enter a valid username";
    }
    if (!preg_match("/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/", $address)) {
        $Error = "Please enter a valid address";
    }
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        $Error = "Please enter a valid username";
    }
    if (!preg_match("/^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/", $city)) {
        $Error = "Please enter a valid city";
    }  
    if (!preg_match("/^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$/", $state)) {
        $Error = "Please enter a valid state";
    }
    if (!preg_match("/^\d{5}(?:[-\s]\d{4})?$/", $zipcode)) {
        $Error = "Please enter a valid zipcod";
    }

    $date = date("Y-m-d H:i:s");
    $url_address = get_random_string(60);
    $username = trim(esc($_POST['username']));
    $email = esc($email);
    $password = password_hash(esc($_POST['password']), PASSWORD_DEFAULT);
    $phone = esc($_POST['phone']);
    $address = esc($_POST['address']);
    $city = esc($_POST['city']);
    $state = esc($_POST['state']);
    $zipcode = esc($_POST['zipcode']);




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
        $arr['username'] = $username;
        $arr['password'] = $password;
        $arr['email'] = $email;
        $arr['phone'] = $phone;
        $arr['address'] = $address;
        $arr['city'] = $city;
        $arr['state'] = $state;
        $arr['zipcode'] = $zipcode;

        // $query = "insert into users (url_address, username, password, email, date) values ('$url_address', '$username', '$password', '$email', '$date')";
        $query = "insert into users (url_address, username, password, email, date, phone, address, city, state, zipcode) values (:url_address, :username, :password, :email, :date, :phone, :address:, :city, :state, :zipcode)";
        $stm = $connection->prepare($query);
        $stm->execute($arr);
        //mysqli_query($connection, $query);
        //    header("Location: login.php");
        //  die;

        /*
        place in html later
            if(isset($Error) && !$Error ==""){
                echo $Error;
            }
  
        */
    }
}
?>

<?php

require "./private/autoload.php";

$Error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && $_SESSION['token'] == esc($_POST['token'])) {
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $submit_text = "Please enter a valid email";
    }

    $password = esc($_POST['password']);
    if ($Error == "") {
        $arr['password'] = "$password";
        $arr['email'] = $email;

        $query = "SELECT * FROM users WHERE email = :email && password = :password limit 1";
        $stm = $connection->prepare($query);
        $check = $stm->execute($arr);
        if ($check) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data)>0){
                    $data = $data[0];
                    $_SESSION['url_address'] = $data->url_address;
                    header("Location: index.php");
                    die;
            }
        }

    }
    $submit_text = "Incorrect email or password";
}
$_SESSION['token'] = get_random_string(60);

?>
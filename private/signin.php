<?php

require "./private/autoload.php";
$Error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && $_SESSION['token'] == esc($_POST['token'])) {
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Error = "Please enter a valid email";
    }


    if ($Error == "") {


        $query = "SELECT * FROM users WHERE email = ? limit 1";
        $stm = $connection->prepare($query);
        $check = $stm->execute([$email]);
        if ($check) {

            $data = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data)>0 && password_verify($_POST['password'], $data[0]->password)){
                    $data = $data[0];
                    $_SESSION['url_address'] = $data->url_address;
                    echo $_SESSION['url_address'];
                    echo $data->url_address;
                    header("Location: dashboard.php");
                    die;
            }
        }

    }
    $Error = "Incorrect email or password";
}
$_SESSION['token'] = get_random_string(60);

?>
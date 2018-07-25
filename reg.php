<?php
 error_reporting( E_ERROR ); 

$emailError="";
$passError="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email";
   }
   if($_POST["psw"] !== $_POST["psw-repeat"]){
    $passError = "Invalid password";
   }
    if ($_POST["psw"] == $_POST["psw-repeat"] && $emailError == "") {
        $file = file_get_contents('users.json');
        $usersList = json_decode($file, true);
        for ($i=0; $i <=count($usersList) ; $i++) { 
            foreach ($usersList[$i] as $key => $value) {
                if($key === $_POST["email"]){
                    $emailError = "This email is registered";
                }
            }
        }
        if($emailError == ""){
        unset($file);
        $usersList[] = array($_POST["email"] => $_POST["psw"]);
        file_put_contents('users.json', json_encode($usersList));
        unset($usersList);
        header("Location: http://localhost/regform/login.php");
        exit;
        }
    }

}

require_once "reghtml.php";


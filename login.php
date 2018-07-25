<?php
        
        session_start();
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $file = file_get_contents('users.json');
            $usersList = json_decode($file, true);
            for ($i=0;i<=count($usersList);$i++) {
                foreach ($usersList[$i] as $key => $value) {
                    if($key == $_POST["email"] && $value == $_POST["psw"]){
                        $_SESSION["email"] = $key;
                        $_SESSION["psw"] = $value;
                        header("Location: http://localhost/regform/profile.php");
                    }
                }
            }
        }


    require_once "loginhtml.php";
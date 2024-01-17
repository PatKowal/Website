<?php
include("database.php");

class Log_In {
    public function login($db_conn,$email,$password) {
        $query = "SELECT * FROM users WHERE email ='$email'"; 
        $result = mysqli_query($db_conn, $query);
        $tab = mysqli_fetch_assoc($result);
        $password_hash = $tab["password"];
        if(mysqli_num_rows($result) > 0){
            if(password_verify($password, $password_hash)){
            header("Location: ../main_panel.php");
            }
        }
    }
}

if(isset($_POST["email"]) && isset($_POST["password"])){
    $login = new Log_In();
    $login -> login($db_conn,$_POST["email"],$_POST["password"]);
}

$db_conn -> close();
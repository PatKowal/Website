<?php
include("database.php");

class Register{
    public function useradd($db_conn, $username, $email, $password){
        $query_user_exists = mysqli_query($db_conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($query_user_exists) > 0) {
            echo "<script type='text/javascript'>alert('Podany użytkownik już istnieje');</script>";
        }else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $query_useradd = "INSERT INTO users(username, email, password) VALUES ('$username','$email','$password_hash')";
            if (mysqli_query($db_conn, $query_useradd)) {
                header("Location: ../index.php");
            }else {
                echo "<script type='text/javascript'>alert('Błąd serwera MySQL');</script>";
            }
        }
    }
}

if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $register = new Register();
    $register -> useradd($db_conn, $_POST["username"], $_POST["email"], $_POST["password"]);
}

$db_conn -> close();
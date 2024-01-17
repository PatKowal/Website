<?php
include("database.php");

class Password_Reset {
    public function changePassword($db_conn, $email, $password){
        $query_user_exists = "SELECT * FROM users WHERE email ='$email'";
        $exists = mysqli_query($db_conn, $query_user_exists);
        if(mysqli_num_rows($exists) > 0) {
            $query_table = mysqli_fetch_assoc($exists);
            $id = $query_table["id"];
            $username = $query_table["username"];
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $new_password = "UPDATE users SET id='$id', username='$username', email='$email', password='$password_hash' WHERE email ='$email'";
            if (mysqli_query($db_conn, $new_password)) {
                echo "<script type='text/javascript'>alert('Hasło zostało zmienione');</script>";
            }
        }
    }
}

if(isset($_POST["email"]) && isset($_POST["password"])) {
    $changePassword = new Password_Reset();
    $changePassword -> changePassword($db_conn, $_POST["email"], $_POST["password"]);
}

$db_conn->close();
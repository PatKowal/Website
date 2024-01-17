<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Rejestracja</title>
</head>
<body>
    <center>
        <section id="register_window">
            <form method="post" action="register_panel.php">  
                <input type="text" placeholder="Nazwa użytkownika" name="username" required><br>
                <input type="email" placeholder="E-mail" name="email" required><br>
                <input type="password" placeholder="Hasło" name="password" required><br>
                <input type="submit" id="login_button" value="Zarejestruj się">
            </form>
                <a href="index.php">
                    <button id="register_button">Powrót</button>
                </a>    
        </section>
        <?php
            include("conf/register.php");
        ?>
    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Logowanie</title>
</head>
<body>
    <center>
        <section id="login_window">
            <form method="post" action="index.php">
                <input type="email" placeholder="E-mail" name="email" required><br>
                <input type="password" placeholder="Hasło" name="password" required><br>
                <input type="submit" id="login_button" value="Zaloguj się">
            </form>
            <p id="passreset"><a href="passreset_panel.php">Zapomniałeś hasła?</a></p>
            <hr>
            <a href="register_panel.php">
                <button id="register_button">Zarejestruj się</button>
            </a>
        </section>
        <?php
            include("conf/login.php");
        ?>
    </center>
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Reset Hasła</title>
</head>
<body>
    <center>
        <section id="login_window">
            <form method="post" action="passreset_panel.php">
                <input type="email" placeholder="E-mail" name="email" required><br>
                <input type="password" placeholder="Nowe Hasło" name="password" required><br>
                <input type="submit" id="login_button" value="Zmień hasło">
            </form>
            <hr>
                <a href="index.php">
                    <button id="register_button">Powrót</button>
                </a> 
        </section>
        <?php
            include("conf/passreset.php");
        ?>
    </center>
</body>
</html>
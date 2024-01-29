<?php
    session_start();
    if (isset($_SESSION["logged_in"])) {
        header("Location: index.php");
    }
?>

<!doctype html>

<html lang="en">
<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
</head>

<body>
    <?php
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
                $_SESSION["logged_in"] = true;
                header("Location: index.php");
            } else {
                echo "Wrong username or password";
            }
        }
    ?>

    <h1>Login</h1>

    <form action="login.php" method="post">
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
        <br>

        <label for="password">Password</label>
        <input id="password" name="password" type="password">
        <br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

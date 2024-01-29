<?php
    session_start();
    if (!isset($_SESSION["logged_in"])) {
        header("Location: login.php");
    }
?>

<!doctype html>

<html lang="en">
<head>
    <title>Form Demo</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
</head>

<body>
    <?php if (empty($_POST)) : ?>
    <h1>Form Demo</h1>

    <form action="" method="post">
        <label for="surname">Surname</label>
        <input id="surname" name="surname" type="text">
        <br>

        <label for="forename">Forename</label>
        <input id="forename" name="forename" type="text">
        <br>

        <label for="email">Email</label>
        <input id="email" name="email" type="email">
        <br>

        <label for"subject">Subject</label>
        <textarea id="subject" name="subject"></textarea>
        <br>

        <label for="food">Food</label>
        <select id="food" name="food">
            <option value="pizza">Pizza</option>
            <option value="pasta">Pasta</option>
            <option value="salad">Salad</option>
        </select>
        <br>

        <label for="personNumber">Number of people</label>
        <input id="personNumber" name="personNumber" type="radio" value="1">1</input>
        <input id="personNumber" name="personNumber" type="radio" value="2">2</input>
        <input id="personNumber" name="personNumber" type="radio" value="3">3</input>
        <input id="personNumber" name="personNumber" type="radio" value="4">4</input>
        <input id="personNumber" name="personNumber" type="radio" value="5">5</input>
        <br>

        <label for="gift[]">Gift</label>

        <label for="coke">Coke</label>
        <input id="coke" name="gift[]" type="checkbox" value="Coke">

        <label for="sprite">Sprite</label>
        <input id="sprite" name="gift[]" type="checkbox" value="Sprite">

        <label for="water">Water</label>
        <input id="water" name="gift[]" type="checkbox" value="Water">

        <label for="juice">Juice</label>
        <input id="juice" name="gift[]" type="checkbox" value="Juice">

        <label for="beer">Beer</label>
        <input id="beer" name="gift[]" type="checkbox" value="Beer">

        <label for="wine">Wine</label>
        <input id="wine" name="gift[]" type="checkbox" value="Wine">
        <br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php else : ?>
    <h1>Data you provided:</h1>
    <p>Surname: <?php echo $_POST["surname"]; ?></p>
    <p>Forename: <?php echo $_POST["forename"]; ?></p>
    <p>E-Mail: <?php echo $_POST["email"]; ?></p>
    <p>Subject: <?php echo $_POST["subject"]; ?></p>
    <p>Food: <?php echo $_POST["food"]; ?></p>
    <p>Number of people: <?php echo $_POST["personNumber"]; ?></p>
    <p>Gifts: <?php echo implode(',', $_POST["gift"]); ?></p>

    <?php endif; ?>
</body>
</html>

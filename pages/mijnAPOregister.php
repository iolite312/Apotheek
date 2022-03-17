<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Huisartsenpraktijk Schut">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/mijnapo.css">
    <title>Apotheek Schut</title>
</head>

<body>
    <header>
        <img class="logo" src="/img/placeholderimg.jpg" alt="Logo van de apotheek">
        <?php include '../PHP/header.php' ?>
    </header>
    <div>
        <form class="form" action="/database/register.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="pwd">Password:</label><br>
            <input type="password" id="pwd" name="pwd">
            <input type="submit" name="register" id="submit" value="register">
        </form>
    </div>
    <footer>
        <?php include '../PHP/Footer.php' ?>
    </footer>

</body>

</html>
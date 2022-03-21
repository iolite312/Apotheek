<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Huisartsenpraktijk Schut">
    <link rel="stylesheet" href="/apo_leon/css/global.css">
    <link rel="stylesheet" href="/apo_leon/css/mijnapo.css">
    <title>Apotheek Schut</title>
</head>

<body>
    <header>
        <img class="logo" src="/apo_leon/img/placeholderimg.jpg" alt="Logo van de apotheek">
        <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/header.php' ?>
    </header>
    <div>
        <form class="form" action="/apo_leon/database/login.php" method="post">
            <div class="location">
                <input class="size" type="text" id="username" name="username" placeholder="E-Mail"><br>
                <input class="size" type="password" id="pwd" name="pwd" placeholder="Wachtwoord"><br>
                <input class="size" type="submit" name="Inloggen" id="submit"><br>
            </div>
        </form>
        <button class="size"><a class="register" href="./mijnAPOregister.php">Register</a></button>
    </div>
    <footer>
        <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/Footer.php' ?>
    </footer>

</body>

</html>
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
        <form class="form" action="/apo_leon/php/contact.php" method="post">
            <label for="username">Uw Naam:</label>
            <input type="text" id="username" name="username"><br>
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="mail"><br>
            <label for="telefoon">Telefoon:</label>
            <input type="password" id="telefoon" name="telefoon"><br>
            <label for="pwd">Bericht:</label>
            <input type="text" id="bericht" name="bericht"><br>
            <input type="submit" name="register" id="submit" value="register">
        </form>
    </div>
    <footer>
        <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/Footer.php' ?>
    </footer>

</body>

</html>
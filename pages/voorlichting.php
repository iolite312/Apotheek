<?php $page = 'voorlichting' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Huisartsenpraktijk Schut">
    <link rel="stylesheet" href="/apo_leon/css/global.css">
    <link rel="stylesheet" href="/apo_leon/css/voorlichting.css">
    <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/database/dbconnection.php' ?>
    <title>Apotheek Schut</title>
</head>

<body>
    <header>
        <img class="logo" src="/apo_leon/img/placeholderimg.jpg" alt="Logo van de apotheek">
        <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/header.php' ?>
    </header>
    <article>
        <form class="form" action="voorlichting" method="get" >
            <input type="radio" id="asc" name="sort" value="ASC" <?php if($_GET['sort'] == "ASC" || $_GET['sort'] == ""){echo "checked";} ?>>
            <label for="asc">A --> Z</label>
            <input type="radio" id="desc" name="sort" value="DESC" <?php if($_GET['sort'] == "DESC"){echo "checked";} ?>>
            <label for="desc"> Z --> A</label>
            <input type="submit" name="submit">
        </form>
        <div class='table-style'>
            <table>
                <th>medicijn</th>
                <th>voorraad</th>
                <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/medicijnoverzicht.php' ?>
            </table>
        </div>
    </article>
    <footer>
        <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/footer.php' ?>
    </footer>

</body>

</html>
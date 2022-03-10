<?php $page = 'voorlichting'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Huisartsenpraktijk Schut">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/voorlichting.css">
    <?php include '../database/dbconnection.php' ?>
    <title>Apotheek Schut</title>
</head>

<body>
    <header>
        <img class="logo" src="../img/placeholderimg.jpg" alt="Logo van de apotheek">
        <?php include '../php/header.php' ?>
    </header>
    <article>
    <form class="form" action="voorlichting.php" method="get">
        <input type="radio" id="asc" name="sort" value="ASC" <?php if($_GET['sort'] == "ASC" || $_GET['sort'] == ""){echo "checked";} ?>>
        <label for="asc">A --> Z</label>
        <input type="radio" id="desc" name="sort" value="DESC" <?php if($_GET['sort'] == "DESC"){echo "checked";} ?>>
        <label for="desc"> Z --> A</label>
        <input type="submit" name="submit">
    </form>
     <?php include '../php/medicijnoverzicht.php' ?> 
    </article>
    <footer>
        <?php include '../PHP/Footer.php' ?>
    </footer>
    
</body>
</html>

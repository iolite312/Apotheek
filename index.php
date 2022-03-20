<?php $page = 'index';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Huisartsenpraktijk Schut">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/nieuws.css">
    <?php include '/apo_leon/database/dbconnection.php'?>
    <title>Apotheek Schut</title>
</head>

<body>
    <header>
        <img class="logo" src="./img/placeholderimg.jpg" alt="Logo van de apotheek">
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_leon/php/header.php' ?>
    </header>
    <h2 class="newstext">Nieuws</h2>
    <!-- <div class="news">
        <iframe class="rssfeed"  src="https://rss.app/embed/v1/carousel/dvnsQEwo7Avjf5pW" frameborder="0"></iframe>
    </div> -->
    <div>
        
        <?php include $_SERVER["DOCUMENT_ROOT"] .  "/apo_leon/php/nieuws.php" ?>
    </div>
    <script src="/apo_leon/js/slideshow.js" defer></script>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/apo_leon/php/slideshow.php' ?>
    <div class="text2">
        <h2>Onze services</h2>
        <p class="textwidth">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A placeat quisquam ipsum quod unde vero aut earum nemo! Optio, itaque, possimus veritatis consectetur enim unde magnam velit cumque maxime quidem nemo ullam eos quaerat dicta reiciendis quasi molestias culpa ut voluptates. Quam, maiores cumque amet veniam iste et repellendus velit tenetur fugit assumenda consectetur officia incidunt error molestias ipsa voluptatum aliquid molestiae ex qui iusto beatae possimus id quod? Iure necessitatibus libero reiciendis, iusto nostrum nemo nesciunt qui tempora labore molestias temporibus quidem pariatur inventore eos sint exercitationem id cum suscipit obcaecati harum magnam maiores? Necessitatibus tempora dolore doloremque et tenetur officiis vitae aliquid laboriosam consequuntur deserunt aut veniam provident quo, quisquam incidunt voluptate fugiat quibusdam? Qui voluptatem laboriosam atque iusto ipsa officia porro necessitatibus, ratione corporis earum ab nulla! Veritatis cum magnam, id est rem quasi dolorum dolores veniam quidem repellat minima atque voluptatum rerum facilis sit obcaecati unde quas sint suscipit amet, beatae recusandae iure. Officia, perferendis.</p>
    </div>
    <footer>
        <?php include $_SERVER["DOCUMENT_ROOT"] .  '/apo_leon/php/Footer.php' ?>
    </footer>
</body>

</html>

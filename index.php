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
    <title>Apotheek Schut</title>
</head>

<body>
    <header>
        <img class="logo" src="./img/placeholderimg.jpg" alt="Logo van de apotheek">
        <?php include 'PHP/Header.php' ?>
    </header>
    <h2 class="newstext">Nieuws</h2>
    <div class="news">
        <img class="newsplaceholder" src="./img/placeholderimg.jpg" alt="news">
        <img class="newsplaceholder" src="./img/placeholderimg.jpg" alt="news">
        <img class="newsplaceholder" src="./img/placeholderimg.jpg" alt="news">
    </div>
    <script src="./js/slideshow.js" defer></script>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img class="img" src="./img/placeholderimg.jpg">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img class="img" src="./img/Schermafbeelding 2022-02-10 105447.png">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img class="img" src="./img/placeholderimg.jpg">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="text2">
        <h2>Onze services</h2>
        <p class="textwidth">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo nam natus iusto vel. Voluptate, distinctio sed? Accusantium ex, necessitatibus eos consequatur nesciunt eveniet veritatis iure natus voluptates nam cupiditate veniam et!</p>
    </div>
    <footer>
        <?php include 'PHP/Footer.php' ?>
    </footer>
</body>

</html>
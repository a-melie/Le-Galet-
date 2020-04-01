<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Galet du Jardin Botanique</title>
    <link rel="shortcut icon" type="image/png" href="images/icons8-cocktail-48.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php require_once("src/navbar.php");?>
    <?php require_once("src/header.php");?>

    <span class="anchor" id="menu"></span>
    <section>
        <h2 class="banner-background banner-background-menu">MENU</h2>
        <?php require_once('src/menu.php') ?>
    </section>
    <span class="anchor" id="evenements"></span>
    <section>
    <h2 class="banner-background banner-background-evenements">EVENEMENT</h2>
        <section class="carousel">
            <?php require_once('src/carousel.php');?>
            <ul class="carousel-items">
                <?php
                    foreach ($events as $eventData) {
                        echo '<li class="carousel-item">';
                        echo '<div class="card">';
                        echo '<h2 class="card-title">' . $eventData['title'] . '</h2>';
                        echo '<img src="images/' . $eventData['image'] . '" class="carousel-img" alt="' . $eventData['alt'] . '"/>';
                        echo '<div class="card-content"> <p>' . $eventData['description'] . '</p><br>';
                        echo '<a href="#" class="button">En savoir plus</a>';
                        echo '</div>';
                        echo '</li>';
                    };
                ?>
            </ul>
        </section>
    </section>
    <span class="anchor" id="contact"></span>
    <section id="contact">
        <h2 class="banner-background banner-background-contact">CONTACTEZ-NOUS</h2>
        <?php require_once('src/form.php');?>
    </section>
    <?php require_once("src/footer.php");?>
    <script src="script.js"></script>
</body>
</html>
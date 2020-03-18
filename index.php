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
    <?php require_once("navbar.php");?>
    <?php require_once("header.php");?>

    <span class="anchor" id="menu"></span>
    <section>
        <h2 class="banner-background banner-background-menu">MENU</h2>
        <?php require_once ('menu.php')?>
    </section>
    <span class="anchor" id="evenements"></span>
    <section>
     <h2 class="banner-background banner-background-evenements">EVENEMENTS</h2>
        <section class="carousel">
            <ul class="carousel-items">
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">Les Wilders Vendredi 25 juin</h2>
                        <img src="images/groupplaying.jpg" class="carousel-img" />
                        <div class="card-content">
                            <p>Ils sont beaux avec leurs chapeaux et vous feront vibrer durant des heures ! Venez profiter des Wilders sur scène et devenez Wild le temps d'une chaude soirée de début d'été !</p>
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">Micro ouvert Samedi 26 juin</h2>
                        <img src="images/Micro.jpg" class="carousel-img" />
                        <div class="card-content">
                            <p>Durant toute la soirée, la scène et son micro vous sont ouverts afin d'exprimer toute la palette de vos capacités vocales. Oreilles sensibles, s'abstenir.</p>
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">Le gars aux lunettes Vendredi 3 juillet</h2>
                        <img src="images/manattheguitar.jpg" class="carousel-img" />
                        <div class="card-content">
                            <p>Si ses lunettes vous ont déjà charmé((e)s), vous n'êtes pas prêts à entendre cet homme mystérieux en noir et blanc chanter et jouer de sa guitare avec un air grave de mec qui blague pas.</p>
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>
                </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">Main levée Samedi 4 juillet</h2>
                        <img src="images/manhandintheair.jpg" class="carousel-img"/>
                        <div class="card-content">
                            <p>Ce gars-là fait passer la vibe de son flow par ses doigts tendus vers le public. Venez profiter de cette expérience incroyable au Galet d'où vous ressortirez touché(e(s)).</p>
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </section>
    <span class="anchor" id="contact"></span>
    <section id="contact">
        <h2 class="banner-background banner-background-contact">CONTACTEZ-NOUS</h2>
        <?php require_once ('form.php')?>
    </section>
    <?php require_once("footer.php");?>
    <script src="script.js"></script>
</body>
</html>
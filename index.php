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
    <?php require_once 'connec.php';
     require_once 'Model/eventModel.php';
     $events = getAllEvents();
    ?>
    <section>
    <h2 class="banner-background banner-background-evenements"><a href="edit.php">EVENEMENT</a></h2>
        <?= isset($_GET['success'])? $_GET['success']:''?>
        <section class="carousel">
            <ul class="carousel-items">
                <?php foreach ($events as $eventData): ?>
                    <li class="carousel-item">
                        <div class="card">
                            <h2 class="card-title"><a href="edit.php?id=<?=$eventData['id']?>"><?= $eventData['title'] . ' '  . $eventData['event_date']?></a></h2>
                            <img src="images/<?= $eventData['image'] ?>" class="carousel-img" alt="<?= $eventData['alt'] ?>"/>
                            <div class="card-content">
                                <p><?= $eventData['description'] ?></p><br>
                                <a href="#" class="button">En savoir plus</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
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
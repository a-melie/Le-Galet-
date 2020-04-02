<?php
require_once 'connec.php';
require_once 'Model/eventModel.php';
require_once 'src/_head.php';
?>
<body>
<nav>
    <a href="index.php" class="logo"><img class="small-img" src="../images/logo-galet.png" alt="logo"></a>
    <a href="index.php#menu" class="menu-hidden"><div class="item-menu">Notre menu</div></a>
    <a href="index.php#evenements" class="menu-hidden"><div class="item-menu">Nos événements</div></a>
    <a href="index.php#contact" class="menu-hidden"><div class="item-menu">Contactez-nous</div></a>
    <a href="index.php#reseaux" class="menu-hidden"><div class="item-menu">Où sommes-nous ?</div></a>
    <div class="burger-title">Le Galet du Jardin Botanique</div>
    <div class="burger" id="burger" ><i class="fas fa-bars burger-icon"></i></div>
</nav>
<h2 class="banner-background-eventModif">Modification des évènements Du Galet</h2>
<?php require_once 'connec.php';
require_once 'Model/eventModel.php';
if (isset($_GET['id'])){
    $event = findById($_GET['id']);
}
?>
<form action="Controller/eventController.php" method="post">
    <div class="car-form">
        <label for="title">Titre</label>
        <?= isset($errors['title1']) ?  $errors['title1'] : '' ?>
        <input type="text" name="title" id="title" value="<?=isset($event['title'])? $event['title']: '' ?>">
    </div>
    <div class="car-form">
        <label for="event_date">Date</label>
        <?= isset($errors['date1']) ?  $errors['date1'] : '' ?>
        <input type="text" name="event_date" id="event_date" value="<?=isset($event['event_date'])? $event['event_date']: '' ?>">
    </div class="car-form">
    <div class="car-form">
        <label for="image">Image</label>
        <?= isset($errors['image1']) ?  $errors['image1'] : '' ?>
        <input type="text" name="image" id="image" value="<?=isset($event['image'])? $event['image']: '' ?>">
    </div>
    <div class="car-form">
        <label for="description">Description</label>
        <?= isset($errors['description1']) ?  $errors['description1'] : '' ?>
        <textarea name="description" id="description"><?=isset($event['description'])? $event['description']: '' ?></textarea>
    </div>
    <div class="car-form">
        <label for="alt">Description Alternative</label>
        <?= isset($errors['alt1']) ?  $errors['alt1'] : '' ?>
        <input type="text" name="alt" id="alt" value="<?=isset($event['alt'])? $event['alt']: '' ?>">
    </div>
    <input type="hidden" name="id" value="<?=isset($_GET['id'])? $_GET['id']:''?>">
    <div class="button-container">
        <button class="button buttonEdit" name="<?= isset($_GET['id']) ? 'update': 'create' ?>"><?= isset($_GET['id']) ? 'Mise à jour': 'Ajouter' ?></button>
        <?= isset($_GET['id'])?'<button class="button buttonEdit" name=\'delete\'>Supprimer</button>' : ''?>
    </div>
</form>
</body>
</html>

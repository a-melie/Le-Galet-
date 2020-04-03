<?php
if($_POST) {
    $errors = [];
    $event = [];
    if (empty($_POST['title'])) {
        $errors['title1'] = 'Veuillez remplir le titre !';
    } else {
        $event['name'] = $_POST['name'];
    }
    if (empty($_POST['event_date'])) {
        $errors['event_date1'] = 'Veuillez remplir la date !';
    } else {
        $event['event_date'] = $_POST['event_date'];
    }
    if (empty($_POST['image'])) {
        $errors['image1'] = 'Veuillez remplir l\'image !';
    } else {
        $event['image'] = $_POST['image'];
    }
    if (empty($_POST['description'])) {
        $errors['description1'] = 'Veuillez remplir votre description !';
    } else {
        $event['description'] = $_POST['description'];
    }
    if (empty($_POST['alt'])) {
        $errors['alt1'] = 'Veuillez choisir un description alternative !';
    } else {
        $event['alt'] = $_POST['alt'];
    }

}
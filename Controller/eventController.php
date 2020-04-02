<?php
require_once '../connec.php';
require_once '../Model/eventModel.php';


if (isset($_POST['update'])) {
    $title = cleanInput($_POST['title']);
    $event_date = cleanInput($_POST['event_date']);
    $image = cleanInput($_POST['image']);
    $description = cleanInput($_POST['description']);
    $alt = cleanInput($_POST['alt']);
    $id = $_POST['id'];
    updateEvent($title, $event_date, $image, $description, $alt, $id);
    header('Location: ../index.php?success=Evènement Mis à jour');
}
if (isset($_POST['create'])){
    $title= cleanInput($_POST['title']);
    $event_date =cleanInput($_POST['event_date']);
    $image = cleanInput($_POST['image']);
    $description = cleanInput($_POST['description']);
    $alt = cleanInput($_POST['alt']);
    createEvent($title, $event_date, $image, $description, $alt);
    header('Location: ../index.php?success=Evènement ajouté');
}
if (isset($_POST['delete'])){
    if (isset($_POST['delete'])) {
        deleteEvent($_POST['id']);
        header('Location: ../index.php?success=Evènement Supprimé');
    }
}



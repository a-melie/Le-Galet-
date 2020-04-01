<?php
require_once '../connec.php';
require_once '../Model/eventModel.php';

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $event_date = $_POST['event_date'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $alt = $_POST['alt'];
    $id = $_POST['id'];
    updateEvent($title, $event_date, $image, $description, $alt, $id);
    header('Location: ../index.php?success=Evènement Mis à jour');
}
if (isset($_POST['create'])){
    $title= $_POST['title'];
    $event_date = $_POST['event_date'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $alt = $_POST['alt'];
    createEvent($title, $event_date, $image, $description, $alt);
    header('Location: ../index.php?success=Evènement ajouté');
}
if (isset($_POST['delete'])){
    if (isset($_POST['delete'])) {
        deleteEvent($_POST['id']);
        header('Location: ../index.php?success=Evènement Supprimé');
    }
}
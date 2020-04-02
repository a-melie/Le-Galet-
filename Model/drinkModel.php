<?php
require_once 'eventModel.php';
function getAllDrinks():array
{
    $pdo = getPDO();
    $query = "SELECT * FROM drink";
    $statement = $pdo->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
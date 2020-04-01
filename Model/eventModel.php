<?php
function getPDO() : PDO
{
    $pdo = new PDO(DSN, USER, PASS );
    return $pdo;
}
function getAllEvents():array
{
    $pdo = getPDO();
    $query = "SELECT * FROM event";
    $statement = $pdo->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function createEvent(string $title, string $event_date, string $image, string $description, string $alt) : void
{
    $pdo = getPDO();
    $query = "INSERT INTO event (title, event_date, image, description, alt) VALUES (:title,:event_date,:image, :description, :alt)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $title, \PDO::PARAM_STR);
    $statement->bindValue(':event_date', $event_date, \PDO::PARAM_STR);
    $statement->bindValue(':image', $image, \PDO::PARAM_STR);
    $statement->bindValue(':description', $description, \PDO::PARAM_STR);
    $statement->bindValue(':alt', $alt, \PDO::PARAM_STR);
    $statement->execute();
}

function updateEvent(string $title, string $event_date, string $image, string $description, string $alt, int $id) : void
{
    $pdo = getPDO();
    $query= 'UPDATE event SET title= :title, event_date= :event_date, image = :image, description= :description, alt= :alt WHERE id= :id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $title,\PDO::PARAM_STR );
    $statement->bindValue(':event_date', $event_date,\PDO::PARAM_STR);
    $statement->bindValue(':image', $image,\PDO::PARAM_STR);
    $statement->bindValue(':description', $description, \PDO::PARAM_STR);
    $statement->bindValue(':alt', $alt, \PDO::PARAM_STR);
    $statement->bindValue(':id', $id,\PDO::PARAM_INT);
    $statement->execute();
}
function findById(int $id)
{
    $pdo = getPDO();
    $query = 'SELECT * FROM event WHERE id= :id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id,\PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}
function deleteEvent(int $id): void
{
    $pdo = getPDO();
    $query = 'DELETE FROM event WHERE id= :id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id',$id, PDO::PARAM_INT);
    $statement->execute();
}

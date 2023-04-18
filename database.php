<?php
include_once('config.php');

function getConnection() {
    global $dbHost, $dbName, $dbUser, $dbPassword;
    $connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    if($connection->connect_errno) {
        $connection->close();
        die('Database connection problem');
    }
    return $connection;
}

function getAllPosts() {
    $connection = getConnection();
    $sql = 'SELECT posts.id AS id posts.title AS title, categories.name AS categoryName FROM posts INNER JOIN categories ON posts.categoryId=categories.id';
    $result = $connection->querty($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    return $rows;
}

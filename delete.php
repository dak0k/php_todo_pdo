<?php

require('configDB.php');

$id = $_GET['id'];
/**
 * @param String $sql
 */
$sql = 'DELETE FROM `tasks` WHERE `id`= :id';

/**
 * @param PDOStatement $query
 */
$query = $pdo->prepare($sql);

$query->execute(['id'=>$id]);

header('Location: /');
?>
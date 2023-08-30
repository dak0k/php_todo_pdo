<?php

require('configDB.php');

$id = $_GET['id'];

$sql = 'DELETE FROM `tasks` WHERE `id`= :id';

$query = $pdo->prepare($sql);

$query->execute(['id'=>$id]);

header('Location: /');
?>
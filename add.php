<?php

$task = $_POST['task'];
$success = false;
if(empty($task))
{   
    echo '  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    ';
    echo '<div class="alert alert-danger" role="alert">'.'Введите само заданние'.'</div>';
    $success = false;
   exit();
}
if(isset($task))
{

    require('configDB.php');

    $sql = 'INSERT INTO tasks(task) VALUES(:task)';

    $query = $pdo->prepare($sql);

    $query->execute(['task'=> $task]);
    
    header('Location: /');
    $task = true;
}


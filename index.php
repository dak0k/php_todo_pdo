<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>
        To Do
    </h1>

    <form action="/add.php" method="post" class="mb-3">
    <div class="row">
        <div class="col-md-10">
            
        <input type="text" name="task" id="task" placeholder="Should do.." class="form-control">
        </div>
        <div class="col-md-2">
        <button type="submit" class="text-uppercase btn btn-success to-do-btn">Save</button>
        </div>
    </div>
  
    </form>
    <div class="row">
    <?php
        require('configDB.php');

        /**
         * @param PDOStatement $query
         */
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');

        while($row = $query->fetch(PDO::FETCH_OBJ))
        {
            echo'<div class="col-md-12">'.
                    '<div class="card mt-2 alert alert-primary" style="
                        display: flex;
                        padding: 15px;
                        flex-direction: row;
                        align-items: center;
                        justify-content: space-between;
                        flex-wrap: wrap;
                        align-content: center;
                    ">'.
                        $row->task.
                        '<a href="/delete.php?id='.$row->id.'"><button type="button" class="btn btn-danger">DELETE</button></a>'.
                    '</div>'.
                '</div>';
        }
      ?>
       
        
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
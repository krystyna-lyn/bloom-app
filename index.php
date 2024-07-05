<?php 
require 'db.php';

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bloom-app</title>
</head>

<body>

    <div class="main-section">
        <div class="add-section">
            <form action="app/add.php" method="POST" autocomplete="off">
                <input type="text" name="title" style="border-color: #ff6666" placeholder="This field is required" />
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
                <input type="text" name="title" placeholder="Write here your gratitude" />
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            </form>
        </div>
        <?php 
        $all = $conn -> query('SELECT * FROM all_items ORDER BY id DESC')
        ?>
        <div class="show-todo-section">
            <?php if($all->rowCount() <= 0){ ?>
            <div class="todo-item">
                <div class="empty">
                    <img src="img/f.png" width="100%" />
                    <img src="img/Ellipsis.gif" width="80px">
                </div>
            </div>
            <?php } ?>
            <?php while( $row = $all->fetch(PDO::FETCH_ASSOC) ){ ?>
            <div class="show-section">
                <?php if( $all -> rowCount() === 0){?>
                <div class="item">
                    <span id="" class="remove-to-do">x</span>
                    <input type="checkbox" class="check-box" checked />
                    <h2 class="checked">title 1</h2>

                    <input type="checkbox" class="check-box" />
                    <h2>title 2</h2>

                    <br>
                    <small>created: date</small>
                </div>
                <?php } } ?>

            </div>
        </div>

</body>

</html>
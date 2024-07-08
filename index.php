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

                <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <div class="error">Fehler beim Hinzufügen</div>

                <input type="text" name="title" style="border-color: #ff6666" placeholder="This field is required" />
                <button type="submit">Add &nbsp; <span>&#43;</span></button>

                <?php }else{ ?>

                <input type="text" name="title" placeholder="Write here your gratitude" />
                <button type="submit">Add &nbsp; <span>&#43;</span></button>

                <?php } ?>
            </form>
        </div>
        <?php 
        $all = $conn->query('SELECT * FROM all_items ORDER BY id DESC')
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
                <div class="item">
                    <span id="<?php echo $row['id'];?>" class="remove-item">x</span>

                    <?php if($row['checked']){ ?>

                    <input type="checkbox" class="check-box" data-todo-id="<?php echo $row['id']?>" checked>

                    <h2 class="checked"><?php  echo $row['title']; ?></h2>
                    <?php }else { ?>

                    <input type="checkbox" class="check-box" data-todo-id="<?php echo $row['id']?>" />
                    <h2><?php  echo $row['title']; ?></h2>
                    <?php } ?>
                    <br>
                    <small>created: <?php  echo $row['date_time']; ?></small>
                </div>
                <?php } ?>

            </div>
        </div>

</body>

</html>
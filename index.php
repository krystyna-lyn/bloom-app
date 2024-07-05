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
        <div class="show-grat-section">
            <div class="grat-item">
                <div class="empty">
                    <img src="img/f.png" width="100%" />
                    <img src="img/Ellipsis.gif" width="80px">
                </div>
            </div>

        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">

    <title>Admincp</title>
</head>
<body>
    <h3 class="title_admincp">admin</h3>
    <div class="wraper">
    <?php
            include("config/config.php");
            include("module/header.php");
            include("module/menu.php");
            include("module/main.php");
            include("module/footer.php");
        ?>
    </div>
</body>
</html>
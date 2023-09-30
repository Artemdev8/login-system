<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-end mx-auto py-3" style="max-width: 800px;">
        <?php 
            if(isset($_SESSION["user_id"])) {
        ?>
            <span class="me-3"><?=$_SESSION["user_uid"]?></span>
        <?php
            } else {
                header("location:../index.php");
            }
        ?>
        <a href="includes/logout.inc.php">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
session_start();
include 'db_connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
    <title>Document</title>
</head>
<body>
    <?php
        include('elements/sidebar.php');
    ?>
    <h1>Clients</h1>
</body>
</html>
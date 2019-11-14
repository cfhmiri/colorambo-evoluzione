<?php
    include "db_utils.php";
    $start_conn = new DB;
    $connection = $start_conn->DBconnection();
    $start_conn->getUsers($connection);
    $start_conn->getColors($connection);
    $start_conn->getRoles($connection);
    $start_conn->getFavorities($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
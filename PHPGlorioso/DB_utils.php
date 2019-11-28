<?php

    include "createDB.php";

    function getDBConnection() {

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 

    $conn = mysqli_connect($servername, $username, $password); 

    if (!$conn) {
        die ("Connessione non riuscita con $servername <br>");
    } else { 

    }
    return $conn;
}

function connectDB() {

    $dbName = "colorambo_glorioso";
    $conn = getDBConnection();

    mysqli_select_db($conn, $dbName);

    return $conn;
}
?>
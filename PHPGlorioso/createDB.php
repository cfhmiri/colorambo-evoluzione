<?php
    $servername = "localhost";
    $username = "colorambo_glorioso";
    $password = "";
    

//Creare la connessione
    $conn = mysqli_connect($servername, $username, $password);
//Controllare la connessione
    if (!$conn) {
        die ("Connessione al db $servername fallita" . mysqli_connect_error());
    }

//Creare DB
$sql = "CREATE DATABASE colorambo_glorioso"; 
if (mysqli_query($conn, $sql)) {
    echo "Database creato con successo";
} else {
    echo "Errore creazione DB" . mysqli_error($conn);
}

mysqli_close($conn);
?>
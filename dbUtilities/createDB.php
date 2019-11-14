<?php
    $servername = ""; //------nome del server
    $username = ""; //-----username
    $password = ""; //-----password


//Creare la connessione
    $conn = mysqli_connect($servername, $username, $password);
//Controllare la connessione
    if (!$conn) {
        die ("Connessione al db $servername fallita" . mysqli_connect_error());
    }

//Creare DB
$sql = "CREATE DATABASE nomeDB"; //----inserire nome del DB che si vuole creare
if (mysqli_query($conn, $sql)) {
    echo "Database creato con successo";
} else {
    echo "Errore creazione DB" . mysqli_error($conn);
}

mysqli_close($conn);
?>
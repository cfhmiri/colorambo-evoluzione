<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    

//Creare la connessione
    $conn = mysqli_connect($servername, $username, $password);
//Controllare la connessione
    if (!$conn) {
        die ("Connessione al db $servername fallita" . mysqli_connect_error());
    }
//Creare DB
$sql = "CREATE DATABASE colorambo_glorioso"; 
// if (mysqli_query($conn, $sql)) {
// } else {
//     echo "Errore creazione DB" . mysqli_error($conn);
// }

// mysqli_close($conn);

$db_selected = mysqli_select_db('colorambo_glorioso', $conn);
if (!$db_selected) {
    die ('Can\'t use colorambo_glorioso : ' . mysqli_error());
}

//Creazione Tabelle
$sql= "CREATE TABLE `colors` (
    `id_color` int(11) UNSIGNED NOT NULL,
    `name` varchar(255) NOT NULL,
    `code` varchar(7) DEFAULT NULL,
    `creator_id` int(10) UNSIGNED DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

    if ($conn->query($sql) === TRUE){
        echo "Tabella COLORI creata";
    }else {
        echo "errore " . $conn->error;
    }
   
mysqli_close($conn);
?>
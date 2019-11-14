<?php
    function getDBConnection() {

    $servername = "localhost"; //-----inserire il nome del server, in questo caso localhost
    $userame = ""; //-------inserire l'usernome dell'amministratore del DB
    $password = ""; //-------inserire la password del DB

    $conn = mysqli_connect($servername, $username, $password); 

    if (!$conn) {
        die ("Connessione non riuscita con $servername <br>");
    } else {

    }
    return $conn;
}

function connectDB() {

    $dbName = ""; //--------inserire il nome del DB
    $conn = getDBConnection();

    mysqli_select_db($conn, $dbName);

    return $conn;
}
?>
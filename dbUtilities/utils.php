<?php
function getDBConnection() {
 
    $servername = "localhost";
    $username = "colorambo_evoluzione";
    $password = "colorambo_evoluzione";
  
    $conn = mysqli_connect($servername, $username, $password);
  
    if (!$conn) {
      die("Connessione NON RIUSCITA con $servername <br>");
    } else {
      
    }
  
    return $conn;
  }
  
  function connectDB() {
   
    $dbName = "colorambo_evoluzione";
  
    $conn = getDBConnection();
  
    mysqli_select_db($conn, $dbName);
  
    return $conn;
  }
?>
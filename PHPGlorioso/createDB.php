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

$db_selected = mysqli_select_db($conn,'colorambo_glorioso' );
if (!$db_selected) {
    die ('Can\'t use colorambo_glorioso : ' . mysqli_error());
}

//Creazione Tabelle
$sql= "CREATE TABLE colors (
    id_color int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    code varchar(7) DEFAULT NULL,
    user_id int(10) NOT NULL,
    PRIMARY KEY (id_color),
    FOREIGN KEY (user_id) REFERENCES users(id_user)
  )";

$sql= "CREATE TABLE users (
    id_user int(11) NOT NULL AUTO_INCREMENT,
    f_name varchar(255) NOT NULL,
    l_name varchar(255) DEFAULT NULL,
    birth_date date(15) DEFAULT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    role_id varchar(20) NOT NULL,
    PRIMARY KEY (id_user),
    FOREIGN KEY (role_id) REFERENCES roles(id_role)
  )";


$sql= "CREATE TABLE roles (
    id_role int(11) NOT NULL AUTO_INCREMENT,
    role_name varchar(255) NOT NULL,
    PRIMARY KEY (id_role)
  )";

$sql="CREATE TABLE stats (
    id_stat int(11) NOT NULL AUTO_INCREMENT,
    num_colors int(90) NOT NULL,
    num_login int(255) DEFAULT NULL,
    num_pages int(15) DEFAULT NULL,
    user_id varchar(255) NOT NULL,
    color_id varchar(255) NOT NULL,
    role_id varchar(20) NOT NULL,
    PRIMARY KEY (id_stat),
    FOREIGN KEY (user_id) REFERENCES users(id_user),
    FOREIGN KEY (color_id) REFERENCES colors(id_color),
    FOREIGN KEY (role_id) REFERENCES roles(id_role)
  )";

$sql= "CREATE TABLE favorites (
    id_fav int(11) NOT NULL AUTO_INCREMENT,
    date date(255) NOT NULL,
    color_id varchar(7) DEFAULT NULL,
    user_id int(10) DEFAULT NULL,
    PRIMARY KEY (id_fav),
    FOREIGN KEY (user_id) REFERENCES users(id_user),
    FOREIGN KEY (color_id) REFERENCES colors(id_color)
  )";


    if ($conn->query($sql) === TRUE){
        echo "Tabella COLORI creata";
    }else {
        echo "errore " . $conn->error;
    }
   
mysqli_close($conn);
?>
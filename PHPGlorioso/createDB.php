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
/*$sql= "CREATE TABLE `colors` (
    `id_color` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `code` varchar(7) DEFAULT NULL,
    `user_id` int(11) 
  )";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
    echo "Tabella creata";
}else {
    echo "errore " . $conn->error;
}


$sql= "CREATE TABLE `users` (
    `id_user` int(11) NOT NULL,
    `f_name` varchar(255) NOT NULL,
    `l_name` varchar(255) DEFAULT NULL,
    `birth_date` datetime DEFAULT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `role_id` varchar(255)
  )";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
    echo "Tabella creata";
} else {
    echo "errore " . $conn->error;
}

$sql= "CREATE TABLE `roles` (
    `id_role` varchar(255),
    `role_name` varchar(255) NOT NULL
  )";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
    echo "Tabella creata";
}else {
    echo "errore " . $conn->error;
}

$sql="CREATE TABLE `stats` (
    `id_stat` int(11) NOT NULL,
    `num_colors` int(90) NOT NULL,
    `num_login` int(255) DEFAULT NULL,
    `num_pages` int(15) DEFAULT NULL,
    `user_id` int(11),
    `color_id`int(11),
    `role_id` varchar(255)
      )";
echo $sql ."<br><br>";
    if ($conn->query($sql) === TRUE){
        echo "Tabella creata";
    } else {
        echo "errore " . $conn->error;
    }

 $sql= "CREATE TABLE `favorites` (
     `id_fav` int(11) NOT NULL,
     `date` datetime NOT NULL,
     `color_id` int(11),
     `user_id` int(11) 
     )";
echo $sql ."<br><br>";

    if ($conn->query($sql) === TRUE){
        echo "Tabella" .  $sql . "creata";
    }else {
        echo "errore " . $conn->error;
    }
*/
//Creazione primary e foreign
/*$sql= "ALTER TABLE `colors` 
       ADD PRIMARY KEY (`id_color`)";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "primary creata";
}else {
  echo "errore " . $conn->error;
}

$sql= "ALTER TABLE `users` 
       ADD PRIMARY KEY (`id_user`)";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "primary creata";
}else {
  echo "errore " . $conn->error;
}

$sql= "ALTER TABLE `stats` 
       ADD PRIMARY KEY (`id_stat`)";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "primary creata";
}else {
  echo "errore " . $conn->error;
}
 
$sql= "ALTER TABLE `favorites` 
       ADD PRIMARY KEY (`id_fav`)";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "primary creata";
}else {
  echo "errore " . $conn->error;
}

$sql= "ALTER TABLE `roles` 
       ADD PRIMARY KEY (`id_role`)";
echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "primary creata";
}else {
  echo "errore " . $conn->error;
}
*/
/*$sql="ALTER TABLE colors
      ADD FOREIGN KEY (user_id) REFERENCES users(id_user)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}*/

/*$sql="ALTER TABLE favorites
      ADD FOREIGN KEY (color_id) REFERENCES colors(id_color)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}*/

/*$sql="ALTER TABLE favorites
      ADD FOREIGN KEY (user_id) REFERENCES users(id_user)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}

$sql="ALTER TABLE stats
      ADD FOREIGN KEY (user_id) REFERENCES users(id_user)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}*/

/*$sql="ALTER TABLE stats
      ADD FOREIGN KEY (color_id) REFERENCES colors(id_color)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}

$sql="ALTER TABLE stats
      ADD FOREIGN KEY (role_id) REFERENCES roles(id_role)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}

$sql="ALTER TABLE users
      ADD FOREIGN KEY (role_id) REFERENCES roles(id_role)";

echo $sql ."<br><br>";
if ($conn->query($sql) === TRUE){
  echo "foreign creata";
}else {
  echo "errore " . $conn->error;
}*/



mysqli_close($conn);
?>
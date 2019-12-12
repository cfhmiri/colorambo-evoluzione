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
    

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birth = $_POST['birth'];
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    //$creator = $_POST['creator'];
    // $basic = $_POST['basic'];

     $toinsert = "INSERT INTO users
                     (f_name, l_name, birth_date, username, password)
                     VALUES
                     ('$name',
                     '$surname',
                     '$birth',
                     '$username',
                     '$passwd'
                     )";
                     
    echo $toinsert;

    $result = mysqli_query($conn, $toinsert); 
    if($result){
        echo("<br>Inserimento avvenuto correttamente");
    } else{
        echo("<br>Inserimento non eseguito");
    }

    mysqli_close($conn);
?>

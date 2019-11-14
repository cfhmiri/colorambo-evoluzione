<?php
    require "dbUtilis.php";

    function GetAll() //-----dipenderà dalle tabelle presenti nel db
        $conn = connectDB();

        $sqlAll = "  
            SELECT * FROM
        "  //-------- inserire il nome della tabella dalla quale si vogliono estrapolare i dati

        $resultSet = mysqli_query($conn, $sqlAll);

        $ListFromDB = []; //-------inserire il nome all'inizio dell'array in base alla tab. usata

        if ($resultSet) {
            $ListFromDB = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
        }

        return $ListFromDB;

//----utilizzabile per richieste di estrapolare tutti i dati da una tab ma possibile anche per query più complex.
?>

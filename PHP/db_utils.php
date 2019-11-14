<?php
    class DB{
        function DBconnection(){
            $conn = mysqli_connect("localhost", "colorambo_evoluzione", "password", "colorambo_evoluzione");
            if(!$conn){
                echo "errore";
            } else {
                echo "andata";
            }
            return $conn;
        }
    

        function getUsers($conn){
           $queryUsers = "SELECT * FROM users";
           $queryFetch = $conn->query($queryUsers);
           $result = $queryFetch->fetch_all();
           echo "<br>";
           
           
        }
        function getColors($conn){
            $queryUsers = "SELECT * FROM colors";
            $queryFetch = $conn->query($queryUsers);
            $result = $queryFetch->fetch_assoc();
            echo "<br>";
           
            
         }
        function getRoles($conn){
            $queryUsers = "SELECT * FROM roles";
            $queryFetch = $conn->query($queryUsers);
            $result = $queryFetch->fetch_assoc();
            echo "<br>";
            
        }
        function getFavorities($conn){
            $queryUsers = "SELECT * FROM favorities";
            $queryFetch = $conn->query($queryUsers);
            $result = $queryFetch->fetch_assoc();
           
            
        }
    }
?>

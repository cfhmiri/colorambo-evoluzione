<?php
require "dbUtils.php";

function getAllUsers(){
    $conn = connectDB();

    $sqlAllUsers = "
    SELECT * FROM USERS
    ";

    $resultSet = mysqli_query($conn, $sqlAllUsers);

    $usersListFromDB = [];

    if ($resultSet) {
      $UsersListFromDB = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
    }
  
    return $UsersListFromDB;
  }
  

function getAllColors(){
    $conn = connectDB();

    $sqlAllColors = "
    SELECT * FROM COLORS
    ";

    $resultSet = mysqli_query($conn, $sqlAllColors);

    $usersListFromDB = [];

    if ($resultSet) {
      $ColorsListFromDB = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
    }
  
    return $ColorsListFromDB;
  }


function getAllRoles(){
    $conn = connectDB();

    $sqlAllRoles = "
    SELECT * FROM ROLES
    ";

    $resultSet = mysqli_query($conn, $sqlAllRoles);

    $rolesListFromDB = [];

    if ($resultSet) {
      $rolesListFromDB = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
    }
  
    return $rolesListFromDB;
  }
  



  ?>
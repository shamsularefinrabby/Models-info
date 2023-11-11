<?php


function connect_to_db(){
    $hostname="localhost";
    $username="root";
    $password="";
    $db_name="modelers";

    return $db_connect= mysqli_connect($hostname,$username,$password,$db_name);

}

?>
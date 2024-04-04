<?php
function make_connection()
{
    $host="localhost";
    $username="root";
    $password="";
    $dbname="todoapp";
    $con= new mysqli($host,$username,$password,$dbname);
    if($con->connect_error)
    {
        echo "there is an error to connect database".$con->connect_errno;

    }
    echo "successfully connected.";

}
make_connection()
?>
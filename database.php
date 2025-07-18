<?php
//database varibale initialization
$Servername = "localhost";
$Username = "root";
$password = "";
$Database = "nananom";

//connecting to the database
$conn = new mysqli($Servername, $Username, $password, $Database);

//checking for a successful connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
    echo"Connected successfully";
    $conn->Close();
    //close the connection  

}









?>
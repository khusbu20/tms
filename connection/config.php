<?php 
$server= "localhost";
$username= "root";
$password= "";
$dbname="college";

$con =new mysqli($server, $username, $password, $dbname);

if($con){
    echo "Database is connected";
}
else{
    echo "Database is not connected";
}

?>

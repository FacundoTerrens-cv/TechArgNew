<!-- this file is the connection between the database and the page  -->
<?php 
$server="localhost";
$user="root";
$pass="";
$database="casas";
$conn = mysqli_connect($server,$user,$pass,$database);
if(!$conn){
    die("Fail Conection");
}
?>

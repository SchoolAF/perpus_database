<?php

$sql = "CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
)";

$host='localhost';
$username='root';
$password='';
$dbase='php_perpus';

$conn = mysqli_connect($host,$username,$password,$dbase);

if($conn){
    echo "Successfully connected to php_perpus";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>

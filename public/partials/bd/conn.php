<?php 
/*
$conn = mysqli_connect("localhost","root","","billetera");

mysqli_set_charset($conn,"utf8mb4");
*/
// check connection
/*
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_errno();
	exit();
}
*/

$user = "root";
$pass = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=billetera;port=3308', $user, $pass);
    //echo "Connected!!";
    //$conn = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
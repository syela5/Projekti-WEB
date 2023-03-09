
<?php
//Lidhja permes PDO
$servername = "localhost";
$username = "root";
$password = "";
$database = "travel_db";

//kontrollimi dhe krijimi i koneksionit me MySQL

try {

    $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Lidhja me database nuk u realizua me sukses.." . $e->getMessage();
}
?>
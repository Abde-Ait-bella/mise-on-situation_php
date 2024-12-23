<?php

$db_host = "localhost";
$db_user = "root";
$db_name = "mise_on_situation";
$db_pass = "";

$conn = mysqli_connect( $db_host, $db_user, $db_pass, $db_name);


// $conn = mysqli_connect(DB_HOST, username: DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("la connexion ne pas la: " . mysqli_connect_error());
}else {
    echo "conn is good";
}

?>
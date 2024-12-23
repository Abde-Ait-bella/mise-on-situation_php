<?php

include "./database.php";

$name = $_POST['name'];
$role = $_POST['role'];
echo $name;

if (!$name || !$role) {
    echo "no valide";
}else{
    $sql = "INSERT INTO users (user_name, role_id) VALUES ($name, $role)";
    $result = $conn->query($sql);
    echo $result;}

?>
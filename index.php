<?php

include "./DAO/database.php";
include "./DAO/getData.php";

 while ($row = $dataAdmine->fetch_assoc()) {
    echo $row['role_name'] ;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="./DAO/sendData.php" method="POST">
            <input type="text" name="name" placeholder="Nom">

            <select name="role" id="">
                <!-- <?php while ($row = $dataAdmine->fetch_assoc()) { ?>
                    <option value="" ><?php $row['role_name'] ?></option>
                <?php } ?> -->
                <option value="1" >admine</option>
                <option value="2" >utili</option>

            </select>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>

</html>
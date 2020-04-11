<?php
require __DIR__. '/__connect_dp.php';



if(isset($_POST['name']) and isset($_POST['number'])) {

    $sql = "INSERT INTO `adress_book`(
`name`,`address`, `mail`, `birthday`, `number`,  `created_at`
) VALUES (?, ?, ?, ?, ?, NOW())";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['name'],
        $_POST['address'],
        $_POST['mail'],
        $_POST['birthday'],
        $_POST['number'],
    ]);

    if($stmt->rowCount()==1){
        $success = true;
    } else{
        $success = false;
    }


}
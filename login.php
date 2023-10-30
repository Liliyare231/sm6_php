<?php
include("../incl/connect.php");
    session_start();

    $sql = 'SELECT COUNT(*) AS count FROM `users_php`
            WHERE `email` = ? AND `password` = ?';

    $password = hash("sha256", $_POST['password']);
    $resultation= $connect->prepare($sql);
    $resultation->execute([$_POST['email'], $password]);
    $result = $resultation->fetch(PDO::FETCH_ASSOC)['count'];

    if ((int) $result === 1) {
    $_SESSION['isLogged'] = true;
    } else {
    $_SESSION['isLogged'] = false;
    $_SESSION['message'] = true;
    }

    header('Location: ../index.php');

?>
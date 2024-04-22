<?php
    
    $points = $_POST['mathid'];
    $theme = $_POST['matname'];
    session_start();
    $login = $_SESSION['login'];

    $con = new mysqli('localhost','root','','pquizydb');
    $sql = "INSERT INTO points(point,login,theme) VALUES('$points','$login','$theme')";
    $result = $con->query($sql);
    header("Location: indexLog.html");

?>
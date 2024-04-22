<?php

    $login = $_POST['fname'];
    $password = $_POST['lname'];

    $con = new mysqli('localhost','root','','pquizydb');
    $insert = "INSERT INTO user(login,password) VALUES ('$login','$password')";

    $con->query($insert);

    $con->close();

    header("Location: index.html");
?>
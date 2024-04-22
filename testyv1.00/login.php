<?php

    $login = $_POST['fname'];
    $password = $_POST['lname'];

    $con = new mysqli('localhost','root','','pquizydb');
    $sql = "SELECT COUNT(login) liczba FROM user WHERE login='$login' and password='$password';";

    $result = $con->query($sql);

    $row = $result->fetch_assoc();

    if ($row["liczba"]>0) {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        echo "Udane logowanie";
        header("Location: indexLog.html");
      } else {
        echo "Błąd logowania";
        session_start();
        $_SESSION['bladlogowania'] = "Niepoprawny login lub hasło";
        header("Location: login.html");
      }
    $con->close();
?>
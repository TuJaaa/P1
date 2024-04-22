<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTY</title>
    <link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>

    <nav class="menu">
        <a href="indexLog.html">WRÓĆ</a>
        <div>
        <a href="login.html">WYLOGUJ SIĘ</a>
        </div>
    </nav>

    <div id="left"></div>
    <div id="content">
    </br></br></br>
        W tym miejscu możesz zobaczyć wyniki swoich testów. <br>
        Jeśli już jakiś zrobiłeś powinien on się wyświetlić podspodem.

        <?php
        session_start();
        $login = $_SESSION['login'];
        
        $con = new mysqli('localhost','root','','pquizydb');
        $sql = "SELECT point, theme FROM points WHERE points.login = '$login';";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br>"."Test: " . $row["theme"]. " - Punkty: " . $row["point"];
            }
        } else {
            echo "Brak wyników.";
        }

        ?>

    </div>
    <div id="ad"></div>

</body>
</html>
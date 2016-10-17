<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setting up phpStorm</title>
</head>
<body>
    <div>
        <?php
        $forename = $_POST["forename"];
        $surname  = $_POST["surname"];
        $gender   = $_POST["gender"];
        $power    = $_POST["power"];

        echo "<h2>Welcome to S.H.I.E.L.D.</h2>";
        echo "<br>";
        echo "You, ".$forename." ".$surname." have been accepted";
        echo "<br>As you are ".$gender." you will be assigned to a matching team soon";
        echo "<br>We can't wait to see you ".$power."<br>Congratulations once again!<br>";
        ?>
    </div>
</body>
</html>

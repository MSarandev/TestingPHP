<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab1 Page</title>
</head>
<body>
    <div style="text-align: center;">
        <a href="index.html">
            <img src="http://www.iconarchive.com/download/i85581/graphicloads/100-flat/home.ico"
                 width="70"
                 height="70"/>
        </a>
    </div>
    <h1 style='text-align: center;'>Hello World - PHP</h1>
    <br>
    <h1 style='text-align: center; text-decoration: underline;'>Exercises Below</h1>
    <br>
    <!-- EXERSICE 1 -->
    <div style="text-align: center; border: 1px solid black; border-radius: 50px; margin-bottom: 20px;">
    <form method="post" action="">
        <h3>Enter you age below</h3>
        <input type="text" name="value">
        <input type="submit">
    </form>
    </div>
    <br>
    <!-- EXERSICE 2 -->
    <div style="text-align: center; border: 1px solid black; border-radius: 50px; margin-bottom: 20px;">
        <form method="post" action="">
            <h3>Enter the number of hobbits</h3>
            <input type="text" name="hobbitsVal">
            <input type="submit">
        </form>
    </div>
    <?php
    // Exercise 1

    $myage = $_POST['value'];

    if($myage != null) {

        if (intval($myage) >= 21) {
            echo "You are allowed to buy <strong>SAUSAGE ROLLS</strong>";
        } else if (intval($myage) >= 18) {
            echo "You are allowed to buy <strong>MUGS</strong>";
        } else if (intval($myage) >= 16) {
            echo "You are allowed to buy <strong>SPECS</strong>";
        } else {
            echo "You are not allowed to buy anything";
        }

    }

    // Exercise 2

    $numberOfHobbits = $_POST['hobbitsVal'];

    if($numberOfHobbits != null) {
        switch ($numberOfHobbits) {
            case 1:
                echo "<strong>$numberOfHobbits</strong> Sad Hobbit";
                break;
            case 2:
                echo "<strong>$numberOfHobbits</strong> Happy Hobbit";
                break;
            case 3:
                echo "<strong>$numberOfHobbits</strong> Hobbits are a crowd";
                break;
            default:
                echo "All Hobbits have gone home!";
        }
    }
    ?>
</body>
</html>
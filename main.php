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
    <div style="text-align: center; border: 1px solid black; border-radius: 10px; margin-bottom: 20px;">
    <form method="post" action="" style="margin-bottom: 20px;">
        <h3>Enter you age below</h3>
        <input type="text" name="value">
        <input type="submit">
    </form>
        <br>
        <?php
        // Exercise 1

        $myage = $_POST['value'];

        if($myage != null) {

            if (intval($myage) >= 21) {
                echo "You are allowed to buy <strong>SAUSAGE ROLLS</strong>";
                echo "<br>";
            } else if (intval($myage) >= 18) {
                echo "You are allowed to buy <strong>MUGS</strong>";
                echo "<br>";
            } else if (intval($myage) >= 16) {
                echo "You are allowed to buy <strong>SPECS</strong>";
                echo "<br>";
            } else {
                echo "You are not allowed to buy anything";
                echo "<br>";
            }

        }
        ?>
    </div>
    <br>
    <!-- EXERSICE 2 -->
    <div style="text-align: center; border: 1px solid black; border-radius: 10px; margin-bottom: 20px;">
        <form method="post" action="" style="margin-bottom: 20px;">
            <h3>Enter the number of hobbits</h3>
            <input type="text" name="hobbitsVal">
            <input type="submit">
        </form>
        <br>
        <?php
        // Exercise 2

        $numberOfHobbits = $_POST['hobbitsVal'];

        if($numberOfHobbits != null) {
            switch ($numberOfHobbits) {
                case 1:
                    echo "<strong>$numberOfHobbits</strong> Sad Hobbit";
                    echo "<br>";
                    break;
                case 2:
                    echo "<strong>$numberOfHobbits</strong> Happy Hobbit";
                    echo "<br>";
                    break;
                case 3:
                    echo "<strong>$numberOfHobbits</strong> Hobbits are a crowd";
                    echo "<br>";
                    break;
                default:
                    echo "All Hobbits have gone home!";
                    echo "<br>";
            }
        }
        ?>
    </div>

    <!-- EXERSICE 3 -->
    <div style="text-align: center; border: 1px solid black; border-radius: 10px; margin-bottom: 20px;">
        <form method="post" action="" style="margin-bottom: 20px;">
            <h3>Reverse check</h3>
            <input type="text" name="reverseVal">
            <input type="submit">
        </form>
        <br>
        <?php
        // Exercise 3

        $reverseNum = $_POST['reverseVal'];

        if($reverseNum != null) {
            switch (strtolower($reverseNum)) {
                case "specs":
                    echo "You must be at least <strong>16</strong>";
                    echo "<br>";
                    break;
                case "mugs":
                    echo "You must be at least <strong>18</strong>";
                    echo "</br>";
                    break;
                case "sausage rolls":
                    echo "You must be at least <strong>21</strong>";
                    echo "<br>";
                    break;
                default:
                    echo "Whoops, your age is not in the database";
                    echo "<br>";
            }
        }
        ?>
    </div>

    <!-- EXERCISE 4 -->
    <div style="text-align: center; border: 1px solid black; border-radius: 10px; margin-bottom: 20px;">
        <?php
            // Exercise 4

            $provisionedActivity = array("Specs", "Drugs", "Rock&Roll");

            foreach ($provisionedActivity as $x){
                echo "<p>$x</p>";
            }
        ?>
    </div>
</body>
</html>
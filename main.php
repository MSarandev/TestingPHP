<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab1 Page</title>
    <h1 style='text-align: center;'>Hello World - PHP</h1>
    <br>
    <h1 style='text-align: center; text-decoration: underline;'>Exercises Below</h1>
    <br>
    <!-- EXERSICE 1 -->
    <form method="post" action="">
        <h3>Enter you age below</h3>
        <input type="text" name="value">
        <input type="submit">
    </form>
    <br>
</head>
<body>
    <?php
    // Exercise 1

    $myage = $_POST['value'];

    if(intval($myage) >= 21){
        echo "You are allowed to buy <strong>SAUSAGE ROLLS</strong>";
    }else if (intval($myage) >= 18){
        echo "You are allowed to buy <strong>MUGS</strong>";
    }else if(intval($myage) >= 16){
        echo "You are allowed to buy <strong>SPECS</strong>";
    }
    ?>
</body>
</html>
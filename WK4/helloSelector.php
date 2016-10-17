<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group Work Dev page</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #floatable{
            width: 100%;
            align: center;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div id="main_cont">
    <h2>Where would you like to say hello?</h2>
    <br>
    <div class="floatable">
        <p><a href="helloPrinter.php?planet=Earth"/>Earth</p>
        <p><a href="helloPrinter.php?planet=Mars"/>Mars</p>
        <p><a href="helloPrinter.php?planet=Uranus"/>Uranus</p>
    </div>
</div>
</body>
</html>
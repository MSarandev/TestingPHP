<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D.</title>
    <style>
        html, body{
            width: 100%;
        }
        #main_cont{
            width: 250px;
            height: 600px;
            align-content: center;
        }
    </style>
</head>
<body>
    <div id="main_cont">
        <form action="shieldDispl.php" method="post">
            <label>Welcome to <br>S.H.I.E.L.D.<br>recruitment</label>
            <label>Forename</label>
            <br>
            <input type="text" width="100" name="forename">
            <br>
            <label>Surname</label>
            <br>
            <input type="text" width="100" name="surname">
            <br>
            <input type="text" width="100" name="gender">
            <br>
            <input type="text" width="100" name="power">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
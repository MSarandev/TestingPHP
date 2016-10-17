<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.H.I.E.L.D.</title>
    <style>
        html, body{
            width: 100%;
            background-image: url("http://cdn.wallpapersafari.com/37/83/3KLSXd.jpg");
            background-position: top;
        }
        #main_cont{
            background:rgba(255,255,255,0.7);
            border: solid #c7c9cc 1px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 500px;
            height: 100%;
            text-align: center;
            float: left;
            margin-left: 25%;
            padding-bottom: 20px;
        }
        img{
            width: 200px;
            height: 200px;
        }
        .btn {
            background: #3498db;
            background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
            background-image: -moz-linear-gradient(top, #3498db, #2980b9);
            background-image: -ms-linear-gradient(top, #3498db, #2980b9);
            background-image: -o-linear-gradient(top, #3498db, #2980b9);
            background-image: linear-gradient(to bottom, #3498db, #2980b9);
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
        }

        .btn:hover {
            background: #3cb0fd;
            background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
            background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="main_cont">
        <form action="shieldDispl.php" method="post">
            <img src="http://shieldtv.net/wp-content/uploads/2013/06/S.H.I.E.L.D.-logo-6.jpg"/>
            <br>
            <label>Welcome to <strong>S.H.I.E.L.D.</strong> recruitment<br><hr></label>
            <label>Forename</label>
            <br>
            <input type="text" width="100" name="forename">
            <br><hr>
            <label>Surname</label>
            <br>
            <input type="text" width="100" name="surname">
            <br><hr>
            <label>Gender</label>
            <br>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="alien">Alien</option>
            </select>
            <br><hr>
            <label>Superpower</label>
            <br>
            <input type="text" width="100" name="power">
            <br><hr>
            <input type="submit" value="Submit" class="btn">
        </form>
    </div>
</body>
</html>
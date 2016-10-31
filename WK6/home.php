<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>The Blog of Charles Babbage</title>
    </head>
    <body>
        <header>
            <h1>The Blog of Charles Babbage</h1>
            <nav>
                <ul>
                    <li><a href="./">Home Page</a></li>
                    <li><a href="blog">My Blog</a></li>
                    <li><a href="about">About Me</a></li>
                    <li><a href="contactus">Contact Me</a></li>
                    <?php
                        ini_set('display_errors', 1);
                        ini_set('display_startup_errors', 1);
                        error_reporting(E_ALL);

                        if (isset($_SESSION['username'])) {
                            echo "<li><a href='create_article'>Create Article</a></li>";
                            echo "<li><a href='logout'>Logout</a></li>";
                        } else {
                            echo "<li><a href='login'>Login</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </header>
        <?php
        echo "
        <main>
        <p>Welcome to the blog of Charles Babbage! In this blog you will
        see all of my insights and wonderful things</p>
        </main>
        ";
        ?>
        <footer>
            <p>(c)2016 - Babbage Computing Systems</p>
        </footer>
    </body>
</html>

<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('INCLUDE_DIR', '/WK6/scripts');
$rules = array(
    //
    //main pages
    //
    'about' => "/about",
    'contactus' => "/contactus",
    'blog' => "/blog",
    //'blog_article' => "/blog/(?'blogID'[\w\-]+)",
    //
    //Admin Pages
    //
    'login' => "/login",
    'create_article' => "/createarticle",
    'logout' => "/logout",
    //
    // Home Page
    //
    'home' => "/home"
);
$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri,
        ''
        , $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);
foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}
// nothing is found so handle the 404 error
//include(INCLUDE_DIR . '/404.php');
?>

<?
session_start();
?>

<?php
include("scripts/header.php");
echo "
<main>
<p>Welcome to the blog of Charles Babbage! In this blog you will
see all of my insights and wonderful things</p>
</main>
";
include("scripts/footer.php");
?>

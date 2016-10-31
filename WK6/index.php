<?
define('INCLUDE_DIR', dirname(__FILE__) . '/scripts/');
$rules = array(
    //
    //main pages
    //
    'about' => "/about.php",
    'contactus' => "/contactus.php",
    'blog' => "/blog.php",
    //'blog_article' => "/blog/(?'blogID'[\w\-]+)",
    //
    //Admin Pages
    //
    'login' => "/login.php",
    'create_article' => "/create_article.php",
    'logout' => "/logout.php",
    //
    // Home Page
    //
    'home' => "/home.php"
);
$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri,
        ''
        , $_SERVER['REQUEST_URI']), '/');
// nothing is found so handle the 404 error
//include(INCLUDE_DIR . '/404.php');
?>
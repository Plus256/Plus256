<?php
ob_start();
session_start();
/*local credentials*/
$host="127.0.0.1";
$db="plus256";
$user="root";
$pwd="root";
$port=3306;
//$conn=mysqli_connect($host, $user, $pwd, $db, $port) or die(mysqli_error());
/*end of local*/

/*remote credentials*
$host="127.0.0.1";
$db="";
$user="";
$pwd="";
$port=3306;
$conn=mysqli_connect($host, $user, $pwd, $db, $port) or die(mysqli_error());
/*end of remote*/
$short_name="Plus256";
$full_name="Plus256 Network";
$tagline="Creating Cool Stuff";
$description="We're a Team of awesome guys devoted to Creating Cool Stuff";
$meta_keywords="Plus256, Uganda, Creative";
$logo="gra/logo.png";
$noscript="Enable JavaScript in your browser to have the best experience at ".$short_name;
?>

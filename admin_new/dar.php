<?php
require 'connect.inc.php';
require 'filename.inc.php';

if (loggedin()) {
$firstname = getuserfield('firstname');
$lastname = getuserfield('lastname');
if(($firstname='darshan' && $password='password') || ($firstname='nirav' && $password='password')) {
header('Location: menu.php');
} else {
$redirect = 'upload.php';
header('Location:'.$redirect);
echo 'you re logged in '.$firstname.' '.$lastname.'<a href="logout.php">log out</a>'; 
}
}  else {
   include 'login.inc.php';
}

?>


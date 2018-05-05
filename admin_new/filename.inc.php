<?php
ob_start();
session_start();
$filename = $_SERVER['SCRIPT_NAME'];
if(isset($_POST['referer'])) {
  $http_referer = trim($_POST['referer']);
} elseif (isset($_SERVER['HTTP_REFERER'])) {
  $http_referer = base64_encode($_SERVER['HTTP_REFERER']);
} else {
  $http_referer = "";
}

function loggedin()
{
 if(isset($_SESSION['user_id']))
 {
   return true;
 }
 else {return false;}
}

function getuserfield($field) {
  $user_id = $_SESSION['user_id'];
  $query = "select $field from userlogging where id='$user_id'";
  $query_run = mysql_query($query);
  if ($query_result = mysql_result($query_run,0,$field)) {
   return $query_result;
  }
}



?>
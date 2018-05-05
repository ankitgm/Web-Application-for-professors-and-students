<?php
$username = 'root';
$password =' ';
$server ='localhost';
$mysql_db = 'adatabase';
$error = 'Coundn\'t Connect';
if(!@mysql_connect('localhost','root','') or !@mysql_select_db($mysql_db)) {
  die($error);
}
//echo '<p align="right">CONNECTED</p>';

?>
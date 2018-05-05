<?php
include "connect.inc.php";
if(isset($_GET['id'])) {
$id=$_GET['id'];
$query = "select filename from pdf where id=$id";
$row = mysql_query($query);
if(mysql_num_rows($row)==1){
  $query_row=mysql_fetch_assoc($row);
  $name=$query_row['filename'];
  $path="../upload/{$name}";

  header('Content-Type: application/octetstream');

  header('Content-Type: application/octet-stream');
  header('Content-Description: File Transfer');

     header("Content-Disposition: attachment; filename={$name}");


  header('Content-Length: '. filesize($path));
  readfile($path);
  



  //header('Content-Type: application/pdf');
  //readfile($path);
  //readfile($name);
}
}
?>
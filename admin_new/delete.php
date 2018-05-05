<?php
require 'connect.inc.php';
require 'filename.inc.php';
if(loggedin())
{
if(  isset($_GET['id'])) {

  $id = $_GET['id'];
  if(mysql_query("delete from pdf where id='$id'")) {
  echo 'DATA DELETED';
  }
}
?>
<html>
<head>
      <title>DELETE</title>

</head>
<body>
      <form action="delete.php" method="POST">

           
            
            <button type="button" onclick="window.location.href='menu.php'"> MAIN MENU</button><br>

      </form>
</body>

<?php
}
else
{
  include "login.inc.php";
}
?>
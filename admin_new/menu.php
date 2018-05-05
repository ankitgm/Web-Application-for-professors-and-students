<?php
include "connect.inc.php";
include "filename.inc.php";

if(loggedin())
{
?>
<button type = "button" onclick="window.location.href='upload.php'">UPLOAD</button><br><br><br>
      <button type = "button" onclick="window.location.href='../search_new.php'">DELETE</button><br><br><br>
      <!--<button type = "button" onclick="window.location.href='update.php'">UPDATE</button><br><br><br>-->
      <button type = "button" onclick="window.location.href='select.php'">SELECT</button><br><br><br>
 <button type = "button" onclick="window.location.href='logout.php'">LOGOUT</button><br><br><br>
<?php
}
else
{
	include "login.inc.php";
}
?>
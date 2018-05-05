
<?php

if(isset($_POST['username'])&& isset($_POST['password'])) {
$username = $_POST['username'];
echo $password = md5($_POST['password']);
if (!empty($_POST['username'])&&!empty($_POST['password'])) {
   $query = "select id from userlogging where username='".mysql_real_escape_string($username)."' and password='".mysql_real_escape_string($password)."'";

   if ($query_run = mysql_query($query)){
      echo $rows = mysql_num_rows($query_run);
      if($rows==0) {
      echo 'invalid username and password';
      } else if($rows==1){
            echo $user_id = mysql_result($query_run,0,'id');
            $_SESSION['user_id'] = $user_id;
            $redirect_page = 'dar.php';
            header('Location:'.$redirect_page);
        }
   }
} else {echo 'you must  enter username and pssword';}

}
//require 'Home.html';
?>
<form action="dar.php" method="POST" name="LOGIN">
<input type="text" id="oval1" name="username" align="right" placeholder="Username">
<input type="password" id="oval1" name="password" align="right" placeholder="Password">
<input type="submit" id="button1" value="LOGIN">
</form>







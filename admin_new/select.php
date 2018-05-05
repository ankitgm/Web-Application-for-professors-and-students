<?php
require  'connect.inc.php';

include "filename.inc.php";

if(loggedin())
{
?>
<b
?>


<table cellpadding="5" cellspacing="" align="center"  border="1" >

               <tr>
                <td><font style="bold">Sr.No</font></td>
                <td><font style="bold">Name</font></td>
               <td><font style="bold">Download</font></td>
                <td><font style="bold">View</font></td>
               </tr>
<?php



    $query = "SELECT id,topicname FROM pdf ORDER BY `id` ASC ";



      if ($query_run = mysql_query($query))
      {
       if (mysql_num_rows($query_run)==null)
       {
        echo 'no results found';
       } else {
         while ($query_row=mysql_fetch_assoc($query_run)) {
               
               $name = $query_row['topicname'];
               $id = $query_row['id'];
               //$genre = $query_row['genre'];

               ?>
               <tr>
               <td><?php echo $id; ?> </td>
               <td><?php echo $name; ?> </td>
               <td><a href="download.php?id=<?php echo $id; ?>">Download</a> </td>
               <td><a href="view.php?id=<?php echo $id; ?>">View</a> </td>
               </tr>

         <?php 
         }
       }?></table><?php
      } else { echo mysql_error(); }


?>
<html>
<head>
      <title>SELECT</title>

</head>
<body>


           <p align="center"> <button type="button" onclick="window.location.href='menu.php'"> MAIN MENU</button><br></p>


</body>
<?php
}
else
{
  include "login.inc.php";
}
?>
<?php
include "connect.inc.php";
include "filename.inc.php";
if(loggedin())
{
        if(isset($_POST['MAX_FILE_SIZE'])) {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $extensions = strtolower(substr($name,strpos($name,'.') + 1));
        $type = $_FILES['file']['type'];
        $topic = $_POST['topic_name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $max_size = 100000000;
          if(isset($name))
          {
            if(!empty($name))
            {
              if(($extensions=='pdf')&&$size<=$_POST['MAX_FILE_SIZE'])
              {
               $location = '../upload/';
               if(true)
               {

                  $imgData =addslashes (file_get_contents($_FILES['file']['tmp_name']));

                            $sql = "INSERT INTO pdf
                            (topicname,filename)
                            VALUES
                            ( '".$topic."','{$_FILES['file']['name']}');";
                            mysql_query($sql) or die("Error in Query: " . mysql_error());

                            move_uploaded_file($tmp_name,$location.$name);
                echo 'File for '.$topic.' has been Successfully uploaded';
               }
               else
               {
                echo 'error uploading';
               }
              } else { echo 'file must be pdf and size should be less than 100kb'; }
            }
          }
        }
}
else
{
  header('location:dar.php');
}
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="file"><br><br>
      <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
      <input type="text" name="topic_name" placeholder="Topic Name">
        <input type="submit" value="Submit">
       <button type = "button" onclick="window.location.href='menu.php'">MENU</button><br><br><br>
</form>
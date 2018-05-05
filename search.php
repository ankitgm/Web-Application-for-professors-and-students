<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/menu.css">
		<link rel="stylesheet" type="text/css" href="style/styledownload.css">

		<title>
			Sumeet !!!		
		</title>
	</head>
	
	<body>
		<div class="header">
		Hello World !!!
		</div>

		<center>
			<div id="container">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="download_list.php">Download</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>

			</div>
			<form action="search.php" method="GET">
				<input type="text" name="search" placeholder="Search"></input>
				<input type="submit" name="submit" value="Search"></input>

			</form>


		</center>
		<right>
			
		</right>

		<div id="download_list">
			<?php
require "connect.inc.php";
if(isset($_GET["submit"]) && isset($_GET["search"]))
{
	$button = $_GET["submit"];
	$search = $_GET["search"];
	if(strlen($search)<=2)
	{
		echo "Search field length is short";
	}
	else
	{
		echo $search;

?><table cellpadding="5" cellspacing="" align="center"  border="1" >
               <tr>
	               <th>Topic Name</th>
    		       <th>Download</th>
            	   <th>View</th>
               </tr>
		  		<?php

					require 'connect.inc.php';
				    $query = "SELECT id,topicname FROM pdf where topicname like '%".$search."%' ";
				    if ($query_run = mysql_query($query))
				    {
				    	if (mysql_num_rows($query_run)==null)
				        {
				        	echo 'no results found';
				        } 
				        else 
				        {
				        	while ($query_row=mysql_fetch_assoc($query_run)) 
				        	{
				               $name = $query_row['topicname'];
				               $id = $query_row['id'];
			   ?>
               <tr>
	               <td><?php echo $name; ?> </td>
	               <td><a href="download.php?id=<?php echo $id; ?>">Download</a> </td>
	               <td><a href="view.php?id=<?php echo $id; ?>">View</a> </td>
               </tr>

				<?php 
					    	}
					    }?></table><?php
					} else { echo mysql_error(); }

				   // }
				//  }
				?>




<?php
	}
	
}
else
{
echo "you didnt enter the search field";
}
?>

		</div>

	</body>
</html>














<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Account Page</title>
			
			<meta http-equiv="content-type"; content="text/html"; charset="utf-8"/>
		
			<link rel= "stylesheet" href="stylling.css" type = "text/css">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<nav>
					<ul>
					<li><a href="PBire2.html">Home</a></li>
					<li><a href="PBire3.html">Add Client</a></li>
					<li><a href="PBire4.html">Add Staff</a></li>
					<li><a href="PBire1.html">Logout</a></li>
					</ul>
				</nav>	
			</header>
			<section class="accPg">
			<?php
			$accNum=$_GET['accnum'];
			$cliCode=$_GET['Client_code'];	
			error_reporting(E_ALL^E_DEPRECATED);
			$con = mysql_connect("localhost","root"); //connecting to the database
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
			  }

			mysql_select_db("probankire", $con); //tells which database that you want to work with



			$result = mysql_query("SELECT trans, debit, credit, balance FROM account WHERE accnum= '".$accNum."'  and Client_code = '".$cliCode."'"); 
						/*, AND flightDate = '".$flightDate."'" ); */
						//getting information from flight details
			if($result === FALSE) { 
			die(mysql_error());				
			}
			echo "<table border='1'>  
			<tr> 
			<th>Transactions</th>
			<th>Debit</th>
			<th>Credit</th>
			<th>Balance</th>
			</tr>";

			while($row = mysql_fetch_array($result)) //this creates a loop 
			  {
			echo "<tr>";
			echo "<td>" . $row['trans'] . "</td>";
			echo "<td>" . $row['debit'] . "</td>";
			echo "<td>" . $row['credit'] . "</td>";
			echo "<td>" . $row['balance'] . "</td>";

			   
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con); //closing connection
			?> 	
			</section>
			<aside>
			</aside>
			
			
		</div>
	</body>
</html>	
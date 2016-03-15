<?php 

$con = mysql_connect('localhost','root') or die ("Couldn't connect to server.");  
$db = mysql_select_db('probankire', $con) or die ("Couldn't select database.");  

$search=$_POST['search']; 

$data = 'SELECT * FROM `client` WHERE `fname` = "'.$search.'"'; 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
mysql_close($con);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Client</title>
			
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
			<section class="CurCli">
				<fieldset>
				<legend>Client Details</legend>
				<form  name="form" method="POST">
					<label for="Client_code">Client Code<label>
						<input type="number" name="Client_code" value="<?php echo $data2['Client_code']?>"><br>
				
					<label for="title">Title</label>			
						<input type="text" name="title" value="<?php echo $data2['title']?>">
						<br>
					<label for="fname">First Name</label>
						<input type="text" name="fname" size="15" maxlength="30" value="<?php echo $data2['fname']?>"/><br>
						
					<label for="surname">Surname</label>
						<input type="text" name="surname" size="15" maxlength="30" value="<?php echo $data2['surname']?>"><br>
						
					<label for="add1">Address 1</label>	
						<input type="text" name="add1" size="30" maxlength="30" value="<?php echo $data2['add1']?>"><br>
						
					<label for="add2">Address 2</label>	
						<input type="text" name="add2" size="30" maxlength="30" value="<?php echo $data2['add2']?>"><br>
						
					<label for="city">City</label>	
						<input type="text" name="city" size="30" maxlength="30" value="<?php echo $data2['city']?>"><br>
						
					<label for="county">County</label>
						<input type="text" name="county" value="<?php echo $data2['county']?>"><br>
			</fieldset>	
			<fieldset>
				<legend>Client Details Other</legend>
					<label for="dob">Date of Birth</label>
						<input type="Date" name="dob" value="<?php echo $data2['dob']?>">
						<br>						
					<label for="nationality">Nationality</label>	
						<input type="text" name="nationality" value="<?php echo $data2['nationality']?>"><br>
					
					
					<label for="sex">Sex</label>	
						<input type="text" name="sex" value="<?php echo $data2['sex']?>"><br>
					
					<label for="ppsn">PPSN Num.</label>	
						<input type="text" name="ppsn" size="15" maxlength="30" value="<?php echo $data2['ppsn']?>">
						<br>
					
					<label for="marital">Marital Status</label>	
						<input type="text" name="marital" value="<?php echo $data2['marital']?>"><br>
				<form action="PBire7.php" method="get">	
					<label for="accnum">Account Number</label>	
						<input type="number" name="accnum" value="<?php echo $data2['accnum']?>">
						<br>
					<label for="AccPage">To Account Page</label>
						<input type="submit" value="Click">
				</form>		
			</fieldset>
			</section>			
			<aside>	
					
				<fieldset>
					<legend>Contact Info</legend>
						
						<label for="email">Email Address</label>
							<input type="Email" name="email" value="<?php echo $data2['email']?>">
							<br>
							
						<label for="homeph">Home Phone</label>	
							<input type="number" name="homeph" value="<?php echo $data2['homeph']?>">
							<br>
							
						<label for="mobileph">Mobile Phone</label>	
							<input type="number" name="mobileph" value="<?php echo $data2['mobileph']?>">
							<br>
							
						<label for="jbtitle">Job Status</label>	
							<input type="text" name="jbtitle" value="<?php echo $data2['jbtitle']?>">
							<br>
				</fieldset>

				</aside>				
			<footer>
			&copy: Copyright PBI 2015
			</footer>
		</div>
	</body>	
</html>	
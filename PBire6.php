<?php 

$con = mysql_connect('localhost','root') or die ("Couldn't connect to server.");  
$db = mysql_select_db('probankire', $con) or die ("Couldn't select database.");  

$search=$_POST['srch']; 

$data = 'SELECT * FROM `staff` WHERE `fname` = "'.$search.'"'; 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
mysql_close($con);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Add Staff</title>
			
			<meta http-equiv="content-type"; content="text/html"; charset="utf-8"/>
		
			<link rel= "stylesheet" href="stylling.css" type = "text/css">
			<script type="text/javascript">
			<!-- 
			function newPage(num) {
			var url=new Array();
			url[0]="PBire7.php";
			window.location=url[num];``
			}
			// -->
			</script>
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
					<section class="CurSta">
					<fieldset>
						<legend>New Staff Details</legend>
						<form name="form" method="post">
							<label for="title">Title</label>			
								<input type="text" name="title" value="<?php echo $data2['title']?>"><br>
							<label for="fname">First Name</label>
								<input type="text" name="fname" size="15" maxlength="30" value="<?php echo $data2['fname']?>"><br>
								
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
						<legend>Add Staff Details Other</legend> 
							<label for="dob">Date Of Birth</label>
								<input type="Date" name="dob" value="<?php echo $data2['dob']?>"><br>
								
							<label for="nationality">Nationality</label>						
								<input type="text" name="nationality" value="<?php echo $data2['nationality']?>"><br>
								
							<label for="sex">Male</label>	
								<input type="text" name="sex" value="<?php echo $data2['sex']?>"><br>
							
							<label for="ppsn">PPSN Num.</label>
								<input type="text" name="ppsn" size="15" maxlength="30" value="<?php echo $data2['ppsn']?>"><br>
								
							<label for="marital">Marital Status</label>
								<input type="text" name="marital" size="15" maxlength="30" value="<?php echo $data2['marital']?>"><br>
									
							<label for="accnum">Account Number</label>	
								<input type="number" name="accnum" value="<?php echo $data2['accnum']?>"><br>
							<label for="AccPage">To Account Page</label>
								<input type="button" value="<?php echo $data2['accnum']?>" onclick="newPage(0)">	
									
					</fieldset>
				</section>
				<aside>
					<fieldset>
						<legend>Add Contact Details</legend>
							<label for="email">Email Address</label>
								<input type="Email" name="email" value="<?php echo $data2['email']?>"><br>
							
							<label for="homeph">Home Phone</label>
								<input type="number" name="homeph" value="<?php echo $data2['homeph']?>"><br>
								
							<label for="mobileph">Mobile Phone</label>
								<input type="number" name="mobileph" value="<?php echo $data2['mobileph']?>"><br>
					</fieldset>
					<fieldset>
						<legend>Add Work Details</legend>
							<label for="empno">Employee Number</label>
								<input type="text" name="empno" size="30" maxlength="30" value="<?php echo $data2['empno']?>"><br>
								
							<label for="hiredate">Hire Date</label>
								<input type="Date" name="hiredate" value="<?php echo $data2['hiredate']?>"><br>
								
							<label for="wage">Wage</label>
								<input type="number" name="wage" value="<?php echo $data2['wage']?>"><br>
								
							<label for="jbtitle">Job Title</label>
								<input type="text" name="jbtitle" value="<?php echo $data2['jbtitle']?>"><br>
								
							<label for="branchid">Branch ID</label>
								<input type="number" name="branchid" value="<?php echo $data2['branchid']?>"><br>
					</fieldset>

				</aside>				

			<footer>
			&copy: Copyright PBI 2015
			</footer>
		</div>
	</body>
</html>	
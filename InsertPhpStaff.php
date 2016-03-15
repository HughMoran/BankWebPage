<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("probankire", $con); //tells which database that you want to work with

$sql="INSERT INTO staff (title, fname, surname, add1, add2, city, county, dob, nationality, sex, ppsn, jbtitle, hiredate, wage, empno, email, homeph, mobileph, accnum, branchid)
VALUES
('$_POST[title]','$_POST[fname]','$_POST[surname]','$_POST[add1]','$_POST[add2]','$_POST[city]','$_POST[county]','$_POST[dob]','$_POST[nationality]','$_POST[sex]','$_POST[ppsn]','$_POST[jbtitle]','$_POST[hiredate]','$_POST[wage]','$_POST[empno]','$_POST[email]','$_POST[homeph]','$_POST[mobileph]','$_POST[accnum]','$_POST[branchid]')";

if (!mysql_query($sql,$con)) //this executes all the code above for the sql statement
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you for entering information needed";

mysql_close($con); //closing connection to database
?> 
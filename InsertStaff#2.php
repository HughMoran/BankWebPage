<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("probankire", $con); //tells which database that you want to work with

$sql="INSERT INTO client (title, fname, surname, add1, add2, city, dob, nationality, sex, ppsn, email, homeph, mobileph, jbstat, accnum, marital, county)
VALUES
('$_POST[title]','$_POST[fname]','$_POST[fname]','$_POST[surname]','$_POST[add1]','$_POST[add2]','$_POST[city]','$_POST[dob]','$_POST[nationality]','$_POST[sex]','$_POST[ppsn]','$_POST[email]','$_POST[homeph]','$_POST[mobileph]','$_POST[jbstat]','$_POST[accnum]','$_POST[marital]','$_POST[county]')";

if (!mysql_query($sql,$con)) //this executes all the code above for the sql statement
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you for entering information needed";

mysql_close($con); //closing connection to database
?> 
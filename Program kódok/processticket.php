<?php
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//we specify here the Database name we are using
mysql_select_db('car');
$Name=mysql_real_escape_string($_POST['Name']);
$Service_Type=mysql_real_escape_string($_POST['Service_Type']);
$Car_Reg=mysql_real_escape_string($_POST['Car_Reg']);
$Price=mysql_real_escape_string($_POST['Price']);
/*$month=mysql_real_escape_string($_POST['lMonth']);
$dDay =mysql_real_escape_string($_POST['txtDay']);
$dYear = mysql_real_escape_string($_POST['txtYear']);
*/
$Comments=mysql_real_escape_string($_POST['Comments']);
//Protecting form submitting an empty data

if (!$Name || !$Service_Type || !$Car_Reg || !$Price || !$Comments )
	{
	echo'<body bgcolor="#3a4c38">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='ticket.php'>"."  ". "here"  . "</a>"  . "  " . "to ticket"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}

//It wiil insert a row to our employee_details`
$sql = "INSERT INTO  `car`.`ticketing` (`Name`, `Service_Type`, `Car_Reg`, `Price`, `Date_In`, `Comments` ) 
	VALUES ('{$Name}','{$Service_Type}','{$Car_Reg}', '{$Price}',CURDATE(), '{$Comments}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "ticket.php";
					</script>
					<?php
//close of connection
mysql_close($conn);
?>
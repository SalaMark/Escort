<html>
<head>
	<meta charset="UTF-8">
	<title>Kapcsolat felv�tel - ADMIN CONTROL PANEL</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <div id="header">
        <div class="logo">
            <a href="index.php"><img src="images/logo1.png" alt="LOGO" height="70" width="120"></a>
        </div>
        <ul class="navigation">
            <li>
                <a href="index.php">Menü</a>
            </li>
            <li>
                <a href="adminpanel.php">Admin control panel</a>
            </li>
            <li  class="active">
                <a href="viewcontact.php">Kapcsolati információ</a>
            </li>
            <div id="reg-elements">
                <li>
                    <a href="index.php">Kijelentkezés</a>
                </li>
            </div>
        </ul>
    </div>
    <div class="message">
	<table align='center' border='0' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td valign='center'>
                
                <?php

$host="localhost";
$username="root";
$password="";
$db_name="car";
$tbl_name="contact";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name");
echo"
                
<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='gr'>
<caption><h3>Contact information</h3></caption>
<tr style='color: #fff;'>
<th width='3%'>ID</th>
<th width='10%'>First name</th>
<th width='15%'>Last name</th>
<th width='10%'>E-mail</th>
<th width='10%'>Message</th>
</tr>";
                while($row=mysql_fetch_array ($sel))
{
echo "<tr style='background: #fff;'>";
echo "<td width='2%'>".$row ['id']."</td>";
echo "<td width='10%'>".$row ['fisrt_name']."</td>";
echo "<td width='10%'>".$row ['last_name']."</td>";
echo "<td width='10%'>".$row ['email_address']."</td>";
echo "<td width='10%'>".$row ['message']. "</td>";

echo "</tr>";
}


echo "</table>";
?>


<br/>
			</td>

	</table>
        </div>
<div id="footer">
				<p>
					© Copyright 2021 Escort Carwash. <br> Minden jog fenntartva.
				</p>
            <a href="login.php">Admin</a>
		</div>
</body>
</html>
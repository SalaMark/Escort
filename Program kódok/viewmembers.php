<html>
<head>
	<meta charset="UTF-8">
	<title>Csapattagok - ADMIN CONTROL PANEL</title>
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
                <a href="viewmembers.php">Tag információk</a>
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
$tbl_name="members";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name");
echo"
                
                

<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='gr'>
<caption><h3>Members Information</h3></caption>
<tr style='color: #fff;'>
<th width='3%'>ID</th>
<th width='10%'>First Name</th>
<th width='10%'>Last Name</th>
<th width='10%'>Email</th>
<th width='10%'>salt</th>
<th width='10%'>password</th>
</tr>";
                while($row=mysql_fetch_array ($sel))
{
echo "

<tr bgcolor='white'>";
echo "<td width='3%'>".$row ['id']."</td>";
echo "<td width='3%'>".$row ['fname']."</td>";
echo "<td width='10%'>".$row ['lname']."</td>";
echo "<td width='7%'>".$row ['email']."</td>";
echo "<td width='10%'>".$row ['salt']."</td>";
echo "<td width='7%'>".$row ['password']."</td>";

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
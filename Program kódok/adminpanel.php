<?php
	session_start();
	if (!(isset($_SESSION['admin']) and ($_SESSION['admin']==1))){
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ADMIN CONTROL PANEL</title>
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
            <li  class="active">
                <a href="adminpanel.php">Admin control panel</a>
            </li>
            <div id="reg-elements">
                <li>
                    <a href="index.php">Kijelentkezés</a>
                </li>
            </div>
        </ul>
    </div>
    <div class="contents">
            <h2>Car Wash Admin Control Panel</h2>
            <p  style="text-align: center;">A rendszer lehetővé teszi az adminisztrátor számára, hogy szolgáltatásokat nyújtson a felhasználóknak, és itt az adminisztrátor megteheti
információk hozzáadása és feltöltése, frissítése, törlése, a hozzáadott rekord megtekintése. Az adminisztrátor a nagyobb biztonság érdekében módosíthatja fiókját is.</p>
        <h3 style="text-align: center;">Admin management</h3>
        <div class="cards">
                        <a href='viewmembers.php' style="text-decoration: none; color: #000;"><div class="card">
                            <h3>View members</h3>

                            <img class="pictogram" src="images/viewMembers.png">
                            </div></a>
                        
                       <a href='viewcontact.php' style="text-decoration: none; color: #000;"><div class="card">
                            <h3>View contact</h3>

                           <img class="pictogram" src="images/viewContacts.png">
                        </div> </a>
                        <a href='viewticket.php' style="text-decoration: none; color: #000;"><div class="card">
                            <h3>Ticket information</h3>

                            <img class="pictogram" src="images/ticketInfo.png">
                            </div></a>
                        <a href='search-form.php' style="text-decoration: none; color: #000;"><div class="card">
                            <h3>Search</h3>

                            <img class="pictogram" src="images/search.png">
                            </div></a>
                    </div>
        <form action='' method='post'  style="padding-left: 40%; padding-right: 40%; padding-bottom: 40px;">
            <input type="submit" value="Log Out" name="logout" style="font-size: 30px;">
            </form>
    </div>
	<div id="footer">
				<p>
					© Copyright Escort Carwash. <br> Minden jog fenntartva.
				</p>
            <a href="login.php">Admin</a>
		</div>
</body>
</html>
<?php
	//the session admin is destroyed when he logs out
	if (isset($_POST['logout']) and ($_POST['logout']=='logout')){
		unset ($_SESSION['admin']);
		header('Location:index.php');
	}
?>
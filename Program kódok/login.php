<!DOCTYPE HTML>
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
                <a href="index.php">Menú</a>
            </li>
            <li  class="active">
                <a href="login.php">Admin control panel</a>
            </li>
        </ul>
    </div>
    <div class="message" style="padding-top:15%; padding-bottom:15%;">
        <form name="login" action="processlogin.php" method="POST">
            <h2>Car Wash Admin Control Panel</h2>
            <label>Username</label>
            <input type="text" name="Username" id="Username"/>
            <label>Password</label>
            <input type="password" name="Password"  id="Password"/>
            <input type="submit" value="LOGIN" />
        </form>
    </div>
	<div id="footer">
				<p>
					© Copyright Escort Carwash. <br> Minden Jog Fenntartva.
				</p>
            <a href="login.php">Admin</a>
		</div>
</body>
</html>
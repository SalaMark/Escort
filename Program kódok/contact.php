<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kapcsolat</title>
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
                <a href="about.php">Rólunk</a>
            </li>
            <li>
                <a href="book.php">Online foglalás</a>
            </li>
            <li>
                <a href="services.php">Szolgáltatásaink</a>
            </li>
            <li>
                <a href="gallery.php">Galéria</a>
            </li>
            <li class="active">
                <a href="contact.php">Elérhetőség</a>
            </li>
            <div id="reg-elements">
                <li>
                    <a href="FORM VALIDATION/index.php">Regisztráció</a>
                </li>
                <li>
                    <a href="FORM VALIDATION/index.php">Bejelentkezés</a>
                </li>
            </div>
        </ul>
    </div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Elérhetőség</h2>
					<ul class="contact" style="text-align: center; list-style:none; font-size: 20px;">
						<li>
							<p>
								<span class="home"></span> <em> Escort Carwash</em> Pecs, Valami utca 22.
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: (30) 1234 567
							</p>
						</li>
						<li>
							<p class="fax">
								Fax: (74) 444-444
							</p>
						</li>
						<li>
							<p class="mail">
								Email: info@escortcarwash.hu
							</p>
						</li>
					</ul>
				</div>
			</div>
            <h2>Küldj egy gyors üzenetet.</h2>
			<div class="message">
				
				
				<h3 style="text-align: center;">
					Megtalálsz minket itt:
				</h3>
				<form action="conctactp.php" method="post" class="message">
					<label>Vezetéknév</label>
					<input type="text" reuired value="" name='f_name'>
					<label>Keresztnév</label>
					<input type="text" reuired value="" name='l_name'>
					<label>Email</label>
					<input type="text" reuired value="" name='e_address'>
					<label>�zenet</label>
					<textarea name='msg' reuired></textarea>
					<input type="submit" value="Send Message" name='submit'>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
				<p>
					© Copyright 2021 Escort Carwash. <br> Minden jog fenntartva.
				</p>
            <a href="login.php">Admin</a>
		</div>
</body>
</html>

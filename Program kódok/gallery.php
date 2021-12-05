<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Galeria</title>
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
            <li class="active">
                <a href="gallery.php">Galéria</a>
            </li>
            <li>
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
    <div class="responsiveGallery">
        <h2>Galéria</h2>
        <?php 
        for($i=1;$i<15;$i++)
        {
            echo '<div class="gallery">
                      <a target="_blank" href="">
                        <img src="images/gallery/' . $i . '.jpg" width="600" height="400">
                      </a>
                      <p style="text-align: center">'. $i .'. h�lgy</p>
                    </div>';
        }
        ?>
        
    </div>
    <div id="footer">
				<p>
					© Copyright 2021 Escort Carwash. <br> Minden jog fenntartva.
				</p>
            <a href="login.php">Admin</a>
    </div>
</body>
</html>
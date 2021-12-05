<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online foglalas</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.php"><img src="images/logo1.png" alt="LOGO" height="70" width="120"></a>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php">Menú</a>
				</li>
				<li>
					<a href="about.php">Rólunk</a>
				</li>
				<li >
					<a href="book.php">Online foglalás</a>
				</li>
				<li>
					<a href="services.php">Szolgáltatásaink</a>
				</li>
				<li>
					<a href="gallery.php">Galéria</a>
					
				</li>
				<li>
					<a href="contact.php">Elérhetőség</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Online foglalás</h2>
					<ul>
						<li>
							<a href="#">Kézi mosás</a>
						</li>
						<li>
							<a href="#">Deluxe mosás</a>
						</li>
						<li>
							<a href="#">Alapos átfogó mosás</a>
						</li>
					</ul>
				</div>
				<div>
					<h2>Fiok</h2>
					<p>
                                            <?php 
					include 'login.php';
                                            ?>
					</p>
				</div>
			</div>
			<div class="main">
				
                                <hr>
				<?php 
				include 'account.php';
                                 ?>	
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			
			
			
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2021 Escort Carwash. Minden jog fenntartva.
				</p>
			</div>
		</div>
	</div>
</body>
</html>
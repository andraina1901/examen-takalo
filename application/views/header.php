<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/footer.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/header.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/accueil.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/profile.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/echange.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/interaction.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/fontawesome.min.css">
	<!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/css/templatemo.min.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/templatemo.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/slick.min.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/slick-theme.min.css"> -->
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/bootstrap.min.css">
	<title>X-Change</title>
	<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url();?>assets/img/logo1.png">
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<div class="pic-logo">
					<img src="<?php echo site_url();?>assets/img/logo1.png" alt="">
				</div>
				<div class="name-logo">X-CHANGE</div>
			</div>
			<div class="menu">
				<div class="menu-item">
					<a href="<?php echo site_url('login/accueil');?>">Home</a>
				</div>
				<div class="menu-item">
					<a href="<?php echo site_url('interaction/page');?>">Interaction</a>
				</div>
				<div class="menu-item">
					<a href="<?php echo site_url('profile/profiler');?>">Profile</a>
				</div>
				<div class="menu-item">
				<a href="<?php echo site_url('historique/afficher');?>">Historique</a>
				</div>
				<form action="<?php echo site_url()?>search/search" method="get">
					<div class="menu-item-final">
						<select name="category" id="">
							<?php foreach($category as $category) { ?>
								<option value="<?php echo $category['idcategory'];?>"><?php echo $category['nomcategory'];?></option>
							<?php }?>
						</select>
						<input type="text" name="key" id="">
						<button type="submit">Search</button>
					</div>
				</form>
			</div>
		</div>
		
	</header>

<!DOCTYPE html>
<html>
<head>
	<title> tableau php</title>
	<style type="text/css">
		img{
			width: 150px;
			height: 150px;
			position: center;
		}
		fieldset{
			background-color: none;
		}
	</style>
</head>
<body>
	<fieldset style="width: 20%">
		<center><img src="photo.jpg" alt="ma photo"></center>
		<hr style="color: red">
		<?php 
		$tableau=array(
			'Nom'=> 'LY',
			'Prenom'=> 'Khadidiatou Idy',
			'Adresse'=> 'Gueuke tapée',
			'Téléphone'=>'77-885-77-94',
			'mail'=> 'lykhadidiatou98@gmail.com',
			'identifiant Slack'=> 'Khadijatou Ly'
		);
		foreach ($tableau as $key => $value) {
			echo $key.' : '.$value.'<br>';
			echo '<br>';
			# code...
		}
		?>
	</fieldset>

</body>
</html>
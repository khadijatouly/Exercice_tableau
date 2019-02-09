<!DOCTYPE html>
<html>
<head>
	<title>Un petit essai</title>
	<style type="text/css">
		tr{
			color: none;
		}
		.border{
			color: white;
		}
	</style>
</head>
<body>
	<table border="4" align="center">
		<td>
			<?php
			include 'photo.php';
			$tableau =array(
				'Nom' => 'LY',
				'Prénom' => 'Khadidiatou Idy',
				'Adresse' => 'Gueule tapée',
				'Tel' => '77-885-77-94',
				'Email' => 'lykhadidiatou98@gmail.com',
				'identifiant Slack' => 'Khadijatou Ly'
			);
			?>
			<table border="4" align="center">
				<?php 
				foreach ($tableau as $key => $value) {
					if ($key!='Tel') {
						?>
						<tr>
							<td><?= $key ?></td>
							<td>:</td>
							<td><?= $value ?></td>
						</tr>
						<?php
					}
					?>
					<?php
					if ($key=='Tel') {
						?>
						<tr>
							<td>Telephone</td>
							<td>:</td>
							<td><?= $value ?></td>
						</tr>
						<?php
					}
				}
				 ?>
			</table>
		</td>
		
	</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kayıt Ekleme</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.1.6/vue.min.js"></script>
</head>
<body>
	<div class="contents" style="display: flex;justify-content: center;align-content: center;">
		<div class="bar" style="padding-top: 150px;">
		<form method="post" action="upload.php">
			<input type="text" name="name" class="form-control"><br>
			<input type="text" name="url" class="form-control"><br>
			<input type="submit" name="insert-ref" value="Go" class="form-control"><br>

			<?php 
			if($_GET['durum']=='ok')
			{
				echo '<b style="color:green">Kayıt Yapıldı</b>';
			}
			else
				{
				echo '<b style="color:gray">Bekleniyor</b>';
			}
			?>

		</form>
		</div>
	</div>
</body>
</html>
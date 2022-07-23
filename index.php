

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Devialt Product Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.1.6/vue.min.js"></script>



</head>

	<body style=" background: #24282f;">
		
		<!-- <div id="app">{{msg}}</div> -->
				<div class="wrapper" id="app">

				<h2><strong>{{msg}}<span>( 
<?php
	include "db/data.php";
$sorgux = $db->prepare("SELECT COUNT(*) FROM ref");
$sorgux->execute();
$say = $sorgux->fetchColumn();
echo $say;
?>
)</span></strong></h2>

				<div class="cards">

				<?php 
				include "db/data.php";


				   $sorgu = $db->prepare("SELECT * FROM ref");
				    $sorgu->execute();
					
				    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
				       echo '
					<figure class="card">

						<a href="'.$cikti["link"].'"><img src="'.$cikti["url"].'" /></a>

						<figcaption>'.$cikti["name"].'</figcaption>

					</figure>';
				    }

						?>		




					

					

				</div>

				<h2><strong>{{ksg}}</strong></h2>

				<div class="news">


						<?php 
				include "db/data.php";


				   $sorgu = $db->prepare("SELECT * FROM new");
				    $sorgu->execute();
					
				    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
				       echo '
					<figure class="article">

						<img src="'.$cikti["img"].'" />

						<figcaption>

						<a href="'.$cikti["link"].'">	<h3>'.$cikti["title"].'</h3></a>

							<p>

								'.$cikti["text"].'

							</p>

						</figcaption>

					</figure>';
				    }

						?>	

				

				

				</div>

			</div>
		
		<script>
		new Vue({
			el:"#app",
			data() {
          return {
            msg: "PHP Scripts",
            ksg:"News"
          }
        }
			});	
		</script>
	</body>




</html>
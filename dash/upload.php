<?php 
if(isset($_POST['insert-ref'])){
$name=$_POST['name'];
$url=$_POST['url'];


include "../db/data.php";
$sql = "INSERT INTO ref (name, url) VALUES (?,?)";
$db->prepare($sql)->execute([$name, $url]);


header("Location:admin.php?durum=ok");
}
?>
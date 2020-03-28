<?php

include ('bd.php');
$folder = $_SESSION['id'];

	$addgal = "SELECT * FROM `mypictures`";
$res = $pdo->query($addgal);
while($row = $res -> fetch(PDO::FETCH_ASSOC)) {
$namebd = $row['name'];
  $namem = $row['mininame'];
  $id = $row['id'];
 echo "<a href = '?upd=$id'>";
if ($_GET['upd']==$id) {
            echo "<img src = 'http://localhost/$folder/$namebd'>";
		$insert = "UPDATE `mypictures` SET `count` = `count` + 1 WHERE `id` = $id";
  $ins = $pdo->query($insert);
}
else {
echo "<img class='img-fluid' src='http://localhost/$folder/miniatures/$namem'>"; }
       echo "</a></a>";


if ($_GET['id']==$id) {
$incoun = $pdo->prepare("SELECT `count` FROM `mypictures` WHERE `id` = $id");
	$incoun->execute();
	$coun = $incoun->fetch(PDO::FETCH_OBJ);
$output = print $coun->count;
}
echo "<a href = '?id=$id'>
<img src = '/icons/eye.svg' width='15' height='15'><?=$output?></a>
<a href = '?bin=$id'>
	<img src='/icons/bin.svg' width='15' height='15'></a></br>";

if ($_GET['bin']==$id) {
chdir($folder);
  unlink($namebd);
chdir('miniatures');
  unlink($namem);
  $rem = "DELETE FROM `mypictures` WHERE `id` = $id";
$del = $pdo->query($rem);
}
}



?>
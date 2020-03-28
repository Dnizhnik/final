<?php

include ('bd.php');

	$addgal = "SELECT * FROM `counter`";
$res = $pdo->query($addgal);
while($row = $res -> fetch(PDO::FETCH_ASSOC)) {
$namebd = $row['name'];
  $namem = $row['mininame'];
  $id = $row['id'];

echo "<a href = '?upd=$id'>";

if ($_GET['upd']==$id) {
	echo "<img src = 'http://localhost/pics/$namebd'>";
	$insert = "UPDATE `counter` SET `countin` = `countin` + 1 WHERE `id` = $id";
  $ins = $pdo->query($insert);
}
else {
	echo "<img class='img-fluid' src='http://localhost/pics/miniatures/$namem'>";
}
echo "</a></a>";
if ($_GET['id']==$id) {
$incoun = $pdo->prepare("SELECT `countin` FROM `counter` WHERE `id` = $id");
	$incoun->execute();
	$coun = $incoun->fetch(PDO::FETCH_OBJ);
$output = print $coun->countin;
}
echo "<a href = '?id=$id'>
<img src = '/icons/eye.svg' width='15' height='15'><?=$output?></a>";

}

$addgal2 = "SELECT * FROM `mypictures`";
$res2 = $pdo->query($addgal2);
while($row2 = $res2 -> fetch(PDO::FETCH_ASSOC)) {
$namebd2 = $row2['name'];
  $namem2 = $row2['mininame'];
  $id2 = $row2['id'];
  $folder = $_SESSION['id'];

 echo "<a href = '?upd=$id2'>";
 if ($_GET['upd']==$id2) {
	echo "<img src = 'http://localhost/$folder/$namebd2'>";
	$insert2 = "UPDATE `mypictures` SET `count` = `count` + 1 WHERE `id` = $id2";
  $ins2 = $pdo->query($insert2);
}
	else {
		echo "<img class='img-fluid' src='http://localhost/$folder/miniatures/$namem2'>";
	}
        echo "</a></a>";

if ($_GET['id']==$id2) {
$incoun2 = $pdo->prepare("SELECT `count` FROM `mypictures` WHERE `id` = $id2");
	$incoun2->execute();
	$coun2 = $incoun2->fetch(PDO::FETCH_OBJ);
$output2 = print $coun2->count;

}
echo "<a href = '?id=$id2'>
<img src = '/icons/eye.svg' width='15' height='15'><?=$output2?></a>";

}

?>

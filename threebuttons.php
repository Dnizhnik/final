

<form action = '' method = 'post' name = 'formcount'>
<input type = 'hidden' name = 'id' value = '<?=$row['id']?>'>
<input type = 'submit' name = 'inpcount'>
<input type = 'image' src='/icons/price-tags.svg' width='15' height='15' name ='inptag'>
<input type = 'image' src='/icons/bin.svg' width='15' height='15' name = 'inpdel'>
</form>
<?php

if (isset($_POST['inpdel'])) {
include ('bd.php');
chdir('pics');
  unlink($namebd);
chdir('..');
  chdir('miniatures');
  unlink($namem);
  $rem = "DELETE FROM `counter` WHERE `id` = $id";
$del = $pdo->query($rem);
header('location: /gallery.php');
  exit;
}


if (isset($_GET['id'])) {
$insert = "UPDATE `counter` SET `countin` = `countin` + 1 WHERE `id` = $id";
  $ins = $pdo->query($insert);
}

if (isset($_POST['inpcount'])) {
$coun = "SELECT `countin` FROM `counter` WHERE `id` = $id";
	$incoun = $pdo->prepare($coun);
	$incoun->execute();
	echo "<p>$dispcoun</p>";
exit;

}


?>

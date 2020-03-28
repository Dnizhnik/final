<?php
session_start();

function getminiature() {
      global $filePath, $image, $name, $format, $extension, $create, $namemin;
    $width = 300;
$height = 300;
$image = getimagesize($filePath);
$name = md5_file($filePath);
$extension = image_type_to_extension($image[2]);
$format = str_replace('jpeg', 'jpg', $extension);
$format = str_replace('png', 'jpg', $extension);
$namemin = $name.'_m'.$format;
if(!empty($_FILES['myimage'])) {
$path = $_SESSION['id'].DIRECTORY_SEPARATOR.'miniatures'.DIRECTORY_SEPARATOR. $namemin;
}
if (!empty($_FILES['image'])) {
  $path = 'pics'.DIRECTORY_SEPARATOR.'miniatures'.DIRECTORY_SEPARATOR. $namemin;
}
list($width_orig, $height_orig) = getimagesize($filePath);
$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
    $width = $height * $ratio_orig;
    } else {
        $height = $width / $ratio_orig;
    }

$image_p = imagecreatetruecolor($width, $height);
$image_m = imagecreatefromjpeg($filePath);
imagecopyresampled($image_p, $image_m, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
imagejpeg($image_p, $path);
$create = addslashes(file_get_contents($path));
}

function checking() {
    global $errorCode, $filePath, $image, $insertcontent;
if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($filePath)) {
    $errorMessages = [

        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',

        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
    ];
    $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
    $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
    die($outputMessage);
}
    $fi = finfo_open(FILEINFO_MIME_TYPE);
$mime = (string) finfo_file($fi, $filePath);
if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');
$limitBytes  = 1024 * 1024 * 5;

if (filesize($filePath) > $limitBytes) die('Размер изображения не должен превышать 5 Мб.');
}

function makefile() {
    global $filePath, $image, $name, $format, $extension, $insertcontent, $filename, $myfoto;
if (!file_exists(__DIR__.DIRECTORY_SEPARATOR.'pics')){
            mkdir('pics', 0777, false);
}
$filename = $name . $format;
  if (is_uploaded_file($filePath)) {
    $insertcontent = addslashes(file_get_contents($filePath));

    }
else {
    die('При загрузке изображения произошла ошибка.');
}
}

if (!empty($_FILES['myimage'])) {
    foreach($_FILES['myimage']['name'] as $k=>$f) {
     $filePath  = $_FILES['myimage']['tmp_name'][$k];

$errorCode = $_FILES['myimage']['error'][$k];

checking();
  if (!$errorCode) {
    if (is_uploaded_file($filePath)) {
getminiature();
        makefile();
        move_uploaded_file($filePath, __DIR__.DIRECTORY_SEPARATOR.$_SESSION['id'].DIRECTORY_SEPARATOR.$filename);
require 'bd.php';

$insertmine = 'INSERT INTO `mypictures` (mininame, minicont, name, content) VALUES (:mininame, :minicont, :name, :content)';
$statemine = $pdo->prepare($insertmine);
$statemine->execute([':mininame' => $namemin, ':minicont' => $create, ':name' => $filename, ':content' => $insertcontent]);
 }
}
}
header('location: /myfotos.php');
   }

  if (!empty($_FILES['image'])) {
    foreach($_FILES['image']['name'] as $k=>$f) {
     $filePath  = $_FILES['image']['tmp_name'][$k];

$errorCode = $_FILES['image']['error'][$k];

checking();
  if (!$errorCode) {
    if (is_uploaded_file($filePath)) {
getminiature();
        makefile();
        move_uploaded_file($filePath, __DIR__.DIRECTORY_SEPARATOR.'pics'.DIRECTORY_SEPARATOR.$filename);
require 'bd.php';
  $insertQ = 'INSERT INTO `counter` (mininame, minicont, name, content) VALUES (:mininame, :minicont, :name, :content)';
$state = $pdo->prepare($insertQ);
$state->execute([':mininame' => $namemin, ':minicont' => $create, ':name' => $filename, ':content' => $insertcontent]);
}
             }


}
header('location: /gallery.php');
   }

   ?>
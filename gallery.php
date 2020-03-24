<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Галерея изображений</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style>
        img {
            padding: 4px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        img:hover {
            opacity: 0.6;
            filter: alpha(opacity=60);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="grid">
         <?php
require 'bd.php';
$addgal = "SELECT * FROM `counter`";
$res = $pdo->query($addgal);
while($row = $res -> fetch(PDO::FETCH_ASSOC)) {
  $namebd = $row['name'];
  $namem = $row['mininame'];
  $id = $row['id'];
echo "<a href = 'threebuttons.php?id=$id'>
<a data-fancybox='gallery' href='http://localhost/pics/$namebd'>
<img class='img-fluid' src='http://localhost/miniatures/$namem'>
        </a></a>";
        require 'threebuttons.php';

}
?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Gridify JS -->
<script src="http://localhost/hongkhanh-gridify-f746c21/javascript/gridify.js"></script>
<script>
$(function() {
    var options = {
        srcNode: 'img',             // grid items
        margin: '15px',             // margin in pixel
        width: '240px',             // grid item width in pixel
        max_width: '',              // dynamic gird item width
        resizable: true,            // re-layout if window resize
        transition: 'all 0.5s ease' // support transition for CSS3
    };
    $('.grid').gridify(options);
});
</script>
</body>
</html>

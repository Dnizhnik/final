<?php
	echo
            	'<form action = "logout.php" method = "post">
            	<input type="submit" name = "logout" value = "Выйти">
            	</form>
            <!DOCTYPE HTML>
<html>
 <head>
   <meta charset="utf-8">
   <html lang = "ru">
  <title>Сервис загрузки картинок</title>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </head>
 <body>
   <header>Сервис загрузки картинок

</header>
   <div class = "container">
			<form action="backend.php" method="post" enctype="multipart/form-data">
   <input type="file" name="image[]" multiple>
   <input type="submit" name="send" value = "Отправить">
<input type="reset" name="reset" value="Очистить">
</form>
    </div>
   <footer>Права на все загруженные вами изображения принадлежат нам. 2020г.</footer>
 </body>
</html>';

?>
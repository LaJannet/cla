<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Тест</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    include('header.php');
    ?>
    <h1>Countries</h1>
    <form method="post" action="countries.php" name="myform">
	<label for='formCountry'> Виберіть країну: </label>
        <select  name="formCountry">
		<option value="US">США</option>
		<option value="UK">Великобританія</option>
		<option value="France">Франція</option>
		<option value="Mexico">Мексика</option>
		<option value="Japan">Японія</option>
	</select>
    <input type="number" name="star" id="star">
    <input type="range" id="price" name="price" min="0" max="10">
	<button name="formSubmit">ОК</button>
    </form>
    <?php
    include('footer.php');
    ?>
  </body>
</html>
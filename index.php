<!DOCTYPE html>
<html>
<head>
	<title>Storehouse_tracker</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="img/logo_r.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="fonts/roboto.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="font-family: Roboto; width: 100%; overflow-x: hidden; background: #FEECCE;">

	<script>
		var i = 0;
		window.onload = ()=>{var el = document.getElementById('scroll');}
		var lab = document.createElement("label");
		var inp = document.createElement("input");

		inp.setAttribute('type', 'checkbox');
		inp.setAttribute('name', 'check');
		inp.setAttribute('id', 'check');

	</script>
	
	<script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script> 

	<div id="header" class="row">
		<div class="col-xs-0 col-sm-0 col-md-6 col-lg-6"></div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
	</div>
	<div class="row2">
		<div id="create" class="request">
			<h2 style="color: white; text-align: center;">Добавить новый товар</h2>
			<form method="POST" class="test">
				<div  style="float:left; margin-left: 30px;">
				<p>Название товара:<br> 
				<input type="text" name="name" class="razmer" /></p>
				<p>Номер партии:<br> 
				<input type="text" name="" class="razmer" /></p>
				</div>
				<div style="float:left; margin-left: 20px; margin-right: 20px;">
				<p>Строк хранения:<br> 
				<input type="text" name="" class="razmer" /></p>
				<p>Количество:<br> 
				<input type="text" name="" class="razmer" /></p>
				</div>
				<div>
				<p>Тип:<br> 
				<input type="text" name="name" class="razmer" /></p>
				<p>Дополнительно:<br> 
				<input type="text" name="name" class="razmer" /></p>
				</div>
				<input class="superbutton" name="submit" type="submit" value="Добавить">
			</form>
		</div>

		<!-- <div id="edit" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 request">
			<div class="raised-block">
			<h2 style="color: white;">Изменить модель</h2>
			<form method="POST" action="edit.php">
			<p>Id:<br>
			<input type="id" name="id" class="razmer"/></p>
			<p>Введите модель:<br> 
			<input type="text" name="name" class="razmer"/></p>
			<p>Производитель: <br> 
			<input type="text" name="company" class="razmer"/></p>
			<input type="submit" value="Изменить" class="superbutton" >
			</form>
		</div>
		</div> -->
 
		<div id="remove" class="request2" style="text-align: center;">
			<div class="raised-block1">
			<h2 style="color: white;">Удалить товар</h2>
			<form method="GET" action="delete.php">
			<p>Введите ID:<br> 
			<input type="id" name="id" class="razmer" /></p>
			<input type="submit" class="superbutton" name="submit" value="Удалить">
			</form>
			</div>
		</div>
 	</div>

	<div class="">
		<div class="main_form col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form method="GET" action="">
				<div class="row">
				<div class="scroll col-xs-12 col-sm-12 col-md-12 col-lg-11" id="style-1">

											<!-- get_list -->
					<?php
					ini_set('short_open_tag', 'on');
					require_once 'connection.php'; // подключаем скрипт 
					$link = mysqli_connect($host, $user, $password, $database) 
					    or die("Ошибка " . mysqli_error($link)); 
					mysqli_select_db($link, "compstore");
					$result = mysqli_query($link, "SELECT id, name, company, token FROM tovars");
					while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
printf("<label value=%s style=padding-top:15px;><input type=radio id=test value=%s name=bar style=margin-right:15px;>Id: %s Название: %s Компания: %s Токен: %s</label><br>", $row[0], $row[0], $row[0], $row[1], $row[2], $row[3],);
}
					mysqli_free_result($result);
					mysqli_close($link);
					?>
				</div>
				<div class="icons col-xs-12 col-sm-12 col-md-12 col-lg-1">
					<div class="row" style="background: #CCA668;">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-12" style="text-align: center; padding-top: 5px; padding-bottom: 5px;"><a href="#" onclick="document.getElementById('find').submit(); return false;"><input type="submit" value="Поиск" class="superbutton2" ></a></div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-12" style="text-align: center; padding-top: 5px; padding-bottom: 5px;"><a href="#" onclick="document.getElementById('light').submit(); return false;"><!-- <img src="img/volume.png" style="width: 60px; height: 60px;"> --></a></div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-12" style="text-align: center; padding-top: 5px; padding-bottom: 5px;"><a href="#" onclick="document.getElementById('sound').submit(); return false;"></a></div>
					</div>
				</div>
				</div>
			</form>
		</div>
	</div>

<form method="GET" action="sample.php" id="find" style="display: none;">
	<input type="text" value="find" name="command">
	<input type="text" name="ID" value="">
	<input type="submit" value="Click me!">
</form>



<form method="GET" action="sample.php" id="light" style="display: none;">
	<input type="text" value="sound" name="command">
	<input type="text" name="ID" value="">
	<input type="submit" value="Click me!">
</form>


<form method="GET" action="sample.php" id="sound" style="display: none;">
	<input type="text" value="light" name="command">
	<input type="hidden" name="ID" value="">
	<input type="submit" value="Click me!">
</form>
<!-- <?php
$id = 1;
?> -->
<!-- <a href="http://localhost/storehouse_master-master/sample.php?command=find&ID= php echo &id  Profile</a> -->

</body>
</html>


								<!-- Create_element -->
<?php
error_reporting(0);
require_once 'connection.php';  // подключаем скрипт
if(isset($_POST['name']) && isset($_POST['company']) && isset($_POST['token'])){ 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));
    $token = htmlentities(mysqli_real_escape_string($link, $_POST['token']));     
    // создание строки запроса
    $query ="INSERT INTO tovars VALUES(NULL, '$name','$company', '$token')";    
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        exit(header("Location:".$_SERVER['REQUEST_URI']));
    }
    // закрываем подключение
    mysqli_close($link);
}
?>


								<!-- Edit_element -->
<?php
error_reporting(0);
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
// если запрос POST 
if(isset($_POST['name']) && isset($_POST['company']) && isset($_POST['id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));
     
    $query ="UPDATE tovars SET name='$name', company='$company' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}
// если запрос GET
if(isset($_GET['id']))
{   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
    // создание строки запроса
    $query ="SELECT * FROM tovars WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0) 
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $name = $row[1];
        $company = $row[2];
        echo "<h2>Изменить модель</h2>
            <form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите модель:<br> 
            <input type='text' name='name' value='$name' /></p>
            <p>Производитель: <br> 
            <input type='text' name='company' value='$company' /></p>
            <input type='submit' value='Сохранить'>
            </form>";
        mysqli_free_result($result);
    }
}
header ('Location: index.php');
// закрываем подключение
mysqli_close($link);
?>


										<!-- remove_element -->
<?php
error_reporting(0);
require_once 'connection.php'; // подключаем скрипт   
if(isset($_POST['id'])){
$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['id']);    
    $query ="DELETE FROM tovars WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    header('Location: index.php');

}
	if(isset($_GET['id']))
	{   
	    $id = htmlentities($_GET['id']);
	    echo "<h2>Удалить модель?</h2>
	        <form method='POST'>
	        <input type='hidden' name='id' value='$id' />
	        <input type='submit' value='Удалить'>
	        </form>";
	}

?>
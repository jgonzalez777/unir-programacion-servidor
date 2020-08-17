<?php //Formulario 01 sin procesamiento

	if(!empty(($_POST['name']))) $name = $_POST['name'];
	else $name = "Anónimo";

	echo <<<_END  
		<html>    
			<head>      
				<title>Form Test</title>    
			</head>    
			<body>    
				<form method="post" action="index01.php">      
					¿Como te llamas?      <input type="text" name="name">
					<input type="submit">    
				</form>    
			</body>  
		</html>
	_END;
?>

/*Check*/
<?php  
	echo $_POST['ice'];
?>

/*Arreglo de opciones*/
<?php  
	$helado = $_POST['ice'];  
	foreach($helado as $sabor) echo "$sabor<br>";
?>
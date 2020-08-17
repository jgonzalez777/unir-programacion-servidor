<!DOCTYPE html>
<html>  
	<head>    
		<title>Using Cookies</title>  
	</head>  
	<body>  
		<p>
			La primera vez que se carga la página no hay cookie, solo se crea,    se da actualizar y ya aparece el mensaje
		</p>    

		<?php      
			$test = 'false';      
			if (isset($_COOKIE['test'])) $test = $_COOKIE['test'];        
			echo "<p><b>El valor de la cookie 'test' es: $test</b></p>";      
			setcookie('test', 'I love cookies');      
			if (isset($_POST['borrar']) && $_POST['borrar'])       
				setcookie('test', 'I love cookies', time() -2592000);          
		?>

		<form method="post" action="index01.php">                    
			Borrar la Cookie?                    
			<input type="checkbox" name="borrar" />                      
			</br>                       
			</br>                    
			<input type="submit" value="Estado de la Cookie">
		</form>
	</body>
</html>
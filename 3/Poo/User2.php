<!--Objetos  2 -->
<?php
	class User 
	{    

		public $name, $password;    

		function __construct($name, $password) 
		{     
			$this -> name = $name;     
			$this -> password = $password;     
		}        

		function saludar()    
		{
			echo "Hola Mundo, soy: ".  $this -> name;    
		}  
	}  

	$usuario = new User("Bety", "contr@señ@");  

	print_r($usuario);

	echo "<br>";

	echo $usuario -> name;

	echo "<br>";

	$usuario->saludar();
?>
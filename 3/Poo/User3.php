<!--Objetos  3 -->
<?php  
	class User
	{    
		protected $name, $password;

		function __construct($name, $password)    
		{     
			$this -> name = $name;     
			$this -> password = $password;     
		}      


		//Setters    
		function set_name($name){      
			$this->name = $name;    
		}    
		function set_password($password){      
			$this->password = $password;    
		}    


		//Getters    
		function get_name(){      
			return $this->name;    
		}    
		function get_password(){      
			return $this->password;    
		}    


		//Metodos    
		function saludar()    
		{  	  
			echo "Hola Mundo, soy: ".  $this -> name;    
		}    


		//Metodos Estatico    
		static function saludo()
		{      
			echo "HOLA A TODOS!";    
		}  
	}  

	$usuario = new User("Bety", "contr@señ@"); 

	print_r($usuario);  

	echo "<br>";  

	echo "El nombre es: ". $usuario -> get_name();  

	echo "<br>";  

	echo "El password es: ". $usuario -> get_password();    

	echo "<br>"; 

	$usuario->saludar(); 

	echo "<br>";  

	User::saludo();//Invocar un método estático de una clase
?>
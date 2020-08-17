<!--Objetos  4 -->
<?php 
	class User  
	{    
		protected $name, $password;    

		function __construct($name, $password)    
		{     
			$this -> name = $name;     $this -> password = $password;     
		}      

		//Setters    

		function set_name($name)
		{      
			$this->name = $name;    
		}    

		function set_password($password)
		{      
			$this->password = $password;    
		}    

		//Getters    

		function get_name()
		{      
			return $this->name;    
		}    

		function get_password()
		{      
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

	class Subscriber extends User  
	{    
		protected $phone, $email;    

		function __construct($name, $password, $phone, $email)    
		{      
			parent::__construct($name, $password);      
			$this->phone = $phone;      
			$this->email = $email;    
		}      

		function display()
		{      
			echo "Name:  " . $this->name     . "<br>";
			echo "Pass:  " . $this->password . "<br>";      
			echo "Phone: " . $this->Phone 	 . "<br>";
			echo "Email: " . $this->email;
		}
	}

	$subscriptor =  new Subscriber("Bety", "Contraseña", "555-555-555", "bety@gmail.com");

	$subscriptor->display();

?>
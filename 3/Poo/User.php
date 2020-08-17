<!--Objetos  1 -->
<?php  

class User
{
	public $name, $password;    

	function saludar(){  	  
		echo "Hola Mundo, soy: ".  $this -> name;    
	}  
}  

$object = new User;  

print_r($object);  

echo "<br>";  

$object->name = "Octavio";  

$object->password = "c0NtR4señ@";  

print_r($object);

echo "<br>";

$object->saludar();

?>
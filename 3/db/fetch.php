<?php // Procesamiento fetch_array  

require_once 'login.php';  


$conn = new mysqli($hn, $un, $pw, $db);  

if ($conn->connect_error) die("Error al conectarse a la Base de Datos: $conn->connect_error");  

$query  = "SELECT * FROM classics";  

$result = $conn->query($query);  

if (!$result) die("Error al recuperar la información de la Bases de Datos");  

$rows = $result->num_rows;  

for ($j = 0 ; $j < $rows ; ++$j)  
{ 
	// INICIO Respecto al fetch_assoc se puede cambiar solo esto.    
	$row = $result->fetch_array(MYSQLI_ASSOC); 
	//areglo asociativo    
	echo 'Autor: '     . $row['author']   . '<br>';    
	echo 'Titulo: '    . $row['title']    . '<br>';    
	echo 'Categoría: ' . $row['category'] . '<br>';    
	echo 'Año: '       . $row['year']     . '<br>';    
	echo 'ISBN: '      . $row['isbn']     . '<br><br>'; 
	// FIN Respecto al fetch_assoc se puede cambiar solo esto.  
}  

$result->close();  

$conn->close();

?>
<?php 

try 
{
	$db = new PDO('mysql:host=localhost;dbname=calendar', 'root', 'bd');

}
catch (PDOException $e) 
{
    echo 'Error: ' . $e->getMessage();
    exit();
}


 ?>
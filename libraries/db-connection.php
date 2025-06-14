<?php
 // include LIBRARIES."config-constant.php";

 $db = new mysqli("localhost","root","");
   if($db->connect_error > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    } //this line and above lines connect to the server
     
	$db->query("CREATE DATABASE IF NOT EXISTS `$dbname`");  // this line checks if the database has been created if not it create a database
	 
    mysqli_select_db($db,$dbname); //this line select the created database
              

$query = '';
$sqlScript = file('./libraries/database/masterpdo2.sql');
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($db,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
		$query= '';		
	}
}
echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';
	 	
?>
<?php
//Procedural Method
//$conn =  mysqli_connect('localhost','root','','university');

//Object Oriented
$host	=	"localhost";
$user	=	"root";
$passwd	=	"";
$db		=	"sparezone";



//$link = new MySQLi('localhost','root','','university');

$con= mysqli_connect($host, $user, $passwd, $db);
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}

//$sql="INSERT INTO student values ('SE/2018/074','R.N.P. Bandara',21,'Kegalle')";

//$sql="UPDATE student SET age=20 WHERE stdno='SE/2018/074'";

//$sql="DELETE from student where city='Matale'";
/*
$result	=	$link->query($sql);

if ( $result ){
	
	echo "Record added to DB";
}else{
	
	echo "Error in SQL...";
}
*/



?>
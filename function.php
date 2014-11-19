<?php
function datetime($hour_type){
	if($hour_type == 12){
		return date("Y/m/d h:i:s");
	}else{
		return date("Y/m/d H:i:s");
	}
}


function echobr($str){
	echo $str . "<br />";

}
function get_conn(){
	$db_server 		= "localhost";
	$db_username 	= "root";
	$db_password 	= "mysql";
	//$db_password 	= "";
	$db_name		= "president";
	
	$conn = mysql_connect($db_server, $db_username, $db_password);
	mysql_query("set names utf8");
	
	mysql_select_db($db_name);
	return $conn;

}

?>
<?php
require_once("settings_mysql.php");

function mysql_ConnectToDatabase()
{
	
	global $mysql_server,$mysql_user,$mysql_password;
	$link = mysql_connect($mysql_server,$mysql_user,$mysql_password);
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	//echo 'Connected successfully';
	return $link;
}


function mysql_Reflow_GetVar( $id, $name )
{
	$query = sprintf ("SELECT %s from reflows where id='%s'",$name,mysql_real_escape_string($id));
	$result=mysql_RunQuery($query);
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	//print_r($row);
	return $row[$name]; 
}

function mysql_RunQuery($query)
{
	//echo $query . "</br>\n";
	global $mysql_server,$mysql_user,$mysql_password,$mysql_database;
	$link = mysql_connect($mysql_server,$mysql_user,$mysql_password);
	if (!$link) {
		echo('Could not connect: ' . mysql_error());
	}
	mysql_select_db($mysql_database,$link);
	//echo 'Connected successfully';
	$result = mysql_query($query, $link);
	if (!$result) { echo "ERROR, Query resulted in no return."; }
	
	mysql_close($link);
	return $result;
}

function mysql_Reflow_BuildIndex()
{
	$result=mysql_RunQuery(sprintf("SELECT * FROM reflows"));
	while ( $resultrow=mysql_fetch_array($result,MYSQL_ASSOC) )
	{
		echo "<li> <a href='http://cssreflow.com/video.php?video_id=" . $resultrow['id'] . "'>" . $resultrow['sitename'] . "</a></li>";
	}
}

 



		
	


?>
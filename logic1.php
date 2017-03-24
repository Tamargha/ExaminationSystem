<?php
include './db2.php';
$link=null;
function OpenConnection()
{
	global $link;
	$link=mysql_connect(HOST,USERNAME,PASSWORD);
	mysql_select_db(DATABASE);
}
function CloseConnection()
{
	global $link;
	mysql_close($link);
}
function ExecuteNonQuery($query)
{
	OpenConnection();
	mysql_query($query);
	$x= mysql_affected_rows();
	CloseConnection();
	return $x;
}
function ExecuteQuery($query)
{
	OpenConnection();
  $res=mysql_query($query);

	//CloseConnection();
	return $res;

}
?>

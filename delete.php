<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("student");
$res=mysql_query("delete from stu_info where stu_id=$_REQUEST[id]");
if(mysql_affected_rows()>0)
  {
    header("location:detail.php");
  }
?>

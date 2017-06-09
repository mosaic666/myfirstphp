<?php
header("content_type=text/html;charset=utf-8");
$conn=mysql_connect('localhost','root','123456');
if(!$conn){
	die("数据库连接失败");}
else{
	mysql_select_db("login",$conn);
	mysql_query("set names 'utf8'");
	$name=$_GET['name'];
	$del="delete from login where name='$name'";
	$set=mysql_query($del);
	if($set){
		echo"<script>alert('删除成功');location='index.php';</script>";
	}
	else{
		echo mysql_error();
		echo"<script>alert('删除失败');location='index.php';</script>";}
}
?>
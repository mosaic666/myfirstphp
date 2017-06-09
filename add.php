<?php
header("content_type:text/html;charset=utf-8");
$conn= @mysql_connect('localhost','root','123456');
if(!$conn){
	die("连接数据库失败");}
else{
	mysql_select_db("login",$conn);
	mysql_query("set names 'utf8'");
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$id=$_POST['id'];
	$qq=$_POST['qq'];
	$class=$_POST['class'];
	$add="insert into `login`(`name`,`tel`,`id`,`qq`,`class`) values('$name','$tel','$id','$qq','$class')";
	$set=mysql_query($add);
	if($set){
		echo"<script>alert('添加成功');location='index.php';</script>";}
	else{
		echo"<script>alert('添加失败');location='index.php';</script>";}
	}
?>
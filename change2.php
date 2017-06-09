<?php
session_start();
$name = $_SESSION['name'];
header("content_type:text/html;charset=UTF-8");//<!--头文件设置编码格式-->
$conn = mysql_connect("localhost","root","123456");//连接数据库
mysql_query("set names 'utf8'");
if (!$conn)
  {
      echo "连接数据库失败";
  }
mysql_select_db("login",$conn);
//接受数据
$newname=$_POST['name'];
$tel=$_POST['tel'];
$id=$_POST['id'];
$qq=$_POST['qq'];
$class=$_POST['class'];
//修改语句
$sql="update login set name='$newname',tel='$tel',id='$id',qq='$qq',class='$class' where name='$name'";
$set=mysql_query($sql);
echo mysql_error();
if($set)
{
	echo "<script>alert('修改成功');location='index.php';</script>";
}
else
{
	echo "修改失败";
}
?>
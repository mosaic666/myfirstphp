<?php
session_start();
$name = $_GET['name'];
$_SESSION['name'] = $name;
?>
<html>
<head>
<meta charset="UTF-8">
<!--头文件设置编码格式-->
<title>通讯录</title>
</head>
<body>
<div style="width:80%; margin-left: auto;margin-right: auto;">
  <div align="center">
    <h1>修改联系人</h1>
  </div>
  <!--传输数据-->
  <div>
    <form action="change2.php" method="post">
      <?php
			$conn= mysql_connect("localhost","root","123456");//连接数据库
			mysql_query("set names 'utf8'");
			mysql_select_db("login",$conn);
if (!$conn)
  {
      die ("连接数据库失败");
  }
			$res = mysql_query("select * from login WHERE  name = '$name'");
                   	$arr = mysql_fetch_array($res); ?>
      <input name="name" type="text" placeholder="姓名" required value="<?php echo $name ?>">
      <input name="tel" type="text" placeholder="手机号" required value="<?php echo $arr['tel'] ?>">
      <input name="id" type="text" placeholder="学号" required value="<?php echo $arr['id'] ?>">
      <input name="qq" type="text" placeholder="qq号" required value="<?php echo $arr['qq'] ?>">
      <input name="class" type="text" placeholder="班级" required value="<?php echo $arr['class'] ?>">
      <input type="submit" value="修改联系人">
    </form>
  </div>
</div>
</body>
</html>
<html>
<head>
<meta charset="utf-8" />
<title>通讯录</title>
<link href="adress.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="a1">
  <h1>通讯录</h1>
</div>
<div align="center">
  <form  action="add.php" method="post">
    姓名：
    <input name="name" type="text" placeholder="姓名" required="required">
    手机号：
    <input name="tel" type="text" placeholder="手机号" required="required">
    学号：
    <input name="id" type="text" placeholder="学号" required="required">
    qq：
    <input name="qq" type="text" placeholder="qq号" required="required">
    班级：
    <input name="class" type="text" placeholder="班级" required="required">
    <input type="submit" value="新增联系人" />
  </form>
</div>
<div>
  <table width="100%" border="1px">
    <thead>
      <tr>
        <th><p>编号</p></th>
        <th><p>姓名</p></th>
        <th><p>手机号</p></th>
        <th><p>学号</p></th>
        <th><p>qq</p></th>
        <th><p>班级</p></th>
        <th><p>权限</p></th>
      </tr>
    </thead>
    <?php
$i=0;
$conn = @mysql_connect('localhost','root','123456');
mysql_select_db('login',$conn);
mysql_query("set names 'utf8'");
echo mysql_error();
if(!$conn){
	die("数据库连接失败");}
else{
	$ass = mysql_query(" select * from login ");
	while($arr=mysql_fetch_array($ass)){
		$i++;
		echo "<tr>
		<th><p>".$i."</p></th>
		<th><p>".$arr['name']."</p></th>
		<th><p>".$arr['tel']."</p></th>
		<th><p>".$arr['id']."</p></th>
		<th><p>".$arr['qq']."</p></th>
		<th><p>".$arr['class']."</p></th>
		<th><p><a href='delete.php?name=".$arr['name']."'>删除</a>|<a href='change.php?name=".$arr['name']."'>修改</a></p></th>
		</tr>";
		}
	}
?>
  </table>
</div>
</body>
</html>
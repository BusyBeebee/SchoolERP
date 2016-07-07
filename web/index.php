<!--入口-->
<html>
<body>
<head>
	<title>入口</title>
</head>
<?php
	 	$con = mysql_connect("localhost","root","root");
	 	if($con)
	 		echo "mysql connect success!\n";
	 	else
	 		echo "mysql connect false!".mysql_errno()."<br/>";
	 	$sqlstr = "create database mytest";
	 	if(mysql_query($sqlstr,$con))
	 	{
	 		echo "query suc!"."<br/>";
	 	}
	 	else
	 	{
	 		echo "query false!".mysql_errno()."<br/>";
	 	}
	 	mysql_select_db("mytest",$con);
	 	$sqlstr = "create table testtable
	 	(
	 			a int default 0,
	 			b int default 0,
	 			c int default 0
	 	)";
	 	if(mysql_query($sqlstr,$con))
	 	{
	 		echo "query suc!"."<br/>";
	 	}
	 	else
	 	{
	 		echo "query false!".mysql_errno()."<br/>";
	 	}
	 	
	 	mysql_close($con);
?>

</body>
</html>

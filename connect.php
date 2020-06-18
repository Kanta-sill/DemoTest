<?php
$conn_string = "host=ec2-52-87-135-240.compute-1.amazonaws.com port=5432 dbname=d6uabjib7gtht3 user=pzxpkikhdgmmuf password=73727526112e6217dd981ddfc4ee440bba263d4a4d8146bcd6305efc12f14005";
$dbconn=pg_connect($conn_string);
if(isset($_POST['username'])){
	$username=$_POST['username'];
}
if(isset($_POST['pass'])){
	$pass=$_POST['pass'];
}

$sql="select * from tblaccount1 where _user='".$username."' and _pass='".$pass."'";

$result = pg_query($dbconn, $sql)
		or
        die("Không thể kết nối database");

$row=pg_num_rows($result);
if($row==1)
{
	echo "Log in success";
}
else
{
	echo "Log in fail";
}


?>

<?php
mysql_connect("mysql.hostinger.vn","u544042823_kh","123456");
mysql_select_db("u544042823_kh");
mysql_query("SET NAMES 'utf-8'");

$action=$_POST["action"];
if($action=="insert")
{
	$ten_khoa_hoc=$_POST["ten_khoa_hoc"];
	$hoc_phi=$_POST["hoc_phi"];
	$qr="
	INSERT INTO chi_tiet_khoa_hoc VALUES(
		null,'$ten_khoa_hoc','$hoc_phi'
	
	
	)	
	";
	mysql_query($qr);
	$id=mysql_insert_id();
	echo "INSERT Thành công id=$id";
}

?>
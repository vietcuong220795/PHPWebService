<?php
mysql_connect("mysql.hostinger.vn","u544042823_kh","123456");
mysql_select_db("u544042823_kh");
$action=$_POST["action"];
if($action=="update")
{
	$id=$_POST["id"];
	$ten_khoa_hoc=$_POST["ten_khoa_hoc"];
	$hoc_phi=$_POST["hoc_phi"];
	
	$qr="
	UPDATE chi_tiet_khoa_hoc
	SET 
		id=$id,
		ten_khoa_hoc=$ten_khoa_hoc,
		hoc_phi=$hoc_phi
	WHERE id=$id	
	";
	mysql_query("SET NAMES 'utf-8'");
	mysql_query($qr);
	$id=mysql_affected_rows();
	echo "Update Thành công id=$id";
}
?>
<?php
mysql_connect("mysql.hostinger.vn","u544042823_kh","123456");
mysql_select_db("u544042823_kh");
$action=$_POST["action"];
if($action=="delete")
{
	$id=$_POST["id"];
	
	$qr="
	DELETE FROM chi_tiet_khoa_hoc WHERE id='$id'	
	";
	mysql_query("SET NAMES 'utf-8'");
	mysql_query($qr);
	$id=mysql_affected_rows();
	echo "DELETE Thành công id=$id";
}
?>
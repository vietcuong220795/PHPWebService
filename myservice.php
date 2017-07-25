<?php
/*mysql_connect("sql203.byethost3.com","b3_18947965","2s6rhn7q");
mysql_select_db("b3_18947965_nha_hang");*/
error_reporting(0);
mysql_connect("mysql.hostinger.vn","u544042823_kh","123456");
mysql_select_db("u544042823_kh");
ini_set("allow_url_fopen", 1);
/*
mysql_connect("127.0.0.1","root","");
mysql_select_db("khoa_hoc");

*/
mysql_query("SET NAMES 'utf-8'");
$khoa_hoc=mysql_query("SELECT * FROM chi_tiet_khoa_hoc");
$mang=array();
while ($row= mysql_fetch_array($khoa_hoc))
{
	$id=$row["id"];
	$ten_khoa_hoc=$row["ten_khoa_hoc"];
	$hoc_phi=$row["hoc_phi"];
	array_push($mang,new KHOA_HOC($id,$ten_khoa_hoc,$hoc_phi));
	}
	echo json_encode($mang);	
	class  KHOA_HOC{
		var $id;
		var $ten_khoa_hoc;
		var $hoc_phi;
		function KHOA_HOC($i,$t,$h)
		{
			$this->id=$i;
			$this->ten_khoa_hoc=$t;
			$this->hoc_phi=$h;					
			}
		
		}
?>
<?php /*?><?php
define("DB_HOST","mysql.hostinger.vn");
define("DB_NAME","u910191418_kudt");
define("DB_USER","u910191418_root");
define("DB_PWD","Tvcuong95");
?><?php */?>

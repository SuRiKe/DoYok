<?php namespace app\module;
	
class Fungsi{
	
	public static function eksekusi($query,$bindings,$conn){
		$res = $conn->prepare($query);
		$res->execute($bindings);
		$data = $res->fetchAll();

		return $data;
	}
	
	public static function query($query,$conn){
		try{
			$res = $conn->query($query);
			return $res;
		}catch(Excepstion $e){
			return false;
		}
	}
	
	public static function insert($tblname,$value,$_nama_kolom,$conn){
		$data = $value;
		$nama_kolom = $_nama_kolom;
		$keys = array_keys($data);
		$kolom = '';
		$values = '';

		foreach ($nama_kolom as $desired_key) {
			if (!in_array($desired_key, $keys)) {
				$$desired_key = '';
			}else{
				$$desired_key = $data[$desired_key];
			}
			$kolom = $kolom.$desired_key.',';
			$values = $values."'".$$desired_key."',";
		}
		$result = $conn->query("INSERT into ".$tblname."(".trim($kolom,',').") VALUES(".trim($values,',').")");
		return $result ? 1 : 0; 
	}
	
	public static function page($page_name){
		$page =  htmlentities($_GET[$page_name]);
		$halaman = "page/{$page}.page.php";

		if (!file_exists($halaman)||empty($page)) {
			include "page/home.page.php";
		}
		else{
			include "$halaman";
		}
	}
}
?>
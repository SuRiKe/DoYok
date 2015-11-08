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
	
	public static function passGen($password){
		return password_hash($password, PASSWORD_DEFAULT);
	}
	
	public static function passVer($password,$hash){
		return password_verify($password, $hash);
	}
	
	public static function page($page_name){
		$page =  htmlentities($_GET[$page_name]);
		$halaman = "page/{$page}.page.php";

		if (!file_exists($halaman)||empty($page)) {
			include_once "page/beranda.page.php";
		}
		else{
			include_once "$halaman";
		}
	}
	
	public static function menuClient($login){
		if($login == true){
			$data = array('beranda','tentang','lapor','keluar');
		}else{
			$data = array('beranda','daftar','masuk','tentang');
		}
		return $data;
	}

	public static function autoId($table,$field,$panjang,$inis,$conn){
		$qry = $conn->query("SELECT ($field) FROM $table");
		foreach($qry as $data){
			if($data[0] == ""){ $angka=0;}
			else{
				$angka = substr($data[0], strlen($inis));
			}
		}
		$angka++;
		$angka = strval($angka);
		$tmp = "";
		for($i=1;$i<=($panjang-strlen($inis)-strlen($angka));$i++){
			$tmp=$tmp."0";
		}
		return ($inis.$tmp.$angka);
	}

	public static function uang($angka){
	$jumlah_desimal ="0";
	$pemisah_desimal=",";
	$pemisah_ribuan =".";
	$h = number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-";
	 return $h;
	}
	function rekap($angka){
		$jumlah_desimal ="0";
		$pemisah_desimal=",";
		$pemisah_ribuan =".";

		$h = number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
		return $h;
	}
}
?>
<?php 
	require 'Rest.inc.php';
	header("Access-Control-Allow-Origin: *");

	class API extends REST{

		public $data = "";
		
		const DB_SERVER = "localhost";
		const DB_USER = "maskera";
		const DB_PASSWORD = "maskera";
		const DB = "db_doyok";
		
		private $db = NULL;
		private $mysqli = NULL;
		public function __construct(){
			parent::__construct();
			$this->dbConnect();
		}
		/**
		* Connect to Database
		*/
		private function dbConnect(){
			$this->mysqli = new mysqli(self::DB_SERVER, self::DB_USER, self::DB_PASSWORD, self::DB);
		}

		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['x'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);
		}

		private function kms(){	
			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$query="SELECT * FROM tbl_kms where status = 1";
			$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);

			if($r->num_rows > 0){
				$result = array();
				while($row = $r->fetch_assoc()){
					$result[] = $row;
				}
				$this->response($this->json($result), 200);
			}
			$this->response('',204);
		}

		private function login(){

			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$username = $this->_request['username'];
			$password = $this->_request['password'];
			if($username != ''){
				$query = "SELECT * FROM tbl_user where username=$username";
				$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
				if($r->num_rows > 0){
					$result = $r->fetch_assoc();
					$valid = password_verify($password,$result['password']);
					if ($valid) {
						$this->response($this->json($result),200);
					}else{
						die("Error Bro :v");
					}
				}
			}
			$this->response('',204);
		}

		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}

	$api = new API;
	$api->processApi();
 ?>
<?php
	
	class session{
		
	public static function init(){
		 if (version_compare(phpversion(), '5.4.0', '<')) {
		 	if(session_id()==''){ 
		 		
		 		session_start();//echo 'session id blank';
		 	}
		 	}else {
		 		if (session_status()==PHP_SESSION_NONE){
		 			session_start();
		 			//echo 'session none';exit;
		 			
		 		}
		 	}
		 	
		 }

		 public static function set($key, $val){
		 	//echo $key.'--'.$val;exit;
		 	$_SESSION[$key] = $val;
		 }
		 public static function get($key){
		 	if(isset($_SESSION[$key])){
		 		return $_SESSION[$key];
		 	}else{
		 		return false;
		 	}
		 }

		 public static function destroy(){
		 	session_destroy();
		 	session_unset();
		 	header("location:index.php");
		 }
	}



?>
<?php
	include 'database.php';
	 include_once'session.php';
	 session::init();
	

	class User{
		private $db;
		private $id;
		public function __construct()
		{
			$this->db= new Database();
		}

		public function missingInsert($data){
			
			$mname=$data['mname'];
			$status=$data['status'];
			$ddate=$data['ddate'];
			$description=$data['description'];
			$lastplace=$data['lastplace'];
			$contact_add=$data['contact_add'];
			$folder="image/";
			$file=$folder.basename($_FILES["image"]["name"]);

			move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			$mphone=$data['mphone'];
			//session get log in id
			$id=session::get("id");
	        //$id=$data['id'];
	   	
			$sql= "INSERT INTO tbl_mfi (mname, status, ddate, description, lastplace,contact_add,img,mphone,id) VALUES(:mname, :status, :ddate, :description, :lastplace,:contact_add,:file,:mphone,:id)";
			$query= $this->db->pdo->prepare($sql);
			$query->bindValue(':mname',$mname);
			$query->bindValue(':status',$status);
			$query->bindValue(':ddate',$ddate); 
			$query->bindValue(':description',$description);
			$query->bindValue(':lastplace',$lastplace);
			$query->bindValue(':contact_add',$contact_add);
			$query->bindValue(':file',$file);
			$query->bindValue(':mphone',$mphone);
			$query->bindValue(':id',$id);
			$result=$query->execute();

			if ($result) {
				$msg="<div class='alert alert-success'><strong>Success</strong> Thank you, Your data has been added</div>";
				header("Location: missing_subject.php");
				return $msg;
				# code...
			}else {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>Sorry ! there has been problem inserting data</div>";
				return $msg;
			}


		}


// registration insertation

		public function userRegistration($data){
			$rname=$data['rname'];
			$remail=$data['remail'];
			$rpsw=md5($data['rpsw']);
			$chk_email=$this->emailCheck($remail);
			if ($rname==""  OR $remail=="" OR $rpsw=="") {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>Field Must Not Be Empty</div>";
				return $msg;
			}

			if (filter_var($remail, FILTER_VALIDATE_EMAIL)===false) {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>The Email Adress is not Valid !</div>";
				return $msg;
			}
			if ($chk_email==true) {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>The Email Address already exist!</div>";
				return $msg;	
			}

		$sql= "INSERT INTO tbl_rgs (rname, rpsw, remail) VALUES(:rname, :rpsw, :remail)";
		$query= $this->db->pdo->prepare($sql);
		$query->bindValue(':rname',$rname);
		
		$query->bindValue(':rpsw',$rpsw);
		$query->bindValue(':remail',$remail);
		
		$result=$query->execute();

		if ($result) {
				$msg="<div class='alert alert-success'><strong>Success </strong>Thank you, You have been registered,please log in</div>";
				header("Location:login.php");
				return $msg;
				
				# code...
			}else {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>Sorry ! there has been problem inserting field</div>";
				return $msg;
			}


		}


///send Message
public function userMessage($data,$toId){
			$rgs_id=$toId;
			$contactEmail=$data['memail'];
  			$cAddress=$data['address'];
  			$cMessage=$data['message'];
			echo $contactEmail.$cAddress.$cMessage.$rgs_id;
			/*if ($rname==""  OR $remail=="" OR $rpsw=="") {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>Field Must Not Be Empty</div>";
				return $msg;
			}*/

			if (filter_var($contactEmail, FILTER_VALIDATE_EMAIL)===false) {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>The Email Adress is not Valid !</div>";
				return $msg;
			}
			/*if ($chk_email==true) {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>The Email Address already exist!</div>";
				return $msg;	
			}*/

		$sql= "INSERT INTO tbl_msg (rgs_id, contactEmail, cAddress, cMessage) VALUES(:rgs_id, :contactEmail, :cAddress, :cMessage)";
		$query= $this->db->pdo->prepare($sql);
		$query->bindValue(':rgs_id',$rgs_id);
		$query->bindValue(':contactEmail',$contactEmail);
		
		$query->bindValue(':cAddress',$cAddress);
		$query->bindValue(':cMessage',$cMessage);
		
		$result=$query->execute();

		if ($result) {
				$msg="<div class='alert alert-success'><strong>Success </strong>Thank you, You have been registered,please log in</div>";
				header("Location:missing_subject.php");
				return $msg;
				
				# code...
			}else {
				$msg="<div class='alert alert-danger'><strong>Error !</strong>Sorry ! there has been problem inserting field</div>";
				return $msg;
			}


		}




// double emaail check
		public function emailCheck($remail){
			$sql="SELECT remail FROM tbl_rgs WHERE remail= :remail";
			$query= $this->db->pdo->prepare($sql);
			$query->bindValue(':remail',$remail);
			$query->execute();
			if ($query->rowCount()>0) {
				return true;
				# code...
			}else{
				return false; 
			}
		}


//session
		public function getLoginUser($remail,$rpsw){
			$rpsw = md5($rpsw);
			$sql="SELECT * FROM tbl_rgs WHERE remail= :remail";
			$query= $this->db->pdo->prepare($sql);
			$query->bindValue(':remail',$remail);
			//$query->bindValue(':rpsw',$rpsw);
			$query->execute();
			$result=$query->fetch(PDO::FETCH_OBJ);
			return $result; 
		}

		public function userLogin($data){

			$remail=$data['remail'];
			$rpsw=md5($data['rpsw']);


			$result= $this->getLoginUser($remail, $rpsw);
			if($result){
				session::init();
				session::set("login",true);
				session::set("id",$result->id);
				session::set("rname",$result->rname);
				session::set("remail",$result->remail);
				
				session::set("loginmsg","<div class='alert alert-success'><strong>Success </strong>You are Loged In !</div>");
				header("Location: missing_subject.php");
			}else{
				$msg="<div class='alert alert-danger'><strong>Error !</strong> Username or Password Incorrect!</div>";
				return $msg;
			}

		}

	        
	        
//static/
public function getUserData(){
			$id=session::get("id");
	$sql="SELECT * FROM tbl_mfi order by mid desc"; //where tbl_rgs.id=$id
	//echo $sql; exit;
	//$sql="SELECT * FROM tbl_rgs left join tbl_mfi on tbl_rgs.id=tbl_mfi.id order by tbl_rgs.id desc";
			$query= $this->db->pdo->prepare($sql);
			$query->execute();
			$result=$query->fetchAll();
				return $result;

}
public function getMsgData($id){
			
	$sql="SELECT * FROM tbl_rgs where id='$id'"; //where tbl_rgs.id=$id
	//echo $sql; exit;
	//$sql="SELECT * FROM tbl_rgs left join tbl_mfi on tbl_rgs.id=tbl_mfi.id order by tbl_rgs.id desc";
			$query= $this->db->pdo->prepare($sql);
			$query->execute();
			$result=$query->fetchAll();
				return $result;

}
public function getMsg(){
	$id=session::get("id");
			
	$sql="SELECT * FROM tbl_msg where rgs_id=$id"; //where tbl_rgs.id=$id
	//echo $sql; exit;
	//$sql="SELECT * FROM tbl_rgs left join tbl_mfi on tbl_rgs.id=tbl_mfi.id order by tbl_rgs.id desc";
			$query= $this->db->pdo->prepare($sql);
			$query->execute();
			$result=$query->fetchAll();
				return $result;

}

public function getSearchData($searchname){
			
	 $sql="SELECT * FROM tbl_mfi where mname LIKE '%$searchname%'"; //where tbl_rgs.id=$id
	//echo $sql; exit;
	//$sql="SELECT * FROM tbl_rgs left join tbl_mfi on tbl_rgs.id=tbl_mfi.id order by tbl_rgs.id desc";
			$query= $this->db->pdo->prepare($sql);
			$query->execute();
			$result=$query->fetchAll();
				return $result;

}

public function getUserProfile(){
			$id=session::get("id");
	      	/*if (isset($id)) {
	        echo "its user id = ".$id;}*/

	        $sql="SELECT * FROM tbl_mfi where id=$id";

	//$sql="SELECT * FROM tbl_rgs left join tbl_mfi on tbl_rgs.id=tbl_mfi.id where tbl_rgs.id=$id";
			$query= $this->db->pdo->prepare($sql);
			    $query->execute();
			$result=$query->fetchAll();
				return $result;


}





	

}
  ?>
<?php 

class User{

	static public function login($data){
		$email = $data['email'];
		try{
			$query = 'SELECT * FROM users WHERE email=:email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,
		
		));
			
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (fullname,email,phone,psd )
			VALUES (:fullname,:email,:phone,:psd)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':phone',$data['phone']);
		$stmt->bindParam(':psd',$data['psd']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

}

 ?>
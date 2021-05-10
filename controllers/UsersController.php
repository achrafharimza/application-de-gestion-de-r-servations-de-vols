<?php 

class UsersController {



public function getAllUsers(){
		$users = User::getAll();
		return $users;
	}



public function deleteUser(){
		if(isset($_POST['idc'])){
			$data['idc'] = $_POST['idc'];
			$result = User::delete($data);
			if($result === 'ok'){
				Session::set('success','user Supprimé');
				Redirect::to('users');
			}else{
				echo $result;
			}
		}
	}




	public function auth(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			$data['psd'] = $_POST['psd'];
			$data['user_type']=$_POST['user_type'];
			$result = User::login($data);
			if($result->email === $_POST['email'] && $result->psd === $_POST['psd'] && $_POST['user_type']=='Customer'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['idc'] = $result->idc;
				$_SESSION['user_type'] ='Customer';
			
				
				Redirect::to('home');

			}
			else if($result->email === $_POST['email'] && $result->psd === $_POST['psd'] && $_POST['user_type']=='Administrator'){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['id'] = $result->id;
				$_SESSION['user_type'] ='Administrator';
			
				
				Redirect::to('dashbord');

			}
			
			else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('login');
			}
		}
	}

	public function register(){
		if(isset($_POST['submit'])){
			
		
			$data = array(
				'fullname' => $_POST['fullname'],
				'email' => $_POST['email'],
				'phone' => $_POST['phone'],
				'psd' => $_POST['psd'],
			);
			$result = User::createUser($data);
			if($result === 'ok'){
				Session::set('success','Compte crée');
				Redirect::to('login');
			}else{
				echo $result;
			}
		}
	}

	static public function logout(){
		session_destroy();
	}
public function updateUser(){
		if(isset($_POST['submit'])){
			$data = array(
				'idc' => $_SESSION['idc'] ,
				'fullname' => $_POST['fullname'],
				'email' => $_POST['email'],
				
				'phone' => $_POST['phone'],
				'psd' => $_POST['psd'],
				
			);
			$result = User::update($data);
			if($result === 'ok'){
				Session::set('success','Employé Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

public function getOneUser(){
		
			$data = array(
				'idc' => $_SESSION['idc'] ,
			);
			$user = User::getUser($data);
			return $user;
		
	}






}

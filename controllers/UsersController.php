<?php 

class UsersController {

	public function auth(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			$data['psd'] = $_POST['psd'];
			$result = User::login($data);
			if($result->email === $_POST['email'] && $result->psd === $_POST['psd']){

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['fullname'] = $result->fullname;
				$_SESSION['idc'] = $result->idc;
			
				
				Redirect::to('home');

			}else{
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


}

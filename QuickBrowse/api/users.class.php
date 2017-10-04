<?php
	
class Users {
	
	//Create new object on login.
	//Remove object when logged out.
	
	public function login($email, $password){
		
		global $DISPLAY;
		global $CONFIG;
		
		$data = $DISPLAY::get_data_array('users');
		
		foreach($data as $row){
			
			if($row['email'] == $email){
				
				if($row['password'] == $password){
					
					//SAVE ALL SESSIONS
					$_SESSION['user_is_logged_in'] = true;
					self::update_user_sessions($row['id'], $row['name'], $row['password'], $row['email'], $row['permission_id'], $row['role_id'] );
					
				}else{
					
					//PASSWORD WAS INCORRECT
					return;
					
				}
				
			}
			
		}
		
	}
	
	public function update_user_sessions($id, $name, $password, $email, $permission_id, $role_id){
		
		$_SESSION['user_id'] = $id;
		
		$_SESSION['user_name'] = $name;
		$_SESSION['user_password'] = $password;
		$_SESSION['user_email'] = $email;
		
		$_SESSION['user_permission'] = $permission_id;
		$_SESSION['user_role'] = $role_id;
		
	}
	
	public function logout(){
		
		global $CONFIG;
		
		$_SESSION['user_is_logged_in'] = false;
		
		$_SESSION['user_id'] = "";
		
		$_SESSION['user_name'] = "";
		$_SESSION['user_password'] = "";
		$_SESSION['user_email'] = "";
		
		$_SESSION['user_permission'] = "";
		$_SESSION['user_role'] = "";
		
	}
	
}
	
?>
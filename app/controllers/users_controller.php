<?php
class UsersController extends AppController {
	var $name = 'Users';
	var $helpers = array("Html");
	var $component = array("Session");
		// var $component = array('Auth'); //Not necessary if declared in your app controller

	// function beforeFilter() {
	// 	$this->Auth->fields = array(
	// 		'username' => 'username',
	// 		'password' => 'secretword'
	// 		);
	// }

	function login() {
		$error="";
		if(isset($_POST['ok'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($this->User->checkLogin($username,$password)) {
			        $this->Session->write("session",$username); //ghi session
			        $this->redirect("/");//đăng nhập thành công chuyển trang thông tin
			}else{
				$error = "Tên đăng nhập và mật khẩu không đúng";
			}
		}
		$this->set("error",$error);
	}

	function info() {
	    if($this->Session->check("session")){//kiểm tra có session hay không
	      	$username = $this->Session->read('session');
	      	$this->set("name", $username);
	      	// $this->setFlash('Chúc mừng bạn đã đăng nhập thành công !');
	    }else{
	      	$this->render("login");
	    }
	}

	function logout() {
			$this->Session->delete('session'); //xóa session
		  	$this->redirect('/');
	}
}
?>
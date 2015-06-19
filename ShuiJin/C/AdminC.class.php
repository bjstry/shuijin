<?php
class AdminC extends C{
	public function Index(){
		echo '欢迎访问后台管理界面!';
	}
	public function Login(){
		$this->display();
	}
	public function LoginCheck(){
		print_r($_POST);
	}
}
?>

<?php
class AdminC extends C{
	public function Index(){
		if(VerifySession($_SESSION['ukey'],'admin')){
			echo '欢迎访问后台管理界面!<br>';
			$db = SQ('shuijin');
			$ret = $db->query('select * from sj_product_list');
			while($row = $ret->fetchArray(SQLITE3_ASSOC)){
				$row_arr[] = $row;
			}
			$this->display();	
		}else{
			echo "请先<a href='".URL."/login'>登录</a>！";
		}
	}
	public function Login(){
		$this->display();
	}
	public function Logout(){
		session('ukey','null');
		echo "注销成功,<a href='".URL."/index'>点击</a>返回";
	}
	public function LoginCheck(){
		if(isset($_POST['login_sub'])){
			$db = SQ('shuijin');
			$user = $_POST['uname'];
			$pass = md5($_POST['upass']);
			$userinfo = $db->query("select * from sj_user where uname='$user'");
			$row = $userinfo->fetchArray(SQLITE3_ASSOC);
			if(!empty($row) && $row){
				if($pass == $row['upass']){
					session('ukey','admin');
					echo 'login successs!';
					echo "<a href='".URL."/index'>点击</a>跳转到主页!";
				}else{
					exit('密码错误');
				}
			}else{
				exit('用户名不正确!');
			}
		}else{
			echo '非法访问！';
			exit();
		}
	}
	public function AddCheck(){
		$ext = null;
		$directory = 'images/';
		if(VerifySession(session('ukey'),'admin')){
			if(!empty($_POST['add'])){
				if($_FILES['file']['error'] > 0){
					echo 'Error: '.$_FILES['file']['error'].'<br>';
				}else{
					if(($_FILES['file']['size']/1024) > 800){
						exit('File size too big!');
					}
					if($_FILES['file']['type'] !== 'image/jpeg' and $_FILES['file']['type'] !== 'image/png'){
						exit('File type not match!');
					}
					if($_FILES['file']['type'] !== 'image/jpeg'){
						$ext = '.jpg';
					}else{
						$ext = '.png';
					}
					echo 'Upload: '.$_FILES['file']['name'].'<br>';
					echo 'Stored in: '.$_FILES['file']['tmp_name'].'<br>';
					if(file_exists($directory.$_POST['number'].$ext)){
						echo $_POST['number'].$ext.'already exists.';
					}else{
						$db = SQ('shuijin');
						$img_url = $directory.$_POST['number'].$ext;
						$sql = "insert into sj_product_list (id,img_url,name,number,price,link) values (?,'$img_url','$_POST[name]',$_POST[number],$_POST[price],'$_POST[link]')";
						$verify = $db->query("select name from sj_product_list where name='$_POST[name]'");
						if($verify->fetchArray()){
							echo "<script>alert('该图片已存在!');</script>";
							echo "<script>history.go(-1)</script>";
							exit();
						}
						$ret = $db->exec($sql);
						if($ret){
							move_uploaded_file($_FILES['file']['tmp_name'],$directory.$_POST['number'].$ext);
							echo 'Stored in: '.$directory.$_POST['number'].$ext.'<br>';
							echo "添加成功!<a href='".URL."/index'>点击</a>";
						}else{
							echo "<script>alert($db->lastErrorMsg());<script>";
						}
					}
				}
			}else{
				echo '参数不正确!';
			}
		}else{
			echo '非法访问!';
		}
	}
}
?>

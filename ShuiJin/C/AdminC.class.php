<?php
class AdminC extends C{
	public function Index(){
		if(VerifySession($_SESSION['ukey'],'admin')){
			echo '欢迎访问后台管理界面!';
			$this->display();	
		}else{
			echo "请先<a href='login'>登录</a>！";
		}
	}
	public function Login(){
		$this->display();
	}
	public function Logout(){
		session('ukey','null');
		echo "注销成功,<a href='index'>点击</a>返回";
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
					echo "<a href='index'>点击</a>跳转到主页!";
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
					echo 'Upload: '.$_FILES['file']['name'].'<br>';
					echo 'Stored in: '.$_FILES['file']['tmp_name'];
					if(file_exists('images/'.$_POST['name'])){
						echo $_POST['name'].'already exists.';
					}else{
						$db = SQ('shuijin');
						$sql = "insert into sj_product_list (id,img_url,name,price,link) values (?,'images/$_POST[name]','$_POST[name]',$_POST['price'],'$_POST[link]')";
						$verify = $db->query("select name from sj_product_list where name='$_POST[name]'");
						if($verify->fetchArray()){
							print_r($verify);
							echo "<script>alert('该图片已存在!');</script>";
							echo "<script>history.go(-1)</script>";
							exit();
						}
						$ret = $db-exec($sql);
						if($ret){
							move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$_POST['name']);
							echo 'Stored in: '.'upload/'.$_POST['name'];
							echo '添加成功!';
						}else{
							echo "<script>alert($db->lastErrorMsg());<script>";
						}
					}
					print_r($_POST);
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

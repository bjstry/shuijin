<?php
class InstallC extends C{
	public function Index(){
		$this->display();
	}
	public function Install(){
		!empty($_POST['install']) or die('非法操作');
		is_file(ROOT.'install.lok')?$install=false:$install=true;
		if($install){
			$sql =<<<EOF
			create table if not exists user(
				id integer primary key autoincrement,
				uname varchar(30) not null,
				upass varchar(60) not null
			);
EOF;
			$pass = md5($_POST['upass']);
			$usersql =<<<EOF
			insert into user (id,uname,upass) values ('',"$_POST[uname]","$pass");
EOF;
			$db = SQ('shuijin');
			$db->exec($sql) or die('Create: '.$db->lastErrorMsg());
			$db->query($usersql) or die('Insert: '.$db->lastErrorMsg());
			echo "安装完成，请<a href='ROOT'>点击跳转</a>到主页!";
		}else{
			die('请勿重复安装！');
		}
	}
}
?>

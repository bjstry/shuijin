<?php
class InstallC extends C{
	public function Index(){
		if(file_exists('install.lok') == 1){
			die('请勿重复安装!');
		}
		$this->display();
	}
	public function Install(){
		$install = false;
		!empty($_POST['install']) or die('非法操作');
		if(file_exists('install.lok')){
			$install = false;
		}else{
			$install = true;
		}
		if($install){
			$creat_product_sql =<<<EOF
			create table if not exists sj_product_list(
				id integer primary key autoincrement,
				img_url varchar(60) not null,
				name varchar(30) not null,
				number int(10) not null,
				price int(10) not null,
				link varchar(60) not null
			);
EOF;
			$creat_user_sql =<<<EOF
			create table if not exists sj_user(
				id integer primary key autoincrement,
				uname varchar(30) not null,
				upass varchar(60) not null
			);
EOF;
			$pass = md5($_POST['upass']);
			$set_user_sql =<<<EOF
			insert into sj_user (id,uname,upass) values (?,"$_POST[uname]","$pass");
EOF;
			$db = SQ('shuijin');
			$db->exec($creat_product_sql) or die('Create: '.$db->lastErrorMsg());
			$db->exec($creat_user_sql) or die('Create: '.$db->lastErrorMsg());
			$db->query($set_user_sql) or die('Insert: '.$db->lastErrorMsg());
			$installed = fopen("install.lok",'w') or die("写入文件失败!");
			fclose($installed);
			echo "安装完成，请<a href=".ROOT.">点击跳转</a>到主页!";
		}else{
			die('请勿重复安装！');
		}
	}
}
?>

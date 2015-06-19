<?php
class IndexC extends C{
    public function Index(){
		$product_type = array('吊坠','手链','戒指','时尚水晶','吉祥配饰','海洋之心特色水晶');
		$product_theme = array('长挂连','畅销','华丽','颈链','套装','心型');
		$product_price = array('< 1250','1250-1499','1500-2499','2500-2999','3000-3999','>=4000');
		$product = array(
			array('img_url'=>'images/1.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/2.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/3.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/4.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/5.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/6.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/7.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/8.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/9.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/10.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/11.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
			array('img_url'=>'images/12.jpg','name'=>'Cardinal 项链','price'=>'3000','link'=>'#'),
		);
		$title = '某某水晶';
		$this->assign('title',$title);
		$this->assign('product_type',$product_type);
		$this->assign('product_theme',$product_theme);
		$this->assign('product_price',$product_price);
		$this->assign('product',$product);
		$this->display();
    }   
}
?>

<?php
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');

addDiy();

function addDiy(){
	if($_SESSION['user_id']!==0){
		$name=$_POST['name'];
		$tel=$_POST['tel'];
		$text=$_POST['text'];
		$need=$_POST['need'];
		$carType=$_POST['carType'];
		$fault_name=$_POST['fault_name'];
		$user_id=$_SESSION['user_id'];
		$add_time=time();
		$sql="INSERT INTO".$GLOBALS['ecs']->table('fault_diy')."(name,tel,text,cartype,need,user_id,fault_name,add_time)value('$name','$tel','$text','$carType','$need','$user_id','$fault_name','$add_time')";
		$result=$GLOBALS['db']->query($sql);
		if($result){
			echo '您的需求已提交，工作人员将马上与您联系！';
		}
	}
	else{
		echo '需要登陆后才可提交自定义套餐，请注册或登陆！';
	}
}
?>
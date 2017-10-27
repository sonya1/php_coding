<?php
	header("Content-type:text/plain;charset=utf-8");

	$staff = array(
		array("name" => "洪七", "number" => "101", "sex" => "男", "job" => "总经理"),
		array("name" => "郭靖", "number" => "102", "sex" => "男", "job" => "开发工程师"),
		array("name" => "黄蓉", "number" => "103", "sex" => "女", "job" => "产品经理")	
	);

	

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		search();
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		create();
	}

	function search(){
		$number = $_GET["number"];
		$result = "没有找到员工。";

		if(!isset($number) || empty($number) ){
			echo "参数错误";
			return;
		}
		global $staff;

		foreach ($staff as $key=>$value) {
			if($value["number"] === $number){
				$result = "找到员工：员工编号：" . $value["number"] . "，员工姓名：" . $value["name"] . 
			                  "，员工性别：" . $value["sex"] . "，员工职位：" . $value["job"];
			    break;
			}
		}
		echo $result;
	}

	function create(){
		$name = $_POST["name"];
		$id = $_POST["id"];
		$sex = $_POST["sex"];
		$job = $_POST["job"];

		if(!isset($name) || !isset($id) || !isset($sex) || !isset($job) 
			|| empty($name) || empty($id)|| empty($sex)|| empty($job) ){
			echo "参数错误，员工信息填写不全";
			return ;
		}

		//TODO: 获取POST表单数据并保存到数据库
		
		//提示保存成功
		echo "员工：" . $name . " 信息保存成功！";

	}

?>
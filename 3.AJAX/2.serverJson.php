<?php
	header("Content-type:text/plain;charset=utf-8");
	/*header('Access-Control-Allow-Origin:*');
	header('Access-Control-Allow-Methods:POST,GET');
	header('Access-Control-Allow-Credentials:true'); 
	header("Content-Type: application/json;charset=utf-8"); */

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
		$result = '{"success":false,"msg":"没有找到员工。"}';  //返回JSON

		if(!isset($number) || empty($number) ){
			echo '{"success":false,"msg":"参数错误。"}'; 
			return;
		}
		global $staff;

		foreach ($staff as $key=>$value) {
			if($value["number"] === $number){
				$result = '{"success":true,
							"msg":"找到员工：员工编号:' .$value["number"] . '，员工姓名：'. $value["name"] . 
			                  '，员工性别：'. $value["sex"] . '，员工职位：' . $value["job"] .'"
			               }'; 
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
			echo '{"success":false,"msg":"参数错误，员工信息填写不全"}'; 
			return ;
		}

		//TODO: 获取POST表单数据并保存到数据库
		
		//提示保存成功
		echo '{"success":true,
				"msg":"员工：'.$name.' 信息保存成功！"}';

	}

	/*function create(){
		//判断信息是否填写完全
		if (!isset($_POST["name"]) || empty($_POST["name"])
			|| !isset($_POST["number"]) || empty($_POST["number"])
			|| !isset($_POST["sex"]) || empty($_POST["sex"])
			|| !isset($_POST["job"]) || empty($_POST["job"])) {
			echo '{"success":false,"msg":"参数错误，员工信息填写不全"}';
			return;
		}
		//TODO: 获取POST表单数据并保存到数据库
		
		//提示保存成功
		echo '{"success":true,"msg":"员工：' . $_POST["name"] . ' 信息保存成功！"}';
	}*/

?>
<?php
include 'Utils/General.php';
Class Video{
	function testApi(){
		$params["app_id"]=General::$appId;
		$params["app_secret"]=General::$app_secret;
		$url=General::buildUrl("test",$params);
		$result=General::CallAPI("GET",$url);
		return json_decode($result);
		
	}
	function listCategories(){
		$params["app_id"]=General::$appId;
		$params["app_secret"]=General::$app_secret;
		$params["signature"]=General::buildSignuture($params);
		$url=General::buildUrl("categories",$params);
		$result=General::CallAPI("GET",$url);
		$resultAsArr=json_decode($result,true);
		$data=$resultAsArr["data"];
		return $data;
	}
	function listVideos($category,$page=1,$limit=10){
		$params["category"]=$category;
		$params["page"]=$page;
		$params["limit"]=$limit;
		$params["app_id"]=General::$appId;
		$params["app_secret"]=General::$app_secret;
		$params["signature"]=General::buildSignuture($params);
		$url=General::buildUrl("posts",$params);
		$result=General::CallAPI("GET",$url);
		$resultAsArr=json_decode($result,true);
		$data=$resultAsArr["data"];
		return $data;
	}
}
?>
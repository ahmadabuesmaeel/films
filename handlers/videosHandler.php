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
	function listVideos($category,$page=1,$limit=9){
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
	function getTotal($category){
		$params["category"]=$category;
		$params["page"]=1;
		$params["limit"]=9;
		$params["app_id"]=General::$appId;
		$params["app_secret"]=General::$app_secret;
		$params["signature"]=General::buildSignuture($params);
		$url=General::buildUrl("posts",$params);
		$result=General::CallAPI("GET",$url);
		$resultAsArr=json_decode($result,true);
		
		return $resultAsArr["meta"]["total"];
	}
	function addthumbnil($data){
		$data1;
		foreach($data as $post){
			$post["img"]=$post["media"][0]["url"];
			$data1[]=$post;
		}
		return $data1;
	}
	}
?>
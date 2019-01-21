<?php
Class General{
	public static $appId="14378174";
	public static $app_secret="cFJiGxZVTGf3rPNMK1o08WQWWpnr8M9RmZOyGxcM";
	public static $hash_key="diBIGrtVCAH00GtMVLupirbNdFEjooqk8YPJUtUw";
	public static $base_url="http://stg.api.fawasell.com/v1/";
	
	static function CallAPI($method, $url, $data = false)
	{
		$curl = curl_init();

		switch ($method)
		{
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);

				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_PUT, 1);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($curl);

		curl_close($curl);

		return $result;
	}
	static function buildSignuture($params){
		$signutureIn="";
		foreach ($params as $key => $value) {
			$signutureIn=$signutureIn.$value;
		}
		$signutureIn=$signutureIn.General::$hash_key;
		$signuture=md5($signutureIn);
		return $signuture;
	}
	static function buildUrl($method,$params){
		$url=General::$base_url.$method;
		if($params!=null && sizeof($params)>0)
			$url=$url."?";
		foreach ($params as $key => $value) {
			$url=$url.$key."=".$value."&";
		}
		$url=substr($url, 0, -1);
		return $url;
		
	}
}

?>
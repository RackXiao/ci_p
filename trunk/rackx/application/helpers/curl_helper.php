<?php 

function curl_get($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

/**
 * 
 * Enter description here ...
 * @param str $url
 * @param ary $ary_post_data
 * @param int $mode	0:simple mode; 1:advance mode
 */
function curl_post($url,$ary_post_data,$mode=0) {
	$ch = curl_init();
	
	if($mode==0){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true); // 啟用POST
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $ary_post_data )); 
	}else if ($mode==1) {
		//"userfile"=>"@C:/XXX/OOO/oxox.doc",
		//檔案若和程式在同一目錄或相對目錄, 可以用getcwd(), 如:
		// "userfile"=>"@".getcwd()."/oxox.doc",
		// 另外還可以在檔名後面加上分號指定mimetype(較新版的PHP才能使用)
		// (預設的 mimetype 為application/octet-stream)
		// "userfile"=>"@".getcwd()."\\somePic.png;type=image/png"
		$options = array(
			CURLOPT_URL=>$url,
			CURLOPT_HEADER=>0,
			CURLOPT_VERBOSE=>0,
			CURLOPT_RETURNTRANSFER=>true,
			CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
			CURLOPT_POST=>true,
			CURLOPT_POSTFIELDS=>http_build_query($ary_post_data),
		);
		curl_setopt_array($ch, $options);
		// CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
		// false 時只回傳成功與否
	}
	
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

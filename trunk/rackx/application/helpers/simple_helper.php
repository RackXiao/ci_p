<?php 

function b($num=1) {
	for($i=0;$i<$num;$i++) {
		echo "<br /> \r\n";
	}
}

/**
 * var_dump 的縮簡版
 * @param data $data
 * @param int[option] $ln 輸出幾個BR [default=1]
 */
function v($data,$ln=1){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	b($ln);
}

/**
 * 不存在值回傳空字串
 * @param value|null $value
 */
function nv($value){
	if(!empty($value)){
		return $value;
	}
	return '';
}

//function redirect($url){
//	header("Location: {$url}") ;
//}
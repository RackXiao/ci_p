<?php 
function table($rowData, $field){
	echo "<table>";
	row($field, true);
	foreach($rowData as $row) {
		row($row);
	}
	echo "</table>";
}

function row($row, $is_title=false){
	echo "<tr>";
	foreach($row as $value){
		echo ($is_title==false) ? "<td>" : "<th>";
		echo $value;
		echo ($is_title==false) ? "</td>" : "</th>";
	}
	//其他外加
	echo ($is_title==false) ? "<td>" : "<th>";
	echo ($is_title==false) ? "<a href=\"form.php?id={$row["id"]}\">編輯</a> | <a href=\"delete.php?id={$row["id"]}\">刪除</a>" : "操作";
	echo ($is_title==false) ? "</td>" : "</th>";
	
	echo "</tr>\r\n";
}

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

function redirect($url){
	header("Location: {$url}") ;
}
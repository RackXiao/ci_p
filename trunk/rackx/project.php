<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta content="no-cache" http-equiv="Cache-Control" />
<meta content="no-cache" http-equiv="Pragma" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

<style>
body {
/* 	background-image:url('http://images.andenhud.com/ryan/index/bg.jpg'); */
    margin: 20px;
	padding: 0;
	font-family: Verdana, Geneva, sans-serif;
	position: relative;
}

table {
	margin: auto 100px;
	width: 80%; 
}

th {
	width: 10px;
}

td {
	padding: 10px 20px;
}

td.title {
	width: 80px;
}

.js_set {
	cursor: pointer;
}

div.unit {
	padding: 5px;
}

div.child {
	padding-left: 50px;
}

span {
	float: right;
}
</style>
<title>專案列表</title>
</head>
<?php $dataList = getContent(); ?>
<body>
<h1 align="center">專案列表</h1>
<?php $count = 1; ?>

<table>
<?php foreach ($dataList as $data): ?>
<!--
	<tr id="js_set<?php echo $count?>" class="js_set" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th><?php echo "$count."?></th><td class="title">專案名稱：</td><td><?php echo $data['name'].$data['during'] ?></td>
	</tr>
	<tr class="row_set js_set<?php echo $count?>" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th></th><td>專案人數：</td><td><?php echo $data['people'] ?></td>
	</tr>
	<tr class="row_set js_set<?php echo $count?>" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th></th><td>專案角色：</td><td><?php echo $data['role'] ?></td>
	</tr>
	<tr class="row_set js_set<?php echo $count?>" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th></th><td>使用技術：</td><td><?php echo $data['tech'] ?></td>
	</tr>
	<tr class="row_set js_set<?php echo $count?>" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th></th><td>作業環境：</td><td><?php echo $data['env'] ?></td>
	</tr>
	<tr class="row_set js_set<?php echo $count?>" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th></th><td>專案概述：</td><td><?php echo $data['description'] ?></td>
	</tr>
	<tr class="row_set js_set<?php echo $count?>" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th></th><td>工作內容：</td><td><?php echo $data['work'] ?></td>
	</tr>-->
	
	
	<tr id="js_set<?php echo $count?>" class="js_set" style="background-color: <?php echo ($count%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<th>
			<?php echo "$count."?>
			<div class="row_set js_set<?php echo $count?>">
				<?php for($i=0;$i<6;$i++) {?><div class="unit">&nbsp;</div><?php } ?>
			</div>
		</th>
		<td class="title">
			<div class="unit">專案名稱：<?php echo $data['name'].str_repeat('&nbsp;',4)."<span>".$data['during']."</span>" ?></div>
			<div class="row_set js_set<?php echo $count?>">
				<div class="unit">專案人數：<?php echo $data['people'] ?></div>
				<div class="unit">專案角色：<?php echo $data['role'] ?></div>
				<div class="unit">專案技術：<?php echo $data['tech'] ?></div>
				<div class="unit">作業環境：<?php echo $data['env'] ?></div>
				<div class="unit">專案概述：<?php echo $data['description'] ?></div>
				<div class="unit">工作內容：<?php echo $data['work'] ?></div>
			</div>
		</td>
	</tr>
<!--	<tr>-->
<!--		<th>&nbsp;</th><td>&nbsp;</td><td>&nbsp;</td>-->
<!--	</tr>-->
<?php $count++ ?>
<?php endforeach; ?>
</table>

<!--
<ol style="list-style-type: decimal;">
<?php foreach ($dataList as $data): ?>
	<li style="background-color: <?php echo ($count++%2) ? '#bdedf9':'#f9f6a6' ?>;">
		<pre>
<?php echo $data; ?>
		</pre>
		<hr />
	</li>
<?php endforeach; ?>
</ol>
-->
<table>
	<tr>
		<th></th>
		<td>
			<div>其他未整理：</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<div class="child">頂尖寵物網 <a target="_blank" href="http://www.petland.com.tw">http://www.petland.com.tw</a>  [ 100/11 ~ 101/02 共計4個月 ]</div>
			<div class="child">天惠堂官網  [ 100/12 ~ 101/02 共計3個月 ]</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<div>工具：</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<div class="child">eclipse</div>
			<div class="child">Navicat</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<div>其他研究過的技術：</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<div class="child">RegExp</div>
			<div class="child">Amazon EC2</div>
			<div class="child">Apache Maven 2</div>
			<div class="child">MS SQL</div>
		</td>
	</tr>
</table>

<script>
var current_open;

$('.row_set').hide();

$.each($(".js_set"),function(){
	$(this).bind('click', function (){
		if(current_open != $(this).attr('id')){
			current_open = $(this).attr('id');
			$('.row_set').hide();
			$('.'+$(this).attr('id')).show();
		} else {
			current_open = '';
			$('.row_set').hide();
		}
	});
});
</script>

</body>
</html>

<?php 
function getContent() {
$ret = array();

$list = array();

array(
'name'=>'',
'during'=>'',
'people'=>'',
'role'=>'',
'tech'=>'',
'env'=>'Linux(Ubuntu)。',
'description'=>'',
'work'=>'',
);

$ret[]= <<< EOF
<b>專案名稱：MiniJudge <a target="_blank" href="http://www.ccunix.ccu.edu.tw/~lngproc/MiniJudgeJava2.htm">介紹網站</a>  [ 99/01 ~ 99/06 共計6個月 ]</b>
專案人數：4 (工程師:3)
專案角色：PG
使用技術：Java、SQLite、J2EE、GWT、Tomcat、Spring Framework、SVN、Test Case、Design Pattern、i18n、SMTP、R
作業環境：Linux(Ubuntu)。

專案概述：語言學研究，語言學實驗建置、線上問卷、問卷資料下載、問卷列印、問卷結果分析、多語執行。

工作內容：系統設計、Coding、Debug。
EOF;

$list[] = array(
'name'=>'MiniJudge <a target="_blank" href="http://www.ccunix.ccu.edu.tw/~lngproc/MiniJudgeJava2.htm">介紹網站</a>',
'during'=>'[ 99/01 ~ 99/06 共計6個月 ]',
'people'=>'4 (工程師:3)',
'role'=>'PG',
'tech'=>'Java、SQLite、J2EE、GWT、Tomcat、Spring Framework、SVN、Test Case、Design Pattern、i18n、SMTP、R',
'env'=>'Linux(Ubuntu)。',
'description'=>'語言學研究，語言學實驗建置、線上問卷、問卷資料下載、問卷列印、問卷結果分析、多語執行。',
'work'=>'系統設計、Coding、Debug。',
);

$ret[]= <<< EOF
<b>專案名稱：伊聖詩芳療生活館 <a target="_blank" href="http://www.escents.com.tw">http://www.escents.com.tw</a>  [ 99/03 ~ 101/02 共計24個月 ]</b>
專案人數：3 (工程師:2)
專案角色：PG
使用技術：PHP、MySQL、Javascript、Codeigniter、AJAX、jQuery、Java、SMTP、Postfix
作業環境：Linux(CentOS)。

專案概述：系統修改及維護，電子報寄送平台(<a target="_blank" href="http://ms03.qyoung.com.tw">http://ms03.qyoung.com.tw</a>)。

工作內容：需求分析、功能分析、Coding、Debug、環境架設、專案上線、專案及系統維護
EOF;

$list[] = array(
'name'=>'伊聖詩芳療生活館 <a target="_blank" href="http://www.escents.com.tw">http://www.escents.com.tw</a>',
'during'=>'[ 99/03 ~ 101/02 共計24個月 ]',
'people'=>'3 (工程師:2)',
'role'=>'PG',
'tech'=>'PHP、MySQL、Javascript、Codeigniter、AJAX、jQuery、Java、SMTP、Postfix',
'env'=>'Linux(Ubuntu)。',
'description'=>'系統修改及維護，電子報寄送平台(<a target="_blank" href="http://ms03.qyoung.com.tw">http://ms03.qyoung.com.tw</a>)。',
'work'=>'需求分析、功能分析、Coding、Debug、環境架設、專案上線、專案及系統維護',
);

$ret[]= <<< EOF
<b>專案名稱：PlayOne  [ 99/04 ~ 99/06 共計3個月 ]</b>
專案人數：3 (工程師:2)
專案角色：SA / SD / PG
使用技術：J2EE、MySQL、GWT、iBatis、Oval、Log4J
作業環境：Linux(CentOS)。

專案概述：針對運動的人設計的揪團網站，此為內部測試開發專案。

工作內容：專案管理、需求分析、功能分析、系統設計、Coding、Debug
EOF;

$list[] = array(
'name'=>'PlayOne',
'during'=>'[ 99/04 ~ 99/06 共計3個月 ]',
'people'=>'3 (工程師:2)',
'role'=>'SA / SD / PG',
'tech'=>'J2EE、MySQL、GWT、iBatis、Oval、Log4J',
'env'=>'Linux(Ubuntu)。',
'description'=>'針對運動的人設計的揪團網站，此為內部測試開發專案。',
'work'=>'專案管理、需求分析、功能分析、系統設計、Coding、Debug',
);

$ret[]= <<< EOF
<b>專案名稱：MyKickBacks <a target="_blank" href="http://www.mykickbacks.com">http://www.mykickbacks.com</a>  [ 99/05 ~ 99/11 共計7個月 ]</b>
專案人數：2 (工程師:1)
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、Facebook Api、Java、Sphinx搜尋引擎
作業環境：Linux(CentOS)。

專案概述：線上酬傭回饋購物網站，含酬傭提供商資料的轉換匯入排程。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;

$list[] = array(
'name'=>'MyKickBacks <a target="_blank" href="http://www.mykickbacks.com">http://www.mykickbacks.com</a>',
'during'=>'[ 99/05 ~ 99/11 共計7個月 ]',
'people'=>'2 (工程師:1)',
'role'=>'SA / SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、Facebook Api、Java、Sphinx搜尋引擎',
'env'=>'Linux(Ubuntu)。',
'description'=>'線上酬傭回饋購物網站，含酬傭提供商資料的轉換匯入排程。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線',
);

$ret[]= <<< EOF
<b>專案名稱：聯發科內部檔案交換系統  [ 99/05 ~ 101/02 共計22個月 ]</b>
專案人數：3 (工程師:2)
專案角色：SD / PG
使用技術：Visual C#、Windows server 2003、IIS、AD server
作業環境：Windows Server 2003。

專案概述：系統功能維護及增加新功能。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案及系統維護
EOF;

$list[] = array(
'name'=>'聯發科內部檔案交換系統',
'during'=>'[ 99/05 ~ 101/02 共計22個月 ]',
'people'=>'3 (工程師:2)',
'role'=>'SD / PG',
'tech'=>'Visual C#、Windows server 2003、IIS、AD server',
'env'=>'Linux(Ubuntu)。',
'description'=>'系統功能維護及增加新功能。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、專案及系統維護',
);

$ret[]= <<< EOF
<b>專案名稱：赫士盟人力資源網  [ 99/12 ~ 100/02 共計3個月 ]</b>
專案人數：4 (工程師:2)
專案角色：SA / SD / PG
使用技術：PHP、SQLite、Codeigniter、CAPTCHA、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：企業內部的人力資源網站。包含了一般使用者面試報名，個人資料管理；
　　　　　主管對應徵人員的面試結果處理；人資人員對企業內部應徵流程的管理，及面試人員錄用的管理；內部員工心理測驗的模組等。
測試網站： <a target="_blank" href="http://hr.hasmore.qyoung.com.tw">http://hr.hasmore.qyoung.com.tw</a>

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;

$list[] = array(
'name'=>'赫士盟人力資源網',
'during'=>'[ 99/12 ~ 100/02 共計3個月 ]',
'people'=>'4 (工程師:2)',
'role'=>'SA / SD / PG',
'tech'=>'PHP、SQLite、Codeigniter、CAPTCHA、AJAX、jQuery',
'env'=>'Linux(Ubuntu)。',
'description'=>'企業內部的人力資源網站。包含了一般使用者面試報名，個人資料管理；主管對應徵人員的面試結果處理；人資人員對企業內部應徵流程的管理，及面試人員錄用的管理；內部員工心理測驗的模組等。<br>測試網站： <a target="_blank" href="http://hr.hasmore.qyoung.com.tw">http://hr.hasmore.qyoung.com.tw</a>',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線',
);

$ret[]= <<< EOF
<b>專案名稱：Anden Hud(采定) <a target="_blank" href="http://www.andenhud.com">http://www.andenhud.com</a>  [ 99/8 ~ 101/02 共計19個月 ]</b>
專案人數：3 (工程師:2)
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery、SSL、Facebook Api、7-11物流服務、簡訊服務、聯合信用卡中心、玉山銀行eATM、中國信託信用卡、
　　　　　Java、Google分析器、shell script、其他行銷公司的app串接
作業環境：Linux(CentOS)。

專案概述：線上服飾購物網站。系統包含了產品展示，購物車，訂單處理流程，會員中心，電子報寄送，7-11的物流功能串接，線上金流(信用卡及線上ATM等功能)；
　　　　　並為該網站提供系統及資料備援機制。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線、專案及系統維護
EOF;

$list[] = array(
'name'=>'Anden Hud(采定) <a target="_blank" href="http://www.andenhud.com.tw">http://www.andenhud.com.tw</a>',
'during'=>'[ 99/8 ~ 101/02 共計19個月 ]',
'people'=>'3 (工程師:2)',
'role'=>'SA / SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、AJAX、jQuery、SSL、Facebook Api、7-11物流服務、簡訊服務、聯合信用卡中心、玉山銀行eATM、中國信託信用卡、Java、Google分析器、shell script、其他行銷公司的app串接',
'env'=>'Linux(Ubuntu)。',
'description'=>'線上服飾購物網站。系統包含了產品展示，購物車，訂單處理流程，會員中心，電子報寄送，7-11的物流功能串接，線上金流(信用卡及線上ATM等功能)；並為該網站提供系統及資料備援機制。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線、專案及系統維護',
);

$ret[]= <<< EOF
<b>專案名稱：新晨旅行社  <a target="_blank" href="http://yohotour.com.tw">http://yohotour.com.tw</a>  [ 99/11 ~ 101/02 共計16個月 ]</b>
專案人數：4 (工程師:2)
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：旅行社網站，提供企業及一般會員旅遊的線上報名。系統包含了各種不同形式的活動管理及線上報名。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線、專案及系統維護
EOF;

$list[] = array(
'name'=>'新晨旅行社  <a target="_blank" href="http://yohotour.com.tw">http://yohotour.com.tw</a>',
'during'=>'[ 99/11 ~ 101/02 共計16個月 ]',
'people'=>'4 (工程師:2)',
'role'=>'SA / SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、AJAX、jQuery',
'env'=>'Linux(Ubuntu)。',
'description'=>'旅行社網站，提供企業及一般會員旅遊的線上報名。系統包含了各種不同形式的活動管理及線上報名。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線、專案及系統維護',
);

$ret[]= <<< EOF
<b>專案名稱：富達利財會系統  [ 100/03 ~ 100/06 共計4個月 ]</b>
專案人數：3 (工程師:2)
專案角色：SA / SD / PG
使用技術：J2EE、PostgreSQL、Struts 2、myBatis、jQuery、AJAX
作業環境：Linux(CentOS)。

專案概述：設計人力仲介公司的財會及業務管理系統，但由於客戶需求一再變更，所以專案合作計畫中止。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設
EOF;

$list[] = array(
'name'=>'富達利財會系統',
'during'=>'[ 100/03 ~ 100/06 共計4個月 ]',
'people'=>'3 (工程師:2)',
'role'=>'SA / SD / PG',
'tech'=>'J2EE、PostgreSQL、Struts 2、myBatis、jQuery、AJAX',
'env'=>'Linux(Ubuntu)。',
'description'=>'設計人力仲介公司的財會及業務管理系統，但由於客戶需求一再變更，所以專案合作計畫中止。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、環境架設',
);

$ret[]= <<< EOF
<b>專案名稱：有巢氏物件管理系統  [ 100/05 ~ 100/05 共計1個月 ]</b>
專案人數：2 (工程師:1)
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、jQuery、Google Map
作業環境：Linux(CentOS)。

專案概述：有巢式內部用的物件管理系統，管理房地產訊息。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;

$list[] = array(
'name'=>'有巢氏物件管理系統',
'during'=>'[ 100/05 ~ 100/05 共計1個月 ]',
'people'=>'2 (工程師:1)',
'role'=>'SA / SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、jQuery、Google Map',
'env'=>'Linux(Ubuntu)。',
'description'=>'有巢式內部用的物件管理系統，管理房地產訊息。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線',
);

$ret[]= <<< EOF
<b>專案名稱：今週刊發報系統  <a target="_blank" href="http://ms01.qyoung.com.tw">http://ms01.qyoung.com.tw</a>  [ 100/5 ~ 101/02 共計10個月 ]</b>
專案人數：3 (工程師:2)
專案角色：SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery、Java、SMTP、Postfix
作業環境：Linux(CentOS)。

專案概述：今週刊電子報發送。包含會員資料管理、發送電子報管理、郵件群組管理、電子報發送排程、電子報開啟統計。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案上線
EOF;

$list[] = array(
'name'=>'今週刊發報系統  <a target="_blank" href="http://ms01.qyoung.com.tw">http://ms01.qyoung.com.tw</a>',
'during'=>'[ 100/5 ~ 101/02 共計10個月 ]',
'people'=>'3 (工程師:2)',
'role'=>'SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、AJAX、jQuery、Java、SMTP、Postfix',
'env'=>'Linux(Ubuntu)。',
'description'=>'今週刊電子報發送。包含會員資料管理、發送電子報管理、郵件群組管理、電子報發送排程、電子報開啟統計。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、專案上線',
);

$ret[]= <<< EOF
<b>專案名稱：味自慢  <a target="_blank" href="http://www.ajijiman.com.tw">http://www.ajijiman.com.tw</a>  [ 100/06 ~ 101/02 共計9個月 ]</b>
專案人數：2 (工程師:1)
專案角色：SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：味自慢 線上官方形象網站，食品、餐飲介紹，會員折扣列印。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案上線、專案及系統維護
EOF;

$list[] = array(
'name'=>'味自慢  <a target="_blank" href="http://www.ajijiman.com.tw">http://www.ajijiman.com.tw</a>',
'during'=>'[ 100/06 ~ 101/02 共計9個月 ]',
'people'=>'2 (工程師:1)',
'role'=>'SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、AJAX、jQuery',
'env'=>'Linux(Ubuntu)。',
'description'=>'味自慢 線上官方形象網站，食品、餐飲介紹，會員折扣列印。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、專案上線、專案及系統維護',
);

$ret[]= <<< EOF
<b>專案名稱：Stayreal  <a target="_blank" href="http://tw.istayreal.com">http://tw.istayreal.com</a>  [ 100/05 ~ 101/02 共計10個月 ]</b>
專案人數：2 (工程師:1)
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：五月天品牌 Stayreal 線上官方形象網站，前台展示及後台上架及管理。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案上線、專案及系統維護
EOF;

$list[] = array(
'name'=>'Stayreal  <a target="_blank" href="http://tw.istayreal.com">http://tw.istayreal.com</a>',
'during'=>'[ 100/05 ~ 101/02 共計10個月 ]',
'people'=>'2 (工程師:1)',
'role'=>'SA / SD / PG',
'tech'=>'PHP、MySQL、Codeigniter、AJAX、jQuery',
'env'=>'Linux(Ubuntu)。',
'description'=>'五月天品牌 Stayreal 線上官方形象網站，前台展示及後台上架及管理。',
'work'=>'需求分析、功能分析、系統設計、Coding、Debug、專案上線、專案及系統維護',
);

/*
$ret[]= <<< EOF
專案名稱：
專案人數：2
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;
*/
return $list;
//return $ret;
}
?>
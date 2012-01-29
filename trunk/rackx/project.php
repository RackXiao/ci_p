<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta content="no-cache" http-equiv="Cache-Control" />
<meta content="no-cache" http-equiv="Pragma" />

<style>
body {
	background-image:url('http://images.andenhud.com/ryan/index/bg.jpg');
    margin: 20 100;
	padding: 0;
	font-family: Verdana, Geneva, sans-serif;
	position: relative;
}
</style>
<title>專案列表</title>
</head>
<?php $dataList = getContent(); ?>
<body>
<?php $count = 1; ?>
<ol style="list-style-type: decimal;">
<?php foreach ($dataList as $data): ?>
	<li style="background-color: <?php echo ($count++%2) ? '#aafbd4':'#f9f6a6' ?>">
		<pre>
<?php echo $data; ?>
		</pre>
	</li>
<?php endforeach; ?>
</ol>
<pre>
　工具：
　　eclipse
　　Navicat
　　
　其他研究過的技術：
　　RegExp
　　Amazon EC2
　　Apache Maven 2
　　MS SQL
　　
</pre>
</body>
</html>

<?php 
function getContent() {
$ret = array();

$ret[]= <<< EOF
專案名稱：MiniJudge <a target="_blank" href="http://www.ccunix.ccu.edu.tw/~lngproc/MiniJudgeJava2.htm">介紹網站</a>  [ 99/01 ~ 99/06 共計6個月 ]
專案人數：4
專案角色：PG
使用技術：Java、SQLite、J2EE、GWT、Tomcat、Spring Framework、SVN、Test Case、Design Pattern、i18n、SMTP、R
作業環境：Linux(Ubuntu)。

專案概述：語言學研究，語言學實驗建置、線上問卷、問卷資料下載、問卷列印、問卷結果分析、多語執行。

工作內容：系統設計、Coding、Debug。
EOF;

$ret[]= <<< EOF
專案名稱：伊聖詩芳療生活館 <a target="_blank" href="http://www.escents.com.tw">http://www.escents.com.tw</a>  [ 99/03 ~ now 共計23個月 ]
專案人數：3
專案角色：PG
使用技術：PHP、MySQL、Javascript、Codeigniter、AJAX、jQuery、Java、SMTP、Postfix
作業環境：Linux(CentOS)。

專案概述：系統修改及維護，電子報寄送平台(<a target="_blank" href="http://ms03.qyoung.com.tw">http://ms03.qyoung.com.tw</a>)。

工作內容：需求分析、功能分析、Coding、Debug、環境架設、專案上線、專案及系統維護
EOF;

$ret[]= <<< EOF
專案名稱：PlayOne  [ 99/04 ~ 99/06 共計3個月 ]
專案人數：3
專案角色：SA / SD / PG
使用技術：J2EE、MySQL、GWT、iBatis、Oval、Log4J
作業環境：Linux(CentOS)。

專案概述：針對運動的人設計的揪團網站，此為內部測試開發專案。

工作內容：專案管理、需求分析、功能分析、系統設計、Coding、Debug
EOF;

$ret[]= <<< EOF
專案名稱：MyKickBacks <a target="_blank" href="http://www.mykickbacks.com">http://www.mykickbacks.com</a>  [ 99/05 ~ 99/11 共計7個月 ]
專案人數：2
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、Facebook Api、Java
作業環境：Linux(CentOS)。

專案概述：線上酬傭回饋購物網站，含酬傭提供商資料的轉換匯入排程。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;

$ret[]= <<< EOF
專案名稱：聯發科內部檔案交換系統  [ 99/05 ~ now 共計21個月 ]
專案人數：3
專案角色：SD / PG
專案角色：Visual C#、Windows server 2003、IIS、AD server
作業環境：Windows Server 2003。

專案概述：系統功能維護及增加新功能。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案及系統維護
EOF;

$ret[]= <<< EOF
專案名稱：赫士盟人力資源網  [ 99/12 ~ 100/02 共計3個月 ]
專案人數：4
專案角色：SA / SD / PG
使用技術：PHP、SQLite、Codeigniter、CAPTCHA、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：企業內部的人力資源網站。包含了一般使用者面試報名，個人資料管理；主管對應徵人員的面試結果處理；人資人員對企業內部應徵流程的管理，及面試人員錄用的管理；內部員工心理測驗的模組等。
測試網站： <a target="_blank" href="http://hr.hasmore.qyoung.com.tw">http://hr.hasmore.qyoung.com.tw</a>

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;

$ret[]= <<< EOF
專案名稱：Anden Hud(采定) <a target="_blank" href="http://www.andenhud.com">http://www.andenhud.com</a>  [ 99/8 ~ now 共計18個月 ]
專案人數：3
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery、SSL、Facebook Api、7-11物流服務、簡訊服務、聯合信用卡中心、玉山銀行eATM、中國信託信用卡、Java、Google分析器、shell script、其他行銷公司的app串接
作業環境：Linux(CentOS)。

專案概述：線上服飾購物網站。系統包含了產品展示，購物車，訂單處理流程，會員中心，電子報寄送，7-11的物流功能串接，線上金流(信用卡及線上ATM等功能)；並為該網站提供系統及資料備援機制。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線、專案及系統維護
EOF;

$ret[]= <<< EOF
專案名稱：新晨旅行社  <a target="_blank" href="http://yohotour.com.tw">http://yohotour.com.tw</a>  [ 99/11 ~ now 共計15個月 ]
專案人數：4
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：旅行社網站，提供企業及一般會員旅遊的線上報名。系統包含了各種不同形式的活動管理及線上報名。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線、專案及系統維護
EOF;

$ret[]= <<< EOF
專案名稱：富達利財會系統   [ 100/03 ~ 100/06 共計4個月 ]
專案人數：2
專案角色：SA / SD / PG
使用技術：J2EE、PostgreSQL、Struts 2、myBatis、jQuery、AJAX
作業環境：Linux(CentOS)。

專案概述：設計人力仲介公司的財會及業務管理系統，但由於客戶需求一再變更，所以專案合作計畫中止。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設
EOF;

$ret[]= <<< EOF
專案名稱：有巢氏物件管理系統  [ 100/05 ~ 100/05 共計1個月 ]
專案人數：2
專案角色：SA / SD / PG
使用技術：PHP、MySQL、Codeigniter、jQuery、Google Map
作業環境：Linux(CentOS)。

專案概述：有巢式內部用的物件管理系統，管理房地產訊息。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、環境架設、專案上線
EOF;

$ret[]= <<< EOF
專案名稱：今週刊發報系統  <a target="_blank" href="http://ms01.qyoung.com.tw/">http://ms01.qyoung.com.tw/</a>  [ 100/5 ~ now 共計9個月 ]
專案人數：3
專案角色：SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery、Java、SMTP、Postfix
作業環境：Linux(CentOS)。

專案概述：今週刊電子報發送。包含會員資料管理、發送電子報管理、郵件群組管理、電子報發送排程、電子報開啟統計。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案上線
EOF;

$ret[]= <<< EOF
專案名稱：味自慢  <a target="_blank" href="http://www.ajijiman.com.tw">http://www.ajijiman.com.tw</a>  [ 100/06 ~ now 共計8個月 ]
專案人數：2
專案角色：SD / PG
使用技術：PHP、MySQL、Codeigniter、AJAX、jQuery
作業環境：Linux(CentOS)。

專案概述：味自慢 線上官方形象網站，食品、餐飲介紹，會員折扣列印。

工作內容：需求分析、功能分析、系統設計、Coding、Debug、專案上線、專案及系統維護
EOF;

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
return $ret;
}
?>
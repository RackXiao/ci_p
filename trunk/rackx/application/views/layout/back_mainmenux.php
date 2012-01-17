<script type="text/javascript">
$(function() {
	$( "#accordion" ).accordion({
		collapsible: true
		,autoHeight :false
		<?php echo isset($active_menu)?',active:'.$active_menu:'';?>
		//,event: "mouseover"
	});
});
</script>

<div id="accordion" class="mainmenu">
	<h3><a href="#">商品管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("product_group/product_index");?>">產品首頁管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/product_index_image");?>">產品首頁圖片管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/frontend_super_class");?>">前台商品分類一管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/frontend_class");?>">前台商品分類二管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/product_category");?>">產品大類管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/theme");?>">主題管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/style");?>">產品款式管理</a></li>
		<li><a><hr /></a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/stencil");?>">版型設定</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/size");?>">尺寸設定</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/color");?>">顏色設定</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/size_chart");?>">尺寸表管理</a></li>
		<li><a class="level1" href="<?php echo site_url("product_group/air_mall");?>">AirMall管理</a></li>
	</ul>
	
	<h3><a href="#">顧客服務管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("customer_group/announce");?>">客服公告</a></li>
		<li><a class="level1" href="<?php echo site_url("customer_group/faq_type");?>">FAQ類型管理</a></li>
		<li><a class="level1" href="<?php echo site_url("customer_group/faq");?>">FAQ管理</a></li>
		<li><a class="level1" href="<?php echo site_url("customer_group/direction");?>">說明管理</a></li>
	</ul>
	
	<h3><a href="#">新聞管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("news_group/news_category");?>">新聞類型管理</a></li>
		<li><a class="level1" href="<?php echo site_url("news_group/news");?>">新聞管理</a></li>
<!--		<li><a class="level1" href="<?php echo site_url("news_group/front_news");?>">首頁新聞管理</a></li>-->
	</ul>
	
	<h3><a href="#">品牌管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("brand_group/brand_intro");?>">品牌介紹</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/designer");?>">設計師管理</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/brandstyle");?>">款式介紹管理</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/unicom");?>">聯名品牌管理</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/highlight");?>">大事紀管理</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/media/index/1");?>">平面媒體報導管理</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/media/index/2");?>">電子媒體報導管理</a></li>
		<li><a class="level1" href="<?php echo site_url("brand_group/media/index/3");?>">其他媒體報導管理</a></li>
<!--		<li><a class="level1" href="<?php echo site_url("brand_group/mediaPlane");?>">平面媒體報導管理</a></li>-->
<!--		<li><a class="level1" href="<?php echo site_url("brand_group/mediaElect");?>">電子媒體報導管理</a></li>-->
<!--		<li><a class="level1" href="<?php echo site_url("brand_group/mediaOther");?>">其他媒體報導管理</a></li>-->
<!--		<li><a class="level1" href="<?php echo site_url("brand_group/store");?>">門市管理</a></li>-->
<!--		<li><a class="level1" href="<?php echo site_url("welcome/store");?>">門市地區管理</a></li>-->
<!--		<li><a class="level1" href="<?php echo site_url("brand_group/dealer");?>">經銷通路管理</a></li>-->
	</ul>
	
	<h3><a href="#">門市管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("store_group/section");?>">直營門市區域管理</a></li>
		<li><a class="level1" href="<?php echo site_url("store_group/store/index/1");?>">STAYREAL門市管理</a></li>
		<li><a class="level1" href="<?php echo site_url("store_group/store/index/2");?>">ROCKCOCO門市管理</a></li>
		<li><a class="level1" href="<?php echo site_url("store_group/dealer");?>">經銷通路管理</a></li>
	</ul>
	
	<h3><a href="#">會員管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("");?>"></a></li>
	</ul>
	
	<h3><a href="#">版面管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("layout_group/html_edit_area");?>">前台自編寫HTML區塊</a></li>
	<!-- 
		<li><a class="level1" href="<?php echo site_url("");?>">首頁BANNER管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">首頁產品管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">首頁新聞管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">主選單多語管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">區塊標題多語管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">側邊欄位管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">上下欄位管理</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">背景管理</a></li>
	-->
	</ul>
	<h3><a href="#">系統管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("");?>"></a></li>
	<!-- 
		<li><a class="level1" href="<?php echo site_url("");?>">副管理員</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">上架人員</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">客服人員</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">數據分析</a></li>
		<li><a class="level1" href="<?php echo site_url("");?>">留言管理</a></li>
	-->
	</ul>
	
	<h3><a href="#">圖片管理群組</a></h3>
	<ul>
		<li><a class="level1" href="<?php echo site_url("image_group/image_category");?>">圖片類型管理</a></li>
		<li><a class="level1" href="<?php echo site_url("image_group/image");?>">圖片管理</a></li>
	</ul>
</div>

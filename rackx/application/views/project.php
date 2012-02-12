
<?php $count = 1; ?>

<table>
<?php foreach ($list as $data): ?>
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
<?php $count++ ?>
<?php endforeach; ?>
</table>

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
			<div class="child">頂尖寵物網 <a target="_blank" href="http://www.petland.com.tw">http://www.petland.com.tw</a>  [ 100/11 ~ now 共計3個月 ]</div>
			<div class="child">天惠堂官網  [ 100/12 ~ now 共計2個月 ]</div>
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
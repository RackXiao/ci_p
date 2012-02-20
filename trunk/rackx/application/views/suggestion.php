

<?php echo form_open() ?>
<?php echo form_close() ?>

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

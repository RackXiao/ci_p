<?php echo form_open("{$controller}/dispatch") ?>
<input type="hidden" name="page_num" value="<?php echo $page_num; ?>" />
<input type="hidden" name="query_string" value="<?php echo $query_string; ?>" />

<div id="content2"> 
	<h2 style="margin:5px 0;"><?php echo $management_name ?>管理</h2> 
	<div class="horizontal_list admin_menu"> 
		<ul> 
		   	<li>
		   		<input type="submit" class="level1" value="新增" name="new_btn" />
		    	<input type="submit" class="level1" value="刪除" name="delete_btn" onclick="return isSelected()" />
		    </li>  
		</ul> 
    </div>
		<div class="clear_b"></div> 
	
	<div class="member"> 
		<table cellspacing="0" cellpadding="0" class="table-members table-admin table-vertical"> 
			<tr>
				<th></th>
				<th>專案名稱</th>
				<th>操作</th>
				<th></th>
			</tr>
			<?php foreach($list as $item): ?>
			<tr <?php if (end($list)->id == $item->id) echo 'class="bottom"' ?>>
				<td><input type="checkbox" name="id_list[]" value="<?php echo $item->id ?>" /></td>
				<td><?php echo $item->name ?></td>
				<td>
					<input type="submit" value="向上" name="move_upper_btn[<?php echo $item->id; ?>]" />
					<input type="submit" value="向下" name="move_lower_btn[<?php echo $item->id; ?>]" />
				</td>
				<td><input type="button" value="編輯" onclick="location='<?php echo site_url("{$controller}/editProcess/{$item->id}/{$page_num}/{$query_string}") ?>'"/></td> 
			</tr>
			<?php endforeach ?>
		</table> 
		<?php echo $pager_str ?>
	</div> 
</div>
<?php echo form_close() ?>

<script>
/**
 * 判斷是否有選取項目。
 */
function isSelected() {
	var isSelected = false;
	$("input[name^='id_list']").each(function() {
		if ($(this).attr('checked')) {
			isSelected = true;
		}
	});
    if (isSelected) {
    	return true;
    } else {
    	alert("至少選擇一項。");
    	return false;
    }
}
</script>

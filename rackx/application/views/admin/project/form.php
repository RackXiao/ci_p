<?php echo form_open(uri_string()) ?>
<div id="content2">
	<input type="button" value="回<?php echo $management_name ?>管理" onclick="window.location='<?php echo site_url("{$controller}/index/{$page_num}/{$query_string}")?>';" /> 
	
	<?php if(isset($item)): ?>
	<input type="hidden" name="id" value="<?php echo $item->id ?>" />
	<?php endif; ?>
	<table cellspacing="0" cellpadding="0" class="new"> 
		<tr> 
			<th>專案名稱</th> 
			<td>
				<?php $field="name"; ?>
				<input type="text" class="textbox" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error($field, ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
		<tr> 
			<th>年間</th> 
			<td> 
				<?php $field="s_year"; ?>
				<input type="text" class="textbox date_field" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				~
				<?php $field="e_year"; ?>
				<input type="text" class="textbox date_field" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error("s_year", ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
				<?php echo form_error("e_year", ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
		<tr> 
			<th>專案人數</th> 
			<td> 
				<?php $field="people"; ?>
				<input type="text" class="textbox" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error($field, ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
		<tr> 
			<th>專案角色</th> 
			<td> 
				<?php $field="role"; ?>
				<input type="text" class="textbox" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error($field, ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
		<tr> 
			<th>使用技術</th> 
			<td> 
				<?php $field="tech"; ?>
				<input type="text" class="textbox" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error($field, ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
		<tr> 
			<th>作業環境</th> 
			<td> 
				<?php $field="env"; ?>
				<input type="text" class="textbox" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error($field, ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
		<tr> 
			<th>工作內容</th> 
			<td> 
				<?php $field="work"; ?>
				<input type="text" class="textbox" name="<?php echo $field?>" value="<?php echo set_value($field, isset($item) ? $item->{$field} : ''); ?>"/>
				<?php echo form_error($field, ERR_MSG_PREFIX, ERR_MSG_SUFFIX);?>
			</td> 
		</tr>
	</table>
	<div class="submit_box"> 
		<input type="submit" value="送出" /> 
		<input type="button" value="取消" onclick="window.location='<?php echo site_url("{$controller}/index/{$page_num}/{$query_string}"); ?>';" />
	</div> 
</div>
<?php echo form_close() ?>
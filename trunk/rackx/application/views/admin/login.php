<?php echo form_open(uri_string()); ?>
<div id="content2">
	<table cellpadding="0" cellspacing="0" class="form_h">
		<tr>
			<th>帳號</th>
			<td>
				<input type="text" class="textbox" name="account" />
				<?php echo form_error('account', ERR_MSG_PREFIX, ERR_MSG_SUFFIX); ?>
			</td>
		</tr>
		<tr>
			<th>密碼</th>
			<td>
				<input type="password" class="textbox" name="password" />
				<?php echo form_error('password', ERR_MSG_PREFIX, ERR_MSG_SUFFIX); ?>
			</td>
		</tr>
	</table>
	<input type="submit" name="submit" value="登入"/>
</div>
<?php echo form_close(); ?>

<ul>
	<?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'message_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['message_item']):
?>
		<li class="message-row" id="thread_<?php echo $this->_var['message_item']['id']; ?>" name="thread_<?php echo $this->_var['message_item']['id']; ?>" style="position:relative;">
		<table class="msg_row">
				<tr>
					<td style="width:75px; text-align:left; margin-right:5px;">
						<div class="avatar_middle">
						<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['message_item']['user_id'],
  'type' => 'middle',
);
echo $k['name']($k['uid'],$k['type']);
?>
						</div>													
					</td>
					<td>
						<div class="item" style="border:1px solid #e3e3e3; overflow:hidden; padding:20px; -moz-border-radius: 5px;-khtml-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;">
						<div class="clearfix">
							<span class="f_l" style="color:#00bef0;">								
							<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['message_item']['user_id'],
);
echo $k['name']($k['value']);
?> 
								<span style="font-size:12px; color:#999;">
								<?php echo $this->_var['LANG']['SUPPLIER_COMMENT_SAY']; ?>：
								</span>
							</span>
							<?php if ($this->_var['user_auth'] [ 'msg' ] [ 'del' ]): ?>
							<div class="f_r">
							&nbsp;&nbsp;<a href="javascript:void(0);" onclick="op_msg_del(<?php echo $this->_var['message_item']['id']; ?>);">删除</a>
							</div>
							<?php endif; ?>
							<span class="f_r f_dgray">
								<i></i>
								<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['message_item']['create_time'],
);
echo $k['name']($k['v']);
?>
							</span>
						</div>
						
						<div class="blank1"></div>
						<p class="text pl20 pt5 pb5">
							<?php 
$k = array (
  'name' => 'nl2br',
  'value' => $this->_var['message_item']['content'],
);
echo $k['name']($k['value']);
?>
						</p>
						<div class="subcomment">
							<?php if ($this->_var['message_item']['admin_reply'] != ''): ?>
								<div class="clearfix comment bt1 pt10 pb10">
									<div class="avatar_middle f_l" style="width:75px">
										<img src="public/avatar/noavatar_middle.gif">
									</div>
									<div class="subc f_l">
										<div class="clearfix">
											<span class="f_l"><a href="###">管理员</a><?php echo $this->_var['LANG']['SUPPLIER_COMMENT_SAY']; ?>：</span>
											<span class="f_r f_dgray">
												<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['message_item']['update_time'],
);
echo $k['name']($k['v']);
?>
											</span>
										</div>
										<div class="pl20 pt5 pb5">
										<?php 
$k = array (
  'name' => 'nl2br',
  'value' => $this->_var['message_item']['admin_reply'],
);
echo $k['name']($k['value']);
?>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<?php $_from = $this->_var['message_item']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'sub_message');if (count($_from)):
    foreach ($_from AS $this->_var['sub_message']):
?>
							<div class="clearfix comment bt1 pt10 pb10">
								<div class="avatar_middle f_l" style="width:75px">
									<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['sub_message']['user_id'],
  'type' => 'middle',
);
echo $k['name']($k['uid'],$k['type']);
?>
								</div>
								<div class="subc f_l">
									<div class="clearfix">
										<span class="f_l"><?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['sub_message']['user_id'],
);
echo $k['name']($k['value']);
?> <?php echo $this->_var['LANG']['SUPPLIER_COMMENT_SAY']; ?>：</span>
										<span class="f_r f_dgray">
											<i></i>
											<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['sub_message']['create_time'],
);
echo $k['name']($k['v']);
?>
										</span>
									</div>
									<div class="pl20 pt5 pb5">
									<?php 
$k = array (
  'name' => 'nl2br',
  'value' => $this->_var['sub_message']['content'],
);
echo $k['name']($k['value']);
?>
									</div>
								</div>
							</div>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
						<?php if ($this->_var['deal']['user_id'] == $this->_var['user_info']['id']): ?>
						<p style="float:right;"><a href="###" dealid="<?php echo $this->_var['deal']['id']; ?>" dataid="<?php echo $this->_var['message_item']['id']; ?>" class="J_comment_reply" style="background-color:#51c2e8; color:#fff; display:block; height:40px; line-height:40px; text-align:center; width:85px; -moz-border-radius: 5px;-khtml-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;">回复</a></p>
						<?php endif; ?>		
					</div>
					</td>
				</tr>
			</table>
			<i style="background:url(<?php echo $this->_var['TMPL']; ?>/images/liuyan_icon.gif) no-repeat; display:block; height:18px; left:75px; position:absolute; top:34px; width:8px;"></i>
		</li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>							
</ul>


<div class="blank"></div>							
<div class="pages"><?php echo $this->_var['pages']; ?></div>	
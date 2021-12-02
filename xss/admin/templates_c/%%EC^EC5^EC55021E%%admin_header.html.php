<?php /* Smarty version 2.6.26, created on 2016-01-26 14:32:59
         compiled from admin_header.html */ ?>
<div class="nav">
	<div class="con">
		<div class="logo">
			<a title="XF 轻量级社区系统" href="./"><img width="265" height="28" src="style/images/logo.gif" /></a>
		</div>
		<div class="topright">
		<?php if ($this->_tpl_vars['show']['user']['userId'] > 0): ?>
			<a href="<?php echo $this->_tpl_vars['show']['user']['blogUrl']; ?>
"><b><?php echo $this->_tpl_vars['show']['user']['userName']; ?>
</b></a>
			<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
">社区首页</a>
			|
			<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=login&act=logout">退出</a>
		<?php else: ?> 
			<a href="<?php echo $this->_tpl_vars['url']['login']; ?>
">登录</a> 
			|
			<a href="<?php echo $this->_tpl_vars['url']['register']; ?>
">注册</a>
		<?php endif; ?>
		</div>
	</div>
</div>
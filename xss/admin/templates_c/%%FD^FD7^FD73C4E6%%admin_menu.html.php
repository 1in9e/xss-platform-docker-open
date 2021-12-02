<?php /* Smarty version 2.6.26, created on 2016-01-26 14:32:59
         compiled from admin_menu.html */ ?>
<div class="menu">
	<h3>后台管理</h3>
	<ul>
		<li<?php if ($this->_tpl_vars['do'] == 'index'): ?> class="active"<?php endif; ?>><a href="./">管理首页</a></li>
		<li<?php if ($this->_tpl_vars['do'] == 'module'): ?> class="active"<?php endif; ?>><a href="./index.php?do=admin_module">公共模块审核</a></li>
	</ul>
</div>
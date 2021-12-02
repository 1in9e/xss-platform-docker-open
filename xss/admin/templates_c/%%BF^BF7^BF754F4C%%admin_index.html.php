<?php /* Smarty version 2.6.26, created on 2016-01-26 14:32:59
         compiled from admin_index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理 - <?php echo $this->_tpl_vars['show']['sitename']; ?>
 - <?php echo $this->_tpl_vars['show']['sitedesc']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['show']['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['show']['description']; ?>
" />
<link type="text/css" rel="stylesheet" href="style/style.css" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/favicon.ico" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrapper">
	<div class="main">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="content">
			<h3>管理首页</h3>
			<div class="data">
				<h4>社区概况</h4>
				<table cellpadding="0" cellspacing="0">
					<tbody>
						<tr><th width="100">注册用户数</th><td><?php echo $this->_tpl_vars['situation']['userCount']; ?>
</td></tr>
					</tbody>
				</table>
				<h4>在线会员 <span>(<?php echo $this->_tpl_vars['situation']['onlineCount']; ?>
)</span></h4>
				<ul class="list">
					<?php $_from = $this->_tpl_vars['situation']['onlineUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
					<li><a href="javascript:void(0)"><?php echo $this->_tpl_vars['value']['userName']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<h4>系统环境</h4>
				<table cellpadding="0" cellspacing="0">
					<tbody>
						<tr><th width="100">程序版本</th><td>XF 轻量级社区系统 1.0</td></tr>
						<tr><th>操作系统</th><td><?php echo $this->_tpl_vars['sysInfo']['serverOS']; ?>
</td></tr>
						<tr><th>服务器软件</th><td><?php echo $this->_tpl_vars['sysInfo']['serverSoftware']; ?>
</td></tr>
						<tr><th>PHP版本</th><td><?php echo $this->_tpl_vars['sysInfo']['phpVersion']; ?>
</td></tr>
						<tr><th>数据库版本</th><td><?php echo $this->_tpl_vars['sysInfo']['mysqlVersion']; ?>
</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
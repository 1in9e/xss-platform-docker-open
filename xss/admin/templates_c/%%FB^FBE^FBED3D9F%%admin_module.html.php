<?php /* Smarty version 2.6.26, created on 2016-01-26 14:33:15
         compiled from admin_module.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin_module.html', 44, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公共模块审核 - <?php echo $this->_tpl_vars['show']['sitename']; ?>
 - <?php echo $this->_tpl_vars['show']['sitedesc']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['show']['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['show']['description']; ?>
" />
<link type="text/css" rel="stylesheet" href="style/style.css" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/favicon.ico" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['root']; ?>
/source/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/source/js/boxy/boxy.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['url']['root']; ?>
/source/js/boxy/jquery.boxy.js"></script>
<script type="text/javascript">
<?php echo '

'; ?>

</script>
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
			<h3>公共模块审核</h3>
			<div class="data">
				<table cellpadding="0" cellspacing="0" width="100%">
					<thead>
						<tr>
							<td width="100">模块名称</td>
							<td>模块描述</td>
							<td width="60">创建人</td>
							<td width="60">创建时间</td>
							<td width="120">审核</td>
							<td width="60">审核人</td>
						</tr>
					</thead>
					<tbody>
					<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
						<tr<?php if ($this->_tpl_vars['k']%2 == 1): ?> style="background:#e0e0e0"<?php endif; ?>>
							<td><a target="_blank" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module&act=view&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></td>
							<td><?php echo $this->_tpl_vars['v']['description']; ?>
</td>
							<td><?php echo $this->_tpl_vars['v']['userName']; ?>
</td>
							<td><?php echo smarty_modifier_date_format($this->_tpl_vars['v']['addTime'], "%Y-%m-%d"); ?>
</td>
							<td>
								<?php if ($this->_tpl_vars['v']['isAudit'] == 1): ?>
								<span style="color:green">已通过</span> 
								<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/index.php?do=admin_module&act=audit&isAudit=2&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">不通过</a>
								<?php else: ?>
									<?php if ($this->_tpl_vars['v']['isAudit'] == 0): ?>
									<span style="color:blue">未审核</span> 
									<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/index.php?do=admin_module&act=audit&isAudit=1&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">通过</a> 
									<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/index.php?do=admin_module&act=audit&isAudit=2&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">不通过</a>
									<?php else: ?>
									<span style="color:green">未通过</span> 
									<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/admin/index.php?do=admin_module&act=audit&isAudit=1&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">通过</a>
									<?php endif; ?>
								<?php endif; ?>
							</td>
							<td><?php echo $this->_tpl_vars['v']['managerName']; ?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					</tbody>
				</table>
				<div class="page">
				<?php echo $this->_tpl_vars['nav']; ?>

				</div>
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
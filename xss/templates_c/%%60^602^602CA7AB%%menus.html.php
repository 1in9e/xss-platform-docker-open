<?php /* Smarty version 2.6.26, created on 2014-07-04 18:16:02
         compiled from menus.html */ ?>
<div class="col-sm-3">
	<div class="panel panel-default">
		<div class="panel-heading"><a style="color: #2a6496;" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php">我的项目</a><a style="float:right;" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=create">创建</a></div> 
			<div class="panel-body">
      			<ul class="nav nav-stacked">
						<?php $_from = $this->_tpl_vars['projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=view&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
	</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading"><a style="color: #2a6496;" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module">我的模块</a><a style="float:right;" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module&act=create">创建</a></div> 
			<div class="panel-body">
      			<ul class="nav nav-stacked">
		<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<?php if ($this->_tpl_vars['v']['isOpen'] == 0 || ( $this->_tpl_vars['v']['isOpen'] == 1 && $this->_tpl_vars['v']['isAudit'] == 0 )): ?>
		<li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module&act=set&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
						</ul>
	</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading"><a style="color: #2a6496;" href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module">公共模块</a></div> 
			<div class="panel-body">
      			<ul class="nav nav-stacked">
		<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<?php if ($this->_tpl_vars['v']['isOpen'] == 1 && $this->_tpl_vars['v']['isAudit'] == 1): ?>
		<li><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=module&act=view&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
						</ul>
	</div>
	</div>
</div>
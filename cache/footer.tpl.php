<?php /* Smarty version 2.6.26, created on 2018-08-27 10:41:20
         compiled from inc/footer.tpl */ ?>
<div id="footer">
 <div class="wrap">
  <div class="footNav"><?php $_from = $this->_tpl_vars['nav_bottom_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"><?php echo $this->_tpl_vars['nav']['nav_name']; ?>
</a><?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?><i>|</i><?php endif; ?><?php endforeach; endif; unset($_from); ?></div>
  <div class="copyRight"><?php echo $this->_tpl_vars['lang']['copyright']; ?>
 <?php echo $this->_tpl_vars['lang']['powered_by']; ?>
 <?php if ($this->_tpl_vars['site']['icp']): ?><a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_tpl_vars['site']['icp']; ?>
</a><?php endif; ?></div>
	<div>
	<?php $_from = $this->_tpl_vars['friend_link_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<a target='_blank' href='<?php echo $this->_tpl_vars['item']['link_url']; ?>
'><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
	</div>
 </div>
</div>
<?php if ($this->_tpl_vars['site']['code']): ?>
<div style="display:none"><?php echo $this->_tpl_vars['site']['code']; ?>
</div>
<?php endif; ?>
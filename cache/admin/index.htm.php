<?php /* Smarty version 2.6.26, created on 2018-08-27 10:39:42
         compiled from index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['rec'] == 'default'): ?>
<?php endif; ?>
</head>
<body>
<div id="dcWrap"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="index" class="mainBox" style="padding-top:18px;<?php echo $this->_tpl_vars['workspace']['height']; ?>
">
   <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
   <div id="right">
    <div class="quickMenu">
     <h2><?php echo $this->_tpl_vars['lang']['quick_menu']; ?>
</h2>
     <div class="menu">
      <dl>
       <?php if ($this->_tpl_vars['site']['rewrite']): ?>
       <dt><a href="system.php"><?php echo $this->_tpl_vars['lang']['close']; ?>
</a><?php echo $this->_tpl_vars['lang']['quick_menu_rewrite']; ?>
（<?php echo $this->_tpl_vars['lang']['opened']; ?>
）</dt>
       <?php else: ?>
       <dt><a href="system.php"><?php echo $this->_tpl_vars['lang']['open']; ?>
</a><?php echo $this->_tpl_vars['lang']['quick_menu_rewrite']; ?>
（<?php echo $this->_tpl_vars['lang']['open_no']; ?>
）</dt>
       <?php endif; ?>
       <dd><?php echo $this->_tpl_vars['lang']['quick_menu_rewrite_cue']; ?>
</dd>
      </dl>
      <dl>
       <?php if ($this->_tpl_vars['site']['captcha']): ?>
       <dt><a href="system.php"><?php echo $this->_tpl_vars['lang']['close']; ?>
</a><?php echo $this->_tpl_vars['lang']['quick_menu_captcha']; ?>
（<?php echo $this->_tpl_vars['lang']['opened']; ?>
）</dt>
       <?php else: ?>
       <dt><a href="system.php"><?php echo $this->_tpl_vars['lang']['open']; ?>
</a><?php echo $this->_tpl_vars['lang']['quick_menu_captcha']; ?>
（<?php echo $this->_tpl_vars['lang']['open_no']; ?>
）</dt>
       <?php endif; ?>
       <dd><?php echo $this->_tpl_vars['lang']['quick_menu_captcha_cue']; ?>
</dd>
      </dl>
      <!--<dl>
       <dt><a href="index.php?rec=directory_check"><?php echo $this->_tpl_vars['lang']['quick_menu_directory_check']; ?>
</a><?php echo $this->_tpl_vars['lang']['quick_menu_directory']; ?>
</dt>
       <dd><?php echo $this->_tpl_vars['lang']['quick_menu_directory_cue']; ?>
</dd>
      </dl>-->
     </div>
    </div>
   </div>
   <div id="main"> 
    
    <!--<div id="douApi"></div>-->
    <div class="indexBox">
     <h2><?php echo $this->_tpl_vars['lang']['title_page']; ?>
</h2>
     <ul class="page">
      <?php $_from = $this->_tpl_vars['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page_list']):
?> 
      <a href="page.php?rec=edit&id=<?php echo $this->_tpl_vars['page_list']['id']; ?>
"<?php if ($this->_tpl_vars['page_list']['level'] > 0): ?> class="child<?php echo $this->_tpl_vars['page_list']['level']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['page_list']['page_name']; ?>
</a> 
      <?php endforeach; endif; unset($_from); ?>
      <div class="clear"></div>
     </ul>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
     <tr>
      <td valign="top" class="pl">
       <div class="indexBox">
        <h2><?php echo $this->_tpl_vars['lang']['title_admin_log']; ?>
<em>（<?php echo $this->_tpl_vars['lang']['manager_log_create_time']; ?>
/<?php echo $this->_tpl_vars['lang']['manager_log_user_name']; ?>
/<?php echo $this->_tpl_vars['lang']['manager_log_ip']; ?>
）</em></h2>
        <div class="adminLog">
         <?php $_from = $this->_tpl_vars['log_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['log_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['log_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['log_list']):
        $this->_foreach['log_list']['iteration']++;
?>
         <dl<?php if (($this->_foreach['log_list']['iteration'] == $this->_foreach['log_list']['total'])): ?> class="last"<?php endif; ?>>
          <dd class="date"><?php echo $this->_tpl_vars['log_list']['ip']; ?>
</dd>
          <dt><?php echo $this->_tpl_vars['log_list']['create_time']; ?>
</dt>
          <dd class="name"><?php echo $this->_tpl_vars['log_list']['user_name']; ?>
</dd>
         </dl>
         <?php endforeach; endif; unset($_from); ?>
        </div>
       </div>
       <div class="indexBox">
        <h2><?php echo $this->_tpl_vars['lang']['title_sys_info']; ?>
</h2>
        <div class="siteInfo">
         <ul>
          <li><?php echo $this->_tpl_vars['lang']['php_version']; ?>
：<?php echo $this->_tpl_vars['sys_info']['php_ver']; ?>
</li>
          <li><?php echo $this->_tpl_vars['lang']['max_filesize']; ?>
：<?php echo $this->_tpl_vars['sys_info']['max_filesize']; ?>
</li>
          <li><?php echo $this->_tpl_vars['lang']['gd']; ?>
：<?php echo $this->_tpl_vars['sys_info']['gd']; ?>
</li>
          <li><?php echo $this->_tpl_vars['lang']['zlib']; ?>
：<?php echo $this->_tpl_vars['sys_info']['zlib']; ?>
</li>
          <li><?php echo $this->_tpl_vars['lang']['timezone']; ?>
：<?php echo $this->_tpl_vars['sys_info']['timezone']; ?>
</li>
          <li><?php echo $this->_tpl_vars['lang']['socket']; ?>
：<?php echo $this->_tpl_vars['sys_info']['socket']; ?>
</li>
         </ul>
         <ul class="last long">
          <li><?php echo $this->_tpl_vars['lang']['mysql_version']; ?>
：<?php echo $this->_tpl_vars['sys_info']['mysql_ver']; ?>
</li>
          <li><?php echo $this->_tpl_vars['lang']['os']; ?>
：<?php echo $this->_tpl_vars['sys_info']['os']; ?>
(<?php echo $this->_tpl_vars['sys_info']['ip']; ?>
)</li>
          <li><?php echo $this->_tpl_vars['lang']['web_server']; ?>
：<?php echo $this->_tpl_vars['sys_info']['web_server']; ?>
</li>
         </ul>
        </div>
       </div>
      </td>
     </tr>
    </table>
    
   </div>
   <?php endif; ?>
   <?php if ($this->_tpl_vars['rec'] == 'directory_check'): ?>
   <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
   <ul id="directoryCheck">
    <?php $_from = $this->_tpl_vars['writeable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['writeable']):
?>
    <li><em><?php echo $this->_tpl_vars['writeable']['dir']; ?>
</em>..................................................................<?php echo $this->_tpl_vars['writeable']['if_write']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
   </ul>
   <?php endif; ?>
  </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>
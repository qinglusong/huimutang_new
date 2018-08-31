<?php /* Smarty version 2.6.26, created on 2018-08-29 14:04:26
         compiled from friend.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
 - 友情链接</title>
<link href="templates/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="images/jquery.form.min.js"></script>
<script type="text/javascript" src="images/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div class="mainBox" style="<?php echo $this->_tpl_vars['workspace']['height']; ?>
">
    <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn add"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a>友情链接列表</h3>
    <div class="filter">
    <form action="friend.php" method="post">

     <input name="keyword" type="text" class="inpMain" value="<?php echo $this->_tpl_vars['keyword']; ?>
" size="20" />
     <input name="submit" class="btnGray" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_filter']; ?>
" />
    </form>
    
    </div>

	
    <div id="list">
    <form name="action" method="post" action="friend.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center">编号</th>
      <th align="left">标题</th>
      
      <th width="80" align="center">添加日期</th>
      <th width="80" align="center">操作</th>
     </tr>
     <?php $_from = $this->_tpl_vars['friend_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
     <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['article']['id']; ?>
" /></td>
      <td align="center"><?php echo $this->_tpl_vars['article']['id']; ?>
</td>
      <td><a href="friend.php?rec=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></td>
      <td align="center"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</td>
      <td align="center">
       
      <a href="friend.php?rec=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="friend.php?rec=del&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a>
       
      </td>
     </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
      <option value="del_all"><?php echo $this->_tpl_vars['lang']['del']; ?>
</option>
     </select>
     
     <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_execute']; ?>
" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pager.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['rec'] == 'add' || $this->_tpl_vars['rec'] == 'edit'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <form action="friend.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post" enctype="multipart/form-data">
     <div class="formBasic">
      <dl>
       <dt>链接名称</dt>
       <dd>
        <input type="text" name="title" value="<?php echo $this->_tpl_vars['friend']['title']; ?>
" size="135" class="inpMain" />
       </dd>
      </dl>
      
      <dl>
       <dt>链接地址</dt>
       <dd>
        <input type="text" name="link_url" value="<?php echo $this->_tpl_vars['friend']['link_url']; ?>
" size="135" class="inpMain" />
       </dd>
      </dl>
      <dl>
       <dt>排序</dt>
       <dd>
        <input type="text" name="sort" value="<?php echo $this->_tpl_vars['friend']['sort']; ?>
" size="135" class="inpMain" />
       </dd>
      </dl>
      <dl>
       <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
       <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['friend']['id']; ?>
">
       <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
      </dl>
     </div>
    </form>
    <?php endif; ?>
   </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </div>
<?php if ($this->_tpl_vars['rec'] == 'default'): ?>
<script type="text/javascript">
<?php echo '
onload = function()
{
  document.forms[\'action\'].reset();
}


'; ?>

</script>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "filebox.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
</body>
</html>
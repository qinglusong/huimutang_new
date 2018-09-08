<?php /* Smarty version 2.6.26, created on 2018-09-08 14:42:38
         compiled from product.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'product.htm', 64, false),)), $this); ?>
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
<script type="text/javascript" src="images/jquery.form.min.js"></script>
<script type="text/javascript" src="images/jquery.autotextarea.js"></script>
<script type="text/javascript" charset="utf-8" src="templates/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="templates/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="templates/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="templates/ueditor/lang/zh-cn/zh-cn.js"></script>
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
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <div class="filter">
    <form action="product.php" method="post">



      <?php $_from = $this->_tpl_vars['product_erji_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
         <label><input type='checkbox' name='cat_id[]' <?php $_from = $this->_tpl_vars['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ids']):
?> <?php if ($this->_tpl_vars['ids'] == $this->_tpl_vars['cate']['cat_id']): ?> checked='checked' <?php endif; ?> <?php endforeach; endif; unset($_from); ?>  value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" /><?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</label> |
         <?php endforeach; endif; unset($_from); ?>

<br><br>


     <input name="keyword" type="text" class="inpMain" value="<?php echo $this->_tpl_vars['keyword']; ?>
" size="20" />
     <input name="submit" class="btnGray" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_filter']; ?>
" />
    </form>
    <br/>  <br/>
    <span>
    <?php if ($this->_tpl_vars['sort']['handle']): ?>
    <a class="btnGray" href="product.php?rec=sort&act=handle"><?php echo $this->_tpl_vars['lang']['sort_close']; ?>
</a>
    <?php else: ?>
    <a class="btnGray" href="product.php?rec=sort&act=handle"><?php echo $this->_tpl_vars['lang']['sort_product']; ?>
</a>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['xiangmuzixun_sort']['xiangmuzixun_handle']): ?>
    <a class="btnGray" href="product.php?rec=xiangmuzixun_sort&act=handle"><?php echo $this->_tpl_vars['lang']['sort_close']; ?>
</a>
    <?php else: ?>
    <a class="btnGray" href="product.php?rec=xiangmuzixun_sort&act=handle">开始筛选项目咨询案例</a>
  <?php endif; ?>

    </span>
    </div>
        <br/>  <br/>
    <?php if ($this->_tpl_vars['sort']['handle']): ?>
    <div class="homeSortRight">
     <ul class="homeSortBg">
      <?php echo $this->_tpl_vars['sort']['bg']; ?>

     </ul>
     <ul class="homeSortList">
      <?php $_from = $this->_tpl_vars['sort']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
      <li>
       <img src="<?php echo $this->_tpl_vars['product']['images']; ?>
" width="60" height="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 5, "") : smarty_modifier_truncate($_tmp, 5, "")); ?>

       <a href="product.php?rec=sort&act=cancel&id=<?php echo $this->_tpl_vars['product']['id']; ?>
" title="<?php echo $this->_tpl_vars['lang']['sort_cancel']; ?>
">X</a>
      </li>
      <?php endforeach; endif; unset($_from); ?>
     </ul>
    </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['xiangmuzixun_sort']['xiangmuzixun_handle']): ?>
    <div class="homeSortRight">
     <ul class="homeSortBg">
      <?php echo $this->_tpl_vars['xiangmuzixun_sort']['bg']; ?>

     </ul>
     <ul class="homeSortList">
      <?php $_from = $this->_tpl_vars['xiangmuzixun_sort']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
      <li>
       <?php echo $this->_tpl_vars['product']['name']; ?>

       <a href="product.php?rec=xiangmuzixun_sort&act=cancel&id=<?php echo $this->_tpl_vars['product']['id']; ?>
" title="<?php echo $this->_tpl_vars['lang']['sort_cancel']; ?>
">X</a>
      </li>
      <?php endforeach; endif; unset($_from); ?>
     </ul>
    </div>
    <?php endif; ?>
  

    <div id="list" <?php if ($this->_tpl_vars['sort']['handle']): ?> class="homeSortLeft"<?php endif; ?> <?php if ($this->_tpl_vars['xiangmuzixun_sort']['xiangmuzixun_handle']): ?> class="homeSortLeft"<?php endif; ?>>
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="40" align="center"><?php echo $this->_tpl_vars['lang']['record_id']; ?>
</th>
        <th align="left"><?php echo $this->_tpl_vars['lang']['name']; ?>
</th>
        <th width="150" align="center"><?php echo $this->_tpl_vars['lang']['product_category']; ?>
</th>
       <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['add_time']; ?>
</th>
        <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</th>
      </tr>
      <?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
      <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['product']['id']; ?>
" /></td>
        <td align="center"><?php echo $this->_tpl_vars['product']['id']; ?>
</td>
        <td><a href="product.php?rec=edit&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['product']['name']; ?>
</a></td>
        <td align="center"><?php if ($this->_tpl_vars['product']['cat_name']): ?><a href="product.php?cat_id=<?php echo $this->_tpl_vars['product']['cat_id']; ?>
"><?php echo $this->_tpl_vars['product']['cat_name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
<?php endif; ?></td>
        <td align="center"><?php echo $this->_tpl_vars['product']['add_time']; ?>
</td>
        <td align="center">
         
         <?php if ($this->_tpl_vars['sort']['handle']): ?>
         <a href="product.php?rec=sort&act=set&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['sort_btn']; ?>
</a>
         <?php elseif ($this->_tpl_vars['xiangmuzixun_sort']['xiangmuzixun_handle']): ?>
         <a href="product.php?rec=xiangmuzixun_sort&act=set&id=<?php echo $this->_tpl_vars['product']['id']; ?>
">咨询页显示</a>
         <?php else: ?>
         <a href="product.php?rec=edit&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="product.php?rec=del&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a>
         <?php endif; ?>

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
      <option value="category_move"><?php echo $this->_tpl_vars['lang']['category_move']; ?>
</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
      <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
      <?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['cat_id']): ?>
      <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
      <?php else: ?>
      <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
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
    <form action="product.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post" enctype="multipart/form-data">
     <div class="formBasic">
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['name']; ?>
</dt>
       <dd>
        <input type="text" name="name" value="<?php echo $this->_tpl_vars['product']['name']; ?>
" size="80" class="inpMain" />
       </dd>
      </dl>

      <dl>
       <dt>英文标题</dt>
       <dd>
        <input type="text" name="en_name" value="<?php echo $this->_tpl_vars['product']['en_name']; ?>
" size="80" class="inpMain" />
       </dd>
      </dl>


      <dl>
       <dt><font color='red'>项目分类</font></dt>
       <dd>
         <?php $_from = $this->_tpl_vars['product_xiangmu_erji_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
         <label><input type='checkbox' name='cat_id_xiangmu[]' <?php $_from = $this->_tpl_vars['product']['cat_ids_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ids']):
?> <?php if ($this->_tpl_vars['ids'] == $this->_tpl_vars['cate']['cat_id']): ?> checked='checked' <?php endif; ?> <?php endforeach; endif; unset($_from); ?>  value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" /><?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</label> |
         <?php endforeach; endif; unset($_from); ?>
       </dd>
      </dl>

      <dl>
       <dt><font color='red'>行业分类</font></dt>
       <dd>
         <?php $_from = $this->_tpl_vars['product_hangye_erji_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
         <label><input type='checkbox' name='cat_id_hangye[]' <?php $_from = $this->_tpl_vars['product']['cat_ids_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ids']):
?> <?php if ($this->_tpl_vars['ids'] == $this->_tpl_vars['cate']['cat_id']): ?> checked='checked' <?php endif; ?> <?php endforeach; endif; unset($_from); ?> value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" /><?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</label> |
         <?php endforeach; endif; unset($_from); ?>
       </dd>
      </dl>


      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['product_price']; ?>
</dt>
       <dd>
        <input type="text" name="price" value="<?php if ($this->_tpl_vars['product']['price']): ?><?php echo $this->_tpl_vars['product']['price']; ?>
<?php else: ?><?php endif; ?>" size="80" class="inpMain" />
       </dd>
      </dl>
      <?php if ($this->_tpl_vars['product']['defined']): ?>
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['product_defined']; ?>
</dt>
       <dd>
        <textarea name="defined" id="defined" cols="50" class="textAreaAuto" style="height:<?php echo $this->_tpl_vars['product']['defined_count']; ?>
0px"><?php echo $this->_tpl_vars['product']['defined']; ?>
</textarea>
        <script type="text/javascript">
         <?php echo '
         $("#defined").autoTextarea({maxHeight:300});
         '; ?>

        </script>
        </dd>
      </dl>
      <?php endif; ?>
      



<script id="editor" name="content" type="text/plain" style="width:1024px;height:500px;"><?php echo $this->_tpl_vars['product']['content']; ?>
</script>






      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['thumb']; ?>
</dt>
       <dd>
        <input type="file" name="image" size="38" class="inpFlie" />
        <?php if ($this->_tpl_vars['product']['image']): ?><a href="<?php echo $this->_tpl_vars['product']['image']; ?>
" target="_blank"><img src="images/icon_yes.png"></a><?php else: ?><img src="images/icon_no.png"><?php endif; ?></dd>
      </dl>
	  
	  
	  
	  <dl>
       <dt>PC轮播图|<a href='javascript:;' onclick="addimgs()" style='cursor:pointer; color:red;'>【添加】</a><font color='red' size='1'><a href='/admin/demoshow.php'>编辑已存在的图片去菜单案例幻灯片修改</a></font></dt>
       <dd id='banner_list'>
		
			<?php if ($this->_tpl_vars['product']['img_pc_list']): ?>
			<?php $_from = $this->_tpl_vars['product']['img_pc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
			
			<div id='showdemo_<?php echo $this->_tpl_vars['item']['id']; ?>
'>
			<input type='file' disabled="false"  name='show_img[]' size='38' class='inpFlie' />
			<a href='<?php echo $this->_tpl_vars['item']['show_img']; ?>
' target='_blank'><img width='40px' height='20px;' src='<?php echo $this->_tpl_vars['item']['show_img']; ?>
'></a>
			<input type='hidden' name='banner_id[]'  value='<?php echo $this->_tpl_vars['item']['id']; ?>
' />
			标题：<input type='text' name='banner_title[]'  value='<?php echo $this->_tpl_vars['item']['show_name']; ?>
' />
			链接：<input type='text' name='banner_link[]'  value='<?php echo $this->_tpl_vars['item']['show_link']; ?>
' />
			排序：<input type='text' name='banner_sort[]'  value='<?php echo $this->_tpl_vars['item']['sort']; ?>
' />
      <a href='javascript:;' onclick='del_div(<?php echo $this->_tpl_vars['item']['id']; ?>
)'>X</a>
			</div><br>
			
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		
		
		</dd>
      </dl>
	  
	  <dl>
       <dt>wap轮播图|<a href='javascript:;' onclick="addwapimgs()" style='cursor:pointer; color:red;'>【添加】</a><font color='red' size='1'><a href='/admin/demoshow.php'>编辑已存在的图片去菜单案例幻灯片修改</a></font></dt>
       <dd id='banner_list_wap'>
		
			<?php if ($this->_tpl_vars['product']['img_pc_list']): ?>
			<?php $_from = $this->_tpl_vars['product']['img_wap_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
			
			<div id='showdemom_<?php echo $this->_tpl_vars['item']['id']; ?>
'>
			<input type='file' disabled="false"  name='show_img_wap[]' size='38' class='inpFlie' />
			<a href='<?php echo $this->_tpl_vars['item']['show_img']; ?>
' target='_blank'><img width='40px' height='20px;' src='<?php echo $this->_tpl_vars['item']['show_img']; ?>
'></a>
			<input type='hidden' name='banner_id_wap[]'  value='<?php echo $this->_tpl_vars['item']['id']; ?>
' />
			标题：<input type='text' name='banner_title_wap[]'  value='<?php echo $this->_tpl_vars['item']['show_name']; ?>
' />
			链接：<input type='text' name='banner_link_wap[]'  value='<?php echo $this->_tpl_vars['item']['show_link']; ?>
' />
			排序：<input type='text' name='banner_sort_wap[]'  value='<?php echo $this->_tpl_vars['item']['sort']; ?>
' />
      <a href='javascript:;' onclick='del_div_m(<?php echo $this->_tpl_vars['item']['id']; ?>
)'>X</a>
			</div><br>
			
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		
		</dd>
      </dl>
	  
	  <script type="text/javascript">
		<?php echo '
		
		function addimgs(){
			var	html= \'<div>\';
				html+=		"<input type=\'file\' name=\'show_img[]\' size=\'38\' class=\'inpFlie\' />";
				//html+=		"<a href=\'\' target=\'_blank\'><img width=\'50px\' height=\'30px;\' src=\'\'></a>";
				html+=		"标题：<input type=\'text\' name=\'banner_title[]\'  value=\'\' />";
				html+=		"链接：<input type=\'text\' name=\'banner_link[]\'  value=\'\' />";
				html+=		"排序：<input type=\'text\' name=\'banner_sort[]\'  value=\'\' />";
				html+="<div><br>";
				
				$("#banner_list").append(html);
		}
		
		function addwapimgs(){
			var	html= \'<div>\';
				html+=		"<input type=\'file\' name=\'show_img_wap[]\' size=\'38\' class=\'inpFlie\' />";
				//html+=		"<a href=\'\' target=\'_blank\'><img width=\'50px\' height=\'30px;\' src=\'\'></a>";
				html+=		"标题：<input type=\'text\' name=\'banner_title_wap[]\'  value=\'\' />";
				html+=		"链接：<input type=\'text\' name=\'banner_link_wap[]\'  value=\'\' />";
				html+=		"排序：<input type=\'text\' name=\'banner_sort_wap[]\'  value=\'\' />";
				html+="<div><br>";
				
				$("#banner_list_wap").append(html);
		}
		
		'; ?>

	  </script>
	  
	  
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['keywords']; ?>
</dt>
       <dd>
        <input type="text" name="keywords" value="<?php echo $this->_tpl_vars['product']['keywords']; ?>
" size="114" class="inpMain" />
       </dd>
      </dl>
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['description']; ?>
</dt>
       <dd>
        <textarea name="description" cols="115" rows="3" class="textArea" /><?php echo $this->_tpl_vars['product']['description']; ?>
</textarea>
       </dd>
      </dl>
	
	<dl>
       <dt><?php echo $this->_tpl_vars['lang']['sort']; ?>
</dt>
       <dd>
        <input type="text" name="sort_list" value="<?php echo $this->_tpl_vars['product']['sort_list']; ?>
" size="14" class="inpMain" />
       </dd>
      </dl>
	  
      <dl>
       <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
       <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
       <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
      </dl>
     </div>
    </form>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['rec'] == 'thumb'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <script type="text/javascript">
    <?php echo '

     function mask(i) {
        document.getElementById(\'mask\').innerHTML += i;
        document.getElementById(\'mask\').scrollTop = 100000000;
     }
     function success() {
        var d=document.getElementById(\'success\');
        d.style.display="block";
     }
    '; ?>

    </script>
    <dl id="maskBox">
     <dt><em><?php echo $this->_tpl_vars['mask']['count']; ?>
</em><?php if (! $this->_tpl_vars['mask']['confirm']): ?><form action="product.php?rec=thumb" method="post"><input name="confirm" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['product_thumb_start']; ?>
" /></form><?php endif; ?></dt>
     <dd class="maskBg"><?php echo $this->_tpl_vars['mask']['bg']; ?>
<i id="success"><?php echo $this->_tpl_vars['lang']['product_thumb_succes']; ?>
</i></dd>
     <dd id="mask"></dd>
    </dl>
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

function douAction()
{
 var frm = document.forms[\'action\'];
 frm.elements[\'new_cat_id\'].style.display = frm.elements[\'action\'].value == \'category_move\' ? \'\' : \'none\';
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
<?php if ($this->_tpl_vars['rec'] != 're_thumb'): ?>
</body>
</html>
<?php endif; ?>
<script type="text/javascript">
<?php echo '
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor(\'editor\')就能拿到相关的实例
    var ue = UE.getEditor(\'editor\');


    function isFocus(e){
        alert(UE.getEditor(\'editor\').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor(\'editor\').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt(\'插入html代码\', \'\');
        UE.getEditor(\'editor\').execCommand(\'insertHtml\', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor(\'editor\');
    }
    function getAllHtml() {
        alert(UE.getEditor(\'editor\').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor(\'editor\').getContent());
        alert(arr.join("\\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor(\'editor\').getPlainTxt());
        alert(arr.join(\'\\n\'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent(\'欢迎使用ueditor\')方法可以设置编辑器的内容");
        UE.getEditor(\'editor\').setContent(\'欢迎使用ueditor\', isAppendTo);
        alert(arr.join("\\n"));
    }
    function setDisabled() {
        UE.getEditor(\'editor\').setDisabled(\'fullscreen\');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor(\'editor\').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor(\'editor\').selection.getRange();
        range.select();
        var txt = UE.getEditor(\'editor\').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor(\'editor\').getContentTxt());
        alert(arr.join("\\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor(\'editor\').hasContents());
        alert(arr.join("\\n"));
    }
    function setFocus() {
        UE.getEditor(\'editor\').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor(\'editor\').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById(\'btns\');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById(\'btns\');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor(\'editor\').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor(\'editor\').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }


    function del_div(id){
      if(confirm(\'确定删除么？\')){


        $.ajax({
            //\'async\' : false,// 使用同步的Ajax请求
            type : "post",
            url : \'demoshow.php\',
            dataType : "json",
            data : {\'rec\':\'del_ajax\',id:id},
            success : function(e){
                if(e.code==200){
                  $(\'#showdemo_\'+id).html(\'\');
                }else{
                  alert(e.message);
                }
            }
        });
      }
    }

    function del_div_m(id){
      if(confirm(\'确定删除么？\')){
        $.ajax({
            //\'async\' : false,// 使用同步的Ajax请求
            type : "post",
            url : \'demoshow.php\',
            dataType : "json",
            data : {\'rec\':\'del_ajax\',id:id},
            success : function(e){
                if(e.code==200){
                  $(\'#showdemom_\'+id).html(\'\');
                }else{
                  alert(e.message);
                }
            }
        });
      }
    }

  '; ?>

</script>
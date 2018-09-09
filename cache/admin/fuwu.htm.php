<?php /* Smarty version 2.6.26, created on 2018-09-09 13:54:08
         compiled from fuwu.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
 - 编辑服务页面</title>
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
    
    <?php if ($this->_tpl_vars['rec'] == 'add' || $this->_tpl_vars['rec'] == 'edit'): ?>
    <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <form action="fuwu.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post" enctype="multipart/form-data">
     <div class="formBasic">
      <dl>
       <dt>上部分标题</dt>
       <dd>
        <input type="text" name="top_title" value="<?php echo $this->_tpl_vars['info']['contents_arr']['top_title']; ?>
" size="85" placeholder="exp:慧目堂的价值"  class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>上部分大标题</dt>
       <dd>
        <input type="text" name="top_big_title" value="<?php echo $this->_tpl_vars['info']['contents_arr']['top_big_title']; ?>
" size="85" placeholder="exp:是帮企业创造了多大价值"  class="inpMain" />
       </dd>
      </dl>
      
      <dl>
       <dt>上部分内容</dt>
       <dd>
        <input type="text" name="top_content" value="<?php echo $this->_tpl_vars['info']['contents_arr']['top_content']; ?>
" size="135" placeholder="exp:我们的使命是，帮助企业打造。。。。略"  class="inpMain" />
       </dd>
      </dl>
	  
	  
	  
	  <dl>
       <dt>中部分上标题</dt>
       <dd>
        <input type="text" name="middle_top_title" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_top_title']; ?>
" size="85" placeholder="exp:品牌道"  class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>中部分上内容</dt>
       <dd>
        <input type="text" name="middle_top_content" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_top_content']; ?>
" size="85" placeholder="exp:系统方法-服务内容" class="inpMain" />
       </dd>
      </dl>
      
      <dl>
       <dt>中部分左上</dt>
       <dd>
        <input type="text" name="middle_left_top" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_left_top']; ?>
" size="85" placeholder="exp:9" class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>中部分左中</dt>
       <dd>
        <input type="text" name="middle_left_middle" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_left_middle']; ?>
" size="85" placeholder="exp:/9大模块/" class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>中部分左下内容</dt>
       <dd>
        <input type="text" name="middle_left_bottom" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_left_bottom']; ?>
" size="135" placeholder="exp:是慧目堂驱动客户打造领军品牌的系统方法。。。。略"  class="inpMain" />
       </dd>
      </dl>
	  
	  <dl>
       <dt>中部分右上</dt>
       <dd>
        <input type="text" name="middle_right_top" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_right_top']; ?>
" size="85" placeholder="exp:3"  class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>中部分右中</dt>
       <dd>
        <input type="text" name="middle_right_middle" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_right_middle']; ?>
" size="85" placeholder="exp:/3大原则/"  class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>中部分右下内容</dt>
       <dd>
        <input type="text" name="middle_right_bottom" value="<?php echo $this->_tpl_vars['info']['contents_arr']['middle_right_bottom']; ?>
" size="135" placeholder="exp:是慧目堂打造领军品牌系统工作。。。。略"  class="inpMain" />
       </dd>
      </dl>
	  
	  
	  
	  <dl>
       <dt>下部分标题</dt>
       <dd>
        <input type="text" name="bottom_title" value="<?php echo $this->_tpl_vars['info']['contents_arr']['bottom_title']; ?>
" size="85" placeholder="exp:市场竞争，其真正的战场。。。。略"  class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>下部分内容</dt>
       <dd>
        <input type="text" name="bottom_content" value="<?php echo $this->_tpl_vars['info']['contents_arr']['bottom_content']; ?>
" size="135" placeholder="exp:企业发展停滞。。。。。略"  class="inpMain" />
       </dd>
      </dl>
	  
	  <dl>
       <dt>台阶九段文字（<font color='red' size='2'>用英文逗号,分隔</font>）</dt>
       <dd>
        <input type="text" name="nine_content" value="<?php echo $this->_tpl_vars['info']['contents_arr']['nine_content']; ?>
" size="135" placeholder="exp:1、竞争分析,2、战略定位3、品牌及产品命名。。。。略"  class="inpMain" />
       </dd>
      </dl>

      <dl>
       <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
       <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['info']['id']; ?>
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "filebox.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
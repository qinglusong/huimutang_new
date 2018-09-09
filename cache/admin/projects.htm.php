<?php /* Smarty version 2.6.26, created on 2018-09-09 12:04:26
         compiled from projects.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
 - 编辑项目咨询页面</title>
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
    <form action="projects.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post" enctype="multipart/form-data">
     <div class="formBasic">
      <dl>
       <dt>客户评价1</dt>
       <dd>
        <input type="text" name="comment[]" value="<?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['0']['title']; ?>
" placeholder="评价标题" size="35"   class="inpMain" />
        <textarea placeholder="评价内容" name="comment_content[]"  class="inpMain"><?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['0']['content']; ?>
</textarea>
       </dd>
      </dl>
      <dl>
       <dt>客户评价2</dt>
       <dd>
        <input type="text" name="comment[]" value="<?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['1']['title']; ?>
" placeholder="评价标题" size="35"   class="inpMain" />
        <textarea placeholder="评价内容" name="comment_content[]"  class="inpMain"><?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['1']['content']; ?>
</textarea>
       </dd>
      </dl>
      <dl>
       <dt>客户评价3</dt>
       <dd>
        <input type="text" name="comment[]" value="<?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['2']['title']; ?>
" placeholder="评价标题" size="35"   class="inpMain" />
        <textarea placeholder="评价内容" name="comment_content[]"  class="inpMain"><?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['2']['content']; ?>
</textarea>
       </dd>
      </dl>
      <dl>
       <dt>客户评价4</dt>
       <dd>
        <input type="text" name="comment[]" value="<?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['3']['title']; ?>
" placeholder="评价标题" size="35"   class="inpMain" />
        <textarea placeholder="评价内容" name="comment_content[]"  class="inpMain".contents_arr><?php echo $this->_tpl_vars['info']['contents_arr']['comment_new']['3']['content']; ?>
</textarea>
       </dd>
      </dl>

      
      <dl>
       <dt>最下方右侧标题</dt>
       <dd>
        <input type="text" name="bottom_right_title" value="<?php echo $this->_tpl_vars['info']['contents_arr']['bottom_right_title']; ?>
" size="135" placeholder="exp:3EYES 慧目堂"  class="inpMain" />
       </dd>
      </dl>

      <dl>
       <dt>最下方右侧内容</dt>
       <dd>
        <input type="text" name="bottom_right_content" value="<?php echo $this->_tpl_vars['info']['contents_arr']['bottom_right_content']; ?>
" size="135" placeholder="exp:全国知名的国际化品牌策划设计公司 近14年的实战"  class="inpMain" />
       </dd>
      </dl>

      <dl>
       <dt>客户评价背景PC</dt>
       <dd>
        <input type="file" name="comment_bg" size="28" />
           <?php if ($this->_tpl_vars['info']['contents_arr']['comment_bg']['url']): ?><a href='<?php echo $this->_tpl_vars['info']['contents_arr']['comment_bg']['url_format']; ?>
' target='_blank'><img src="images/icon_yes.png"></a><?php endif; ?>
           是否更新图片
           <label><input name="is_up_file_comment_bg" type="radio" value='1'/>更新</label>
           <label><input name="is_up_file1_comment_bg" type="radio" checked value="2"/>不更新</label>
       </dd>
      </dl>

      <dl>
       <dt>客户评价背景WAP</dt>
       <dd>
        <input type="file" name="comment_bg_m" size="28" />
           <?php if ($this->_tpl_vars['info']['contents_arr']['comment_bg_m']['url']): ?><a href='<?php echo $this->_tpl_vars['info']['contents_arr']['comment_bg_m']['url_format']; ?>
' target='_blank'><img src="images/icon_yes.png"></a><?php endif; ?>
           是否更新图片
           <label><input name="is_up_file_comment_bg_m" type="radio" value='1'/>更新</label>
           <label><input name="is_up_file_comment_bg_m" type="radio" checked value="2"/>不更新</label>
       </dd>
      </dl>

      <dl>
       <dt>最下方视频</dt>
       <dd>
        <input type="file" name="bottom_video" size="28" />
           <?php if ($this->_tpl_vars['info']['contents_arr']['bottom_video']['url']): ?><a href='<?php echo $this->_tpl_vars['info']['contents_arr']['bottom_video']['url_format']; ?>
' target='_blank'><img src="images/icon_yes.png"></a><?php endif; ?>
           是否更新图片
           <label><input name="is_up_file" type="radio" value='1'/>更新</label>
           <label><input name="is_up_file" type="radio" checked value="2"/>不更新</label>
       </dd>
      </dl>
	  
	  

      <dl>
       <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
       <input type="hidden" name="old_file_url" value="<?php echo $this->_tpl_vars['info']['contents_arr']['bottom_video']['url']; ?>
" />
       <input type="hidden" name="old_file_url_comment_bg" value="<?php echo $this->_tpl_vars['info']['contents_arr']['comment_bg']['url']; ?>
" />
       <input type="hidden" name="old_file_url_comment_bg_m" value="<?php echo $this->_tpl_vars['info']['contents_arr']['comment_bg_m']['url']; ?>
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
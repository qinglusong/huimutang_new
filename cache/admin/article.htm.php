<?php /* Smarty version 2.6.26, created on 2018-09-09 10:35:47
         compiled from article.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'article.htm', 54, false),)), $this); ?>
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
    <form action="article.php" method="post">
     <select name="cat_id">
      <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
      <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
     <input name="keyword" type="text" class="inpMain" value="<?php echo $this->_tpl_vars['keyword']; ?>
" size="20" />
     <input name="submit" class="btnGray" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_filter']; ?>
" />
    </form>
    <span>
    <?php if ($this->_tpl_vars['sort']['handle']): ?>
    <a class="btnGray" href="article.php?rec=sort&act=handle"><?php echo $this->_tpl_vars['lang']['sort_close']; ?>
</a>
    <?php else: ?>
    <a class="btnGray" href="article.php?rec=sort&act=handle"><?php echo $this->_tpl_vars['lang']['sort_article']; ?>
</a>
    <?php endif; ?>
    </span>
    </div>
    <?php if ($this->_tpl_vars['sort']['handle']): ?>
    <div class="homeSortRight">
     <ul class="homeSortBg">
      <?php echo $this->_tpl_vars['sort']['bg']; ?>

     </ul>
     <ul class="homeSortList">
      <?php $_from = $this->_tpl_vars['sort']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
      <li>
       <img src="<?php echo $this->_tpl_vars['article']['images']; ?>
" width="60" height="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 5, "") : smarty_modifier_truncate($_tmp, 5, "")); ?>

       <a href="article.php?rec=sort&act=cancel&id=<?php echo $this->_tpl_vars['article']['id']; ?>
" title="<?php echo $this->_tpl_vars['lang']['sort_cancel']; ?>
">X</a>
      </li>
      <?php endforeach; endif; unset($_from); ?>
     </ul>
    </div>
    <?php endif; ?>
    <div id="list"<?php if ($this->_tpl_vars['sort']['handle']): ?> class="homeSortLeft"<?php endif; ?>>
    <form name="action" method="post" action="article.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center"><?php echo $this->_tpl_vars['lang']['record_id']; ?>
</th>
      <th align="left"><?php echo $this->_tpl_vars['lang']['article_name']; ?>
</th>
      <th width="150" align="center"><?php echo $this->_tpl_vars['lang']['article_category']; ?>
</th>
      <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['add_time']; ?>
</th>
      <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</th>
     </tr>
     <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
     <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['article']['id']; ?>
" /></td>
      <td align="center"><?php echo $this->_tpl_vars['article']['id']; ?>
</td>
      <td><a href="article.php?rec=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a><?php if ($this->_tpl_vars['article']['image']): ?> <a href="<?php echo $this->_tpl_vars['article']['image']; ?>
" target="_blank"><img src="images/icon_picture.png" width="16" height="16" align="absMiddle"></a><?php endif; ?></td>
      <td align="center"><?php if ($this->_tpl_vars['article']['cat_name']): ?><a href="article.php?cat_id=<?php echo $this->_tpl_vars['article']['cat_id']; ?>
"><?php echo $this->_tpl_vars['article']['cat_name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
<?php endif; ?></td>
      <td align="center"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</td>
      <td align="center">
       <?php if ($this->_tpl_vars['sort']['handle']): ?>
       <a href="article.php?rec=sort&act=set&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['sort_btn']; ?>
</a>
       <?php else: ?>
       <a href="article.php?rec=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="article.php?rec=del&id=<?php echo $this->_tpl_vars['article']['id']; ?>
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
      <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
    <form action="article.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post" enctype="multipart/form-data">
     <div class="formBasic">
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['article_name']; ?>
</dt>
       <dd>
        <input type="text" name="title" value="<?php echo $this->_tpl_vars['article']['title']; ?>
" size="135" class="inpMain" />
       </dd>
      </dl>
	  <dl>
       <dt>英文名称</dt>
       <dd>
        <input type="text" name="en_title" value="<?php echo $this->_tpl_vars['article']['en_title']; ?>
" size="135" class="inpMain" />
       </dd>
      </dl>
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['article_category']; ?>
</dt>
       <dd>
        <select name="cat_id">
         <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
         <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
         <?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['article']['cat_id']): ?>
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
       </dd>
      </dl>
      <?php if ($this->_tpl_vars['article']['defined']): ?>
      <dl>
       <dt valign="top"><?php echo $this->_tpl_vars['lang']['article_defined']; ?>
</dt>
       <dd>
        <textarea name="defined" id="defined" cols="50" class="textAreaAuto" style="height:<?php echo $this->_tpl_vars['article']['defined_count']; ?>
0px"><?php echo $this->_tpl_vars['article']['defined']; ?>
</textarea>
        <script type="text/javascript">
         <?php echo '
          $("#defined").autoTextarea({maxHeight:300});
         '; ?>

        </script>
        </dd>
      </dl>
      <?php endif; ?>


      <dl>
       <dt valign="top"><?php echo $this->_tpl_vars['lang']['article_content']; ?>
</dt>
       <dd>
        <script id="editor" name="content" type="text/plain" style="width:1024px;height:500px;"><?php echo $this->_tpl_vars['article']['content']; ?>
</script>
       </dd>
      </dl>
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['thumb']; ?>
</dt>
       <dd>
        <input type="file" name="image" size="38" class="inpFlie" />
        <?php if ($this->_tpl_vars['article']['image']): ?><a href="<?php echo $this->_tpl_vars['article']['image']; ?>
" target="_blank"><img src="images/icon_yes.png"></a><?php else: ?><img src="images/icon_no.png"><?php endif; ?></dt>
      </dl>
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['keywords']; ?>
</dt>
       <dd>
        <input type="text" name="keywords" value="<?php echo $this->_tpl_vars['article']['keywords']; ?>
" size="135" class="inpMain" />
       </dd>
      </dl>
      <dl>
       <dt><?php echo $this->_tpl_vars['lang']['description']; ?>
</dt>
       <dd>
        <textarea name="description" cols="115" rows="3" class="textArea" /><?php echo $this->_tpl_vars['article']['description']; ?>
</textarea>
       </dd>
      </dl>
	  
	  <dl>
       <dt>自定义发布时间</dt>
       <dd>
        <input type='date' value='<?php echo $this->_tpl_vars['article']['add_date']; ?>
' name='add_date' />
       </dd>
      </dl>
	  
      <dl>
       <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
       <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['article']['image']; ?>
">
       <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
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
</body>
</html>
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
  '; ?>

</script>
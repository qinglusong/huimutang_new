<?php /* Smarty version 2.6.26, created on 2018-09-09 14:22:29
         compiled from page.htm */ ?>
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
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
    <div id="page">
     <?php $_from = $this->_tpl_vars['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page_list']):
?>
      <dl class="child<?php echo $this->_tpl_vars['page_list']['level']; ?>
">
        <dt><?php echo $this->_tpl_vars['page_list']['page_name']; ?>
<p><?php echo $this->_tpl_vars['page_list']['unique_id']; ?>
</p></dt>
        <dd><a href="page.php?rec=edit&id=<?php echo $this->_tpl_vars['page_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="page.php?rec=del&id=<?php echo $this->_tpl_vars['page_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a></dd>
      </dl>
     <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['rec'] == 'add' || $this->_tpl_vars['rec'] == 'edit'): ?>
    <form action="page.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="80" align="right"><?php echo $this->_tpl_vars['lang']['page_name']; ?>
</td>
       <td>
        <input type="text" name="page_name" value="<?php echo $this->_tpl_vars['page']['page_name']; ?>
" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['unique']; ?>
</td>
       <td>
        <input type="text" name="unique_id" value="<?php echo $this->_tpl_vars['page']['unique_id']; ?>
" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['parent']; ?>
</td>
       <td>
        <select name="parent_id">
         <option value="0"><?php echo $this->_tpl_vars['lang']['empty']; ?>
</option>
         <?php $_from = $this->_tpl_vars['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
         <?php if ($this->_tpl_vars['list']['id'] == $this->_tpl_vars['page']['parent_id']): ?>
         <option value="<?php echo $this->_tpl_vars['list']['id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['list']['mark']; ?>
 <?php echo $this->_tpl_vars['list']['page_name']; ?>
</option>
         <?php else: ?>
         <option value="<?php echo $this->_tpl_vars['list']['id']; ?>
"><?php echo $this->_tpl_vars['list']['mark']; ?>
 <?php echo $this->_tpl_vars['list']['page_name']; ?>
</option>
         <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?>
        </select>
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['page_content']; ?>
</td>
       <td>
        <script id="editor" name="content" type="text/plain" style="width:1024px;height:500px;"><?php echo $this->_tpl_vars['page']['content']; ?>
</script>
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['keywords']; ?>
</td>
       <td>
        <input type="text" name="keywords" value="<?php echo $this->_tpl_vars['page']['keywords']; ?>
" size="114" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['description']; ?>
</td>
       <td>
        <textarea name="description" cols="115" rows="3" class="textArea" /><?php echo $this->_tpl_vars['page']['description']; ?>
</textarea>
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['page']['id']; ?>
">
        <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
       </td>
      </tr>
     </table>
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
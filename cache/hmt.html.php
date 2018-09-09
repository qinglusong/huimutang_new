<?php /* Smarty version 2.6.26, created on 2018-09-09 14:22:09
         compiled from hmt.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link href="http://localhost/theme/huimutangs/images/css/hmt.css" rel="stylesheet">
    <div class="container flex-show flex-row bg-col-00">

        <div class="m-t-div mobile-show wow fadeInLeft">
            <p>慧目堂＞</p>
            <ul>
                <?php $_from = $this->_tpl_vars['pages_arr']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <li><a href='pages_<?php echo $this->_tpl_vars['item']['id']; ?>
.html' <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['pages_arr']['info']['id']): ?>class="select"<?php endif; ?>>><?php echo $this->_tpl_vars['item']['page_name']; ?>
</a></li>
                
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>

        <div class="con-l pc-show">
            <ul>
                <?php $_from = $this->_tpl_vars['pages_arr']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <li class="wow fadeInLeft" data-wow-delay="<?php echo ($this->_foreach['foo']['iteration']-1)+4; ?>
00ms"><a href='pages_<?php echo $this->_tpl_vars['item']['id']; ?>
.html' <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['pages_arr']['info']['id']): ?>class="select"<?php endif; ?>><?php echo $this->_tpl_vars['item']['page_name']; ?>
 | <?php echo $this->_tpl_vars['item']['unique_id']; ?>
 |</a></li>
                
            <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
        <div class="con-r wow fadeInRight">
            <div class="title-s wow fadeInRight"><?php echo $this->_tpl_vars['pages_arr']['info']['unique_id']; ?>
</div>
        <div class="title-m wow fadeInRight" data-wow-delay="400ms"><?php echo $this->_tpl_vars['pages_arr']['info']['page_name']; ?>
</div>
            <?php echo $this->_tpl_vars['pages_arr']['info']['content']; ?>

        </div>
    </div>

    <div class="bottm-tool mobile-show flex-show flex-row ">
        <div><a href="/"><img src="http://localhost/theme/huimutang/images/imgs/m/m_hmt_b1.png"></a></div>
        <div><a href="pages_<?php echo $this->_tpl_vars['pages_arr']['list'][$this->_tpl_vars['page_up']]['id']; ?>
.html"><img src="http://localhost/theme/huimutang/images/imgs/m/m_hmt_b2.png"></a></div>
        <div><a href="pages_<?php echo $this->_tpl_vars['pages_arr']['list'][$this->_tpl_vars['page_down']]['id']; ?>
.html"><img src="http://localhost/theme/huimutang/images/imgs/m/m_hmt_b3.png"></a></div>
        <div class='toolbar-top'><a><img src="http://localhost/theme/huimutang/images/imgs/m/m_hmt_b4.png"></a></div>
    </div>
    

    <!-- footer -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
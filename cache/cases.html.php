<?php /* Smarty version 2.6.26, created on 2018-09-10 18:16:36
         compiled from cases.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'cases.html', 97, false),)), $this); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


  <link href="http://www.3e-d.com/theme/huimutangs/images/css/cases.css" rel="stylesheet">
    

  <div class="case-gallery">
        <div class="pc-show case-list-special bg-col-01 swiper-container">
            <div class="swiper-wrapper">

                <?php $_from = $this->_tpl_vars['product']['img_pc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <div class="swiper-slide">
                    <div class="img_div_pc"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                </div>
                <?php endforeach; endif; unset($_from); ?>



            </div>
            
             Add Arrows
            <div class="swiper-button-next swiper-button-red"></div>
            <div class="swiper-button-prev swiper-button-red"></div>
            <!--</div>-->
        </div>

        <div class="mobile-show swiper-container">
            <div class="swiper-wrapper">
              <?php $_from = $this->_tpl_vars['product']['img_wap_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <div class="swiper-slide">
                    <div class=""><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                </div>
               <?php endforeach; endif; unset($_from); ?>


            </div>
            <div class="swiper-button-next swiper-button-red"></div>
            <div class="swiper-button-prev swiper-button-red"></div>
        </div>
    </div>

    <div class="content bg-col-00">
        <div class="container">
            <div class="row">
                <div class="content-wrap">

                    <div class="tt-swiper case-list">
                    <!-- Swiper -->
                        <div class="swiper-slide">
                          <div class="en-title"><?php echo $this->_tpl_vars['product']['en_name']; ?>
</div>
                          <h2><?php echo $this->_tpl_vars['product']['name']; ?>
</h2>
                          <div class="clearfix"></div>
                          <h3><?php echo $this->_tpl_vars['product']['price']; ?>
</h3>
                          <p class="subtitle"><?php $_from = $this->_tpl_vars['product_cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><a href='case_<?php echo $this->_tpl_vars['item']['parent_id']; ?>
_<?php echo $this->_tpl_vars['item']['cat_id']; ?>
_1.html'><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a>&nbsp;<?php endforeach; endif; unset($_from); ?></p>
                          <div class="title-top"><p class="tip pc-share"><span>分享</span></p></div>
                          <div class="description">
                            <?php echo $this->_tpl_vars['product']['content']; ?>

                          </div>
                        </div>
                  </div>

                </div>
            </div>
        </div>

        <div class="right-tool mobile-show">
            <div class="tool-item">
                <a class="back" href="/"><i></i></a>
        <a class="right" <?php if ($this->_tpl_vars['lifts']['previous']['id']): ?>href="case_info_<?php echo $this->_tpl_vars['lifts']['previous']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="left" <?php if ($this->_tpl_vars['lifts']['next']['id']): ?>href="case_info_<?php echo $this->_tpl_vars['lifts']['next']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="top" href="####"><i></i></a>
            </div>
        </div>
    </div>








  
  <div class="content bg-3">
    <div class="section-title wow fadeInUp" data-wow-delay="100ms">
      <h2>相关案例</h2>
      <p style="color: #666;">RELATED CASES</p>
    </div>
    <div class="class-con">
      <div class="bg-4-c flex-show flex-row">


        <?php $_from = $this->_tpl_vars['product_related_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
        <a href="case_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html">
          <div class="bg-4-c-m wow fadeInUp news-panel-focus" data-wow-delay="<?php echo $this->_tpl_vars['key']+1; ?>
00ms">
            <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
            <p class="bg-4m-t1"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 24) : smarty_modifier_truncate($_tmp, 24)); ?>
</p>
            <p class="bg-4m-t2"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 24) : smarty_modifier_truncate($_tmp, 24)); ?>
</p>
          </div>
        </a>
        <?php endforeach; endif; unset($_from); ?>





      </div>
    </div>
  </div>
  <!-- footer -->
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <script type="text/javascript" src="http://www.3e-d.com/theme/huimutangs/images/js/cases.js"></script>
<?php /* Smarty version 2.6.26, created on 2018-09-09 18:18:31
         compiled from news.html */ ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link href="http://localhost/theme/huimutang/images/css/news.css" rel="stylesheet">
    <div class="info_bg">
      <div class="swiper-container news-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div>
              <div class="title-top wow fadeInRight"><div><?php echo $this->_tpl_vars['article']['en_title']; ?>
</div> <h2><?php echo $this->_tpl_vars['article']['title']; ?>
</h2><p class="tip"><?php echo $this->_tpl_vars['article']['add_date']; ?>
 <span>分享</span></p></div>
                <div class="flex-show flex-row pc-tip pc-show">
                    <div><?php echo $this->_tpl_vars['article']['add_date']; ?>
</div>
                    <a class="share-but flex-show flex-row">
                        <div><img src="http://localhost/theme/huimutangs/images/imgs/share.png"> </div>
                        <div>分享</div>
                    </a>
                </div>
              <div class="content wow fadeIn">
                <div class="txt-cont">
                  <?php echo $this->_tpl_vars['article']['content']; ?>

                </div>
                <!--<div class="img-cont">
                  <img src="" />
                  <img src="" />
                  <img src="" />
                </div>-->
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
    <div class="right-tool wap-show">
      <div class="tool-item">
        <a class="back" href="news_0_1.html"><i></i></a>
        <a class="left" <?php if ($this->_tpl_vars['lifts']['next']['id']): ?>href="news_info_<?php echo $this->_tpl_vars['lifts']['next']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="right" <?php if ($this->_tpl_vars['lifts']['previous']['id']): ?>href="news_info_<?php echo $this->_tpl_vars['lifts']['previous']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        
        <a class="top" href="#"><i></i></a>
      </div>
    </div>
    <!-- footer -->
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <script type="text/javascript" src="http://localhost/theme/huimutangs/images/js/news.js"></script>
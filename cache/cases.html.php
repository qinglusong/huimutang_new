<?php /* Smarty version 2.6.26, created on 2018-09-08 14:43:59
         compiled from cases.html */ ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <link href="http://localhost/theme/huimutang/images/css/cases.css" rel="stylesheet">
  
  <div class="case-list-special bg-col-01">
    <div class="tt-swiper case-gallery text-center">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
		
		
		<?php $_from = $this->_tpl_vars['product']['img_pc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
          <div class="swiper-slide">
            <a href="javascript:;"> <img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
" alt="" /></a>
            <div class="layer-mask"></div>
          </div>
        <?php endforeach; endif; unset($_from); ?>
          
          
        </div>
      </div>
      
      <!-- Add Pagination -->
      <div class="swiper-pagination hide"></div>
      <!-- Add Arrows -->
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
</a>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></p>
                  <div class="title-top"><p class="tip"><span>分享</span></p></div>
                  <div class="description">
                    <?php echo $this->_tpl_vars['product']['content']; ?>

                  </div>
                </div>
          </div>
        
        </div>
      </div>
    </div>
  

  </div>
  
  <div class="right-tool fixed">
  <div class="tool-item">
    <a class="back" href="case_1_0_1.html"><i></i></a>
        <a class="right" <?php if ($this->_tpl_vars['lifts']['previous']['id']): ?>href="case_info_<?php echo $this->_tpl_vars['lifts']['previous']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="left" <?php if ($this->_tpl_vars['lifts']['next']['id']): ?>href="case_info_<?php echo $this->_tpl_vars['lifts']['next']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="top" href="####"><i></i></a>
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
            <p class="bg-4m-t1"><?php echo $this->_tpl_vars['item']['name']; ?>
</p>
            <p class="bg-4m-t2"><?php echo $this->_tpl_vars['item']['price']; ?>
</p>
          </div>
        </a>
        <?php endforeach; endif; unset($_from); ?>
		
		
		
      </div>
    </div>
  </div>
  <!-- footer -->
  <div class="footer-nav flex-column pc-show flex-show">
    <div class="footer-div1 wow fadeInRight">
      <ul class="">
        <li class="">
          <a href="">首页</a>
        </li>
        <li class="">
          <a href="">慧目堂</a>
        </li>
        <li>
          <a href="">案例</a>
        </li>
        <li>
          <a href="">服务</a>
        </li>
        <li>
          <a href="">资讯</a>
        </li>
        <li>
          <a href="">联系</a>
        </li>
        <li class="li_border_r">
          <a href="">年度咨询</a>
        </li>
        <li class="li_border_r">
          <a style="border-left: none" class="none-border-l" href="">项目咨询</a>
        </li>
      </ul>
    </div>
    
    <nav class="footer-div2 pc-show flex-show flex-row">
      <div class="footer2-l wow fadeInLeft" >
        <div>友情链接</div>
        <ul class="">
          <li><a href="/">北京卫生间隔断</a></li>
          <li><a href="/">北京展览展示公司</a></li>
          <li>
            <a href="">软装设计</a>
          </li>
          
          <li>
            <a href="">深圳国际商标注册</a>
          </li>
          <li>
            <a href="">大连品牌设计</a>
          </li>
          <li>
            <a href="">上海展台设计</a>
          </li>
          <li>
            <a href="">儿童乐园设备</a>
          </li>
          <li>
            <a href="">上海展台搭建</a>
          </li>
          <li>
            <a href="">西安专利申请</a>
          </li>
          <li>
            <a href="">石家庄网络推广</a>
          </li>
          <li>
            <a href="">郑州婚纱摄影</a>
          </li>
          <li>
            <a href="">凭证装订机</a>
          </li>
        
        </ul>
        <div>
          <div>联系我们</div>
          <ul class="">
            <li>业务咨询：021-39888336</li>
            <li>
              商务推介：021-39888279
            </li>
            <li>
              QQ：2880670804
            </li>
            <li>
              E-mail：7design@163.com
            </li>
            <li>地址：c上海市 诸光路1588弄 虹桥世界中心 L3A-405</li>
          </ul>
        </div>
      </div>
      
      <div class="footer2-r wow fadeInRight">
        <div><img src="http://localhost/theme/huimutang/images/imgs/pc_qm.png" ></div>
        <p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
        <p>版权所有 沪ICP备16026508号   沪公网安备 31011202002497</p>
      </div>
    </nav>
  </div>
  <nav class="m-footer-nav mobile-show">
    <div class="wow fadeInLeft"><img src="http://localhost/theme/huimutang/images/imgs/m/b-tit-img.png"></div>
    <div class="wow fadeInLeft" data-wow-delay="100ms"><img src="http://localhost/theme/huimutang/images/imgs/m/b-img2.png"></div>
    <div class="wow fadeInRight" data-wow-delay="200ms"><img src="http://localhost/theme/huimutang/images/imgs/m/qianming.png"></div>
    <p class="wow fadeInLeft" data-wow-delay="300ms">Copyright © 2004-2018 Shanghai Three Eyes Art</p>
    <p class="wow fadeInLeft" data-wow-delay="350ms">Design Co.,Ltd.  All Rights Reserved © 版权所有</p>
    <p class="wow fadeInLeft" data-wow-delay="400ms">沪ICP备16026508号</p>
    <p class="wow fadeInLeft"data-wow-delay="450ms">沪公网安备 31011202002497号</p>
  </nav>
</div>
<div class="right-tool fixed">
  <div class="tool-item">
    <a class="back" href="case_1_0_1.html"><i></i></a>
        <a class="right" <?php if ($this->_tpl_vars['lifts']['previous']['id']): ?>href="case_info_<?php echo $this->_tpl_vars['lifts']['previous']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="left" <?php if ($this->_tpl_vars['lifts']['next']['id']): ?>href="case_info_<?php echo $this->_tpl_vars['lifts']['next']['id']; ?>
.html" <?php else: ?> href='javascript:;'<?php endif; ?>><i></i></a>
        <a class="top" href="####"><i></i></a>
  </div>
</div>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/zoom.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/tool.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/global.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/cases.js"></script>
</body>
</html>
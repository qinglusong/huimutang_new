<?php /* Smarty version 2.6.26, created on 2018-09-08 14:42:51
         compiled from inc/footer.tpl */ ?>
   <div class="footer-nav flex-column pc-show flex-show">
        <div class="footer-div1 wow fadeInRight">
            <ul class="">
                <li class="">
                    <a href="/">首页</a>
                </li>
				
				<?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
				<li class="">
					<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
				</li>
				
				<?php endforeach; endif; unset($_from); ?>
			   
			   <?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
				<li class="li_border_r">
					<a <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>style="border-left: none" class="none-border-l"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
				</li>
				<?php endforeach; endif; unset($_from); ?>
			   
            </ul>
        </div>

        <nav class="footer-div2 pc-show flex-show flex-row">
            <div class="footer2-l wow fadeInLeft" >
                <div>友情链接</div>
                <ul class="">
				
				
                    <?php $_from = $this->_tpl_vars['friend_link_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<li>
						<a target='_blank' href="<?php echo $this->_tpl_vars['item']['link_url']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
					</li>
					
					<?php endforeach; endif; unset($_from); ?>
                    

                </ul>
                <div>
                    <div>联系我们</div>
                    <ul class="">
                        <li>业务咨询：<?php echo $this->_tpl_vars['site']['tel']; ?>
</li>
                        <li>
                            商务推介：<?php echo $this->_tpl_vars['site']['tel_commerce']; ?>

                        </li>
                        <li>
                            QQ：<?php echo $this->_tpl_vars['site']['qqcode']; ?>

                        </li>
                        <li>
                            E-mail：<?php echo $this->_tpl_vars['site']['email']; ?>

                        </li>
                        <li>地址：<?php echo $this->_tpl_vars['site']['site_address']; ?>
</li>
                    </ul>
                </div>
            </div>

            <div class="footer2-r wow fadeInRight">
                <div><img src="http://localhost/theme/huimutang/images/imgs/pc_qm.png" ></div>
                <p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
                <p>版权所有 <?php echo $this->_tpl_vars['site']['icp']; ?>
   沪公网安备 31011202002497</p>
            </div>
        </nav>
    </div>
    <nav class="m-footer-nav mobile-show">
        <div class="wow fadeInLeft"><img src="http://localhost/theme/huimutang/images/imgs/m/b-tit-img.png"></div>
        <div class="wow fadeInLeft" data-wow-delay="100ms"><img src="http://localhost/theme/huimutang/images/imgs/m/b-img2.png"></div>
        <div class="wow fadeInRight" data-wow-delay="200ms"><img src="http://localhost/theme/huimutang/images/imgs/m/qianming.png"></div>
        <p class="wow fadeInLeft" data-wow-delay="300ms">Copyright © 2004-2018 Shanghai Three Eyes Art</p>
        <p class="wow fadeInLeft" data-wow-delay="350ms">Design Co.,Ltd.  All Rights Reserved © 版权所有</p>
        <p class="wow fadeInLeft" data-wow-delay="400ms"><?php echo $this->_tpl_vars['site']['icp']; ?>
</p>
        <p class="wow fadeInLeft"data-wow-delay="450ms">沪公网安备 31011202002497号</p>
    </nav>
</div>
<div id="J_MobileNavBar" class="mobile-show">
    <div id="alert-cls2" class="cls-btn"><img src="http://localhost/theme/huimutang/images/imgs/m/close_img.png"></div>
    <ul class="flex-column">
        <li class="">
            <a href="/">首页</a>
        </li>
        
		<?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<li class="">
			<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
		</li>
		
		<?php endforeach; endif; unset($_from); ?>
		
		<?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
		<li class="">
			<a  href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
		</li>
		<?php endforeach; endif; unset($_from); ?>
        
    </ul>
</div>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/zoom.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/tool.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/global.js"></script>
</body>
</html>
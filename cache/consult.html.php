<?php /* Smarty version 2.6.26, created on 2018-09-09 18:56:04
         compiled from consult.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'consult.html', 217, false),)), $this); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>项目咨询 |<?php echo $this->_tpl_vars['page_title']; ?>
</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.0/css/swiper.min.css">
    <script type="text/javascript" src="http://localhost/theme/huimutangs/images/js/wow.js"></script>
    <link href="http://localhost/theme/huimutangs/images/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutangs/images/css/swiper.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutangs/images/css/tool.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutangs/images/css/consult.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutangs/images/css/case.css" rel="stylesheet">

</head>
<body>
<div class="header zoom-div mobile-show">
    <div class="flex-show m-title">
        <div class="m-title-img-div">
            <a class="pc-show" href="/"><img src="http://localhost/theme/huimutangs/images/imgs/logo-red.png" alt="慧目堂" title="慧目堂"></a>
            <a class="mobile-show" href="/"><img src="http://localhost/theme/huimutangs/images/imgs/m/title-img-w.png" alt="慧目堂" title="慧目堂"></a>
        </div>
        <div class="flex-show flex-row">
            <span><a href="tel:<?php echo $this->_tpl_vars['site']['tel']; ?>
"><img src="http://localhost/theme/huimutangs/images/imgs/phone.png" alt=""></a></span>
            <span id="J_MobileNavTrigger3"><img src="http://localhost/theme/huimutangs/images/imgs/burger.png" alt=""></span>
        </div>
    </div>
</div>

<div class="container zoom-div">
    <div class="bg_01">
        <header class="pc_header flex-show flex-row pc-show">
            <div class="pc-show flex-show pc-logo wow fadeInLeft">
                <a href="/"><img src="http://localhost/theme/huimutangs/images/imgs/logo.png" alt="慧目堂" title="慧目堂"></a>
            </div>
            <div class="title-right wow fadeInRight">
                <div class=" flex-column flex-right pc-show flex-show">
                    <div class="pc-logo-right">
                        <div class="pc-r-logo">
                            <div class="rlogo-l">
                                <p>中法国际合作</p>
                                <p>中国十佳最具创新力策划机构</p>
                            </div>
                            <div class="rlogo-r consult">
                                <div><img src="http://localhost/theme/huimutangs/images/imgs/r_logo2.png"></div>
                                <div>上海银行指定供应商</div>
                            </div>
                        </div>
                    </div>
                    <nav class="nav">
                        <ul class="flex-row">
                            <li>
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
                            <li class="li_border_r <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>left<?php endif; ?>">
                                <a <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>style="border-left: none"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                            </li>
                            <?php endforeach; endif; unset($_from); ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div id="consult_sp1" class="swiper-container pc-show">
            <div class="swiper-wrapper">





<?php $_from = $this->_tpl_vars['show_pc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>



                <div class="swiper-slide">
                    <img class="pc-show" src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
">
                    <div class="w-p <?php if ($this->_tpl_vars['item']['style_banner'] == 2): ?>w-p-l <?php endif; ?> <?php if ($this->_tpl_vars['item']['style_banner'] == 3): ?>w-p-r <?php endif; ?> <?php if ($this->_tpl_vars['item']['style_banner'] == 1): ?>w-p-m<?php endif; ?>">
                        <p class="rl-e1 pc-show ani wow fadeInUp"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                        <p class="rl-e2 ani wow fadeInDown"><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                        <p class="rl-e3 ani wow fadeInDown"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                    </div>
                </div>
<?php endforeach; endif; unset($_from); ?>
              






            </div>
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-black hide"></div>
            <div class="swiper-button-prev swiper-button-black hide"></div>
        </div>


        <div id="consult_sp2" class="swiper-container mobile-show">
            <div class="swiper-wrapper">

<?php $_from = $this->_tpl_vars['show_mobile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>



                <div class="swiper-slide">
                    <img class="mobile-show" src="http://localhost/theme/huimutangs/images/imgs/m/consult-t.jpg">
                    <div class="w-p <?php if ($this->_tpl_vars['item']['style_banner'] == 2): ?>w-p-l <?php endif; ?> <?php if ($this->_tpl_vars['item']['style_banner'] == 3): ?>w-p-r <?php endif; ?> <?php if ($this->_tpl_vars['item']['style_banner'] == 1): ?>w-p-m<?php endif; ?>">
                    <p class="m-rl-e1 mobile-show"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                        <p class="rl-e2 ani wow fadeInDown"><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                        <p class="rl-e3 ani wow fadeInDown"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                    </div>
                </div>
<?php endforeach; endif; unset($_from); ?>




            </div>
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <!--<div class="swiper-button-next swiper-button-black hide"></div>-->
            <!--<div class="swiper-button-prev swiper-button-black hide"></div>-->
        </div>

    </div>

    <div class="bg_02 flex-show flex-row pc-show wow fadeInUp">
        <div>
            <img src="http://localhost/theme/huimutangs/images/imgs/logo2.png">
        </div>
        <p>慧目堂</p>
        <p><?php echo $this->_tpl_vars['site']['ad_title']; ?>
</p>
    </div>

    <div class="bg_02 flex-show mobile-show flex-column wow fadeInUp">
        <div class="flex-show flex-row wow fadeInUp">
            <div>
                <img src="http://localhost/theme/huimutangs/images/imgs/logo2.png">
            </div>
            <p>慧目堂</p>
        </div>
        <p><?php echo $this->_tpl_vars['site']['ad_title']; ?>
</p>
    </div>

    <div class="bg_03">
        <p class="t-p1 wow fadeInUp">核心产品</p>
        <p class="t-p2 wow fadeInUp">CORE PRODUCT</p>
        <div class="b3-bg1 wow fadeInUp">
            <div class="b3-con news-panel-focus">
                <div class="b3-con-c1 news-panel-focus-img"><img src="http://localhost/theme/huimutangs/images/imgs/con-s1.png"></div>
                <p class="b3-con-c2"><?php echo $this->_tpl_vars['site']['core_product_arr']['0']; ?>
</p>
                <p class="b3-con-c3 pc-show">STRATEGIC POSITIONING</p>
            </div>
            <div class="b3-con news-panel-focus">
                <div class="b3-con-c1 news-panel-focus-img"><img src="http://localhost/theme/huimutangs/images/imgs/con-s2.png"></div>
                <p class="b3-con-c2"><?php echo $this->_tpl_vars['site']['core_product_arr']['1']; ?>
</p>
                <p class="b3-con-c2-1 pc-show">(VI形象，产品包装，SI店面)</p>
                <p class="b3-con-c2-1 mobile-show">VI形象 产品包装 SI店面</p>
                <p class="b3-con-c3 pc-show">VI IMAGE DESIGN</p>
            </div>
            <div class="b3-con news-panel-focus">
                <div class="b3-con-c1 news-panel-focus-img"><img src="http://localhost/theme/huimutangs/images/imgs/con-s3.png"></div>
                <p class="b3-con-c2"><?php echo $this->_tpl_vars['site']['core_product_arr']['2']; ?>
</p>
                <p class="b3-con-c3 pc-show">GROUND PROMOTION</p>
            </div>
        </div>
    </div>


    <div class="bg_02 pc-show flex-show flex-row wow fadeInUp">
        <div>
            <img src="http://localhost/theme/huimutangs/images/imgs/logo2.png">
        </div>
        <p>慧目堂</p>
        <p><?php echo $this->_tpl_vars['site']['ad_title_two']; ?>
</p>
    </div>

    <div class="bg_02 flex-show mobile-show flex-column wow fadeInUp">
        <div class="flex-show mobile-show flex-row wow fadeInUp">
            <div>
                <img src="http://localhost/theme/huimutangs/images/imgs/logo2.png">
            </div>
            <p>慧目堂</p>
        </div>
        <p><?php echo $this->_tpl_vars['site']['ad_title_two']; ?>
</p>
    </div>


    <div class="bg_04">
        <p class="t-p1 wow fadeInUp">案例展示</p>
        <p class="t-p2 wow fadeInUp">CASE DISPLAY</p>




        <div class="bg-4-c flex-row">





            <?php $_from = $this->_tpl_vars['recommend_product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <div onclick="location.href='case_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html';" class="bg-4-c-m wow fadeInUp news-panel-focus" data-wow-delay="<?php echo $this->_tpl_vars['key']+1; ?>
00ms">
                    <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
                    <p class="bg-4m-t1"><?php if ($this->_tpl_vars['item']['name']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '') : smarty_modifier_truncate($_tmp, 20, '')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '') : smarty_modifier_truncate($_tmp, 20, '')); ?>
<?php endif; ?></p>
                    <p class="bg-4m-t2"><?php if ($this->_tpl_vars['item']['price_jieshao']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price_jieshao'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '') : smarty_modifier_truncate($_tmp, 20, '')); ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?></p>
                </div>
                <?php if (( $this->_tpl_vars['key']+1 ) % 3 == 0): ?>
                </div>
            
                <div class="bg-4-c flex-row">
                <?php endif; ?>

                <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>
                </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>



        <div onclick="location.href='case_1_0_1.html';" class="con-btn qus-color1"><a>更多案例</a></div>
    </div>


    <div class="bg_05 wow fadeIn">
        <p class="t-p1">最新资讯</p>
        <p class="t-p2">LATEST INFORMATION</p>
        <div class="bg-4-c flex-row">







        <?php $_from = $this->_tpl_vars['recommend_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php if (($this->_foreach['foo']['iteration']-1) < 3): ?>
            <div onclick="location.href='news_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html';" class="bg-4-c-m news-panel-focus">
                <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
                <p class="bg-4m-t1"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 12, "") : smarty_modifier_truncate($_tmp, 12, "")); ?>
</p>
                <p class="bg-4m-t2"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</p>
                <p class="bg-4m-t3"><?php echo $this->_tpl_vars['item']['add_date']; ?>
</p>
            </div>
            <?php else: ?>




            <div onclick="location.href='news_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html';" class="bg-4-c-m news-panel-focus mobile-show flex-column">
                <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
                <p class="bg-4m-t1"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 12, "") : smarty_modifier_truncate($_tmp, 12, "")); ?>
</p>
                <p class="bg-4m-t2"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</p>
                <p class="bg-4m-t3"><?php echo $this->_tpl_vars['item']['add_date']; ?>
</p>
            </div>
            <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>













        </div>
        <div onclick="location.href='news_0_1.html';" class="con-btn qus-color1">更多资讯</div>
    </div>


    <div class="bg_06 mobile-show">
        <div class="back-img"><img src="<?php echo $this->_tpl_vars['info']['bottom_comment_file']; ?>
"></div>
        <div class="bg-06-com">
            <p class="t-p1">客户评价</p>
            <p class="t-p2">CUSTOMER EVALUATION</p>
            <div class="bg6-con-div flex-row">




                <?php $_from = $this->_tpl_vars['info']['contents_arr']['comment_new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <div class="bg6-con wow fadeInUp" data-wow-delay="<?php echo ($this->_foreach['foo']['iteration']-1); ?>
00ms">
                    <h2><?php echo $this->_tpl_vars['item']['title']; ?>
</h2>
                    <p><?php echo $this->_tpl_vars['item']['content']; ?>
</p>
                </div>
                <?php endforeach; endif; unset($_from); ?>



            </div>
        </div>
    </div>

    <div class="bg_06 pc-show">
        <div class="back-img"><img src="<?php echo $this->_tpl_vars['info']['bottom_comment_m_file']; ?>
"></div>
        <div class="bg-06-com">
            <p class="t-p1">客户评价</p>
            <p class="t-p2">CUSTOMER EVALUATION</p>
            <div class="bg6-con-div flex-row">

                <?php $_from = $this->_tpl_vars['info']['contents_arr']['comment_new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <div class="bg6-con wow fadeInUp" data-wow-delay="<?php echo ($this->_foreach['foo']['iteration']-1); ?>
00ms">
                    <h2><?php echo $this->_tpl_vars['item']['title']; ?>
</h2>
                    <p><?php echo $this->_tpl_vars['item']['content']; ?>
</p>
                </div>
                <?php endforeach; endif; unset($_from); ?>



            </div>
        </div>
    </div>

    <div class="bg_07 flex-row">
        <div class="video-div wow fadeInLeft">
            <div><iframe height=500 width=954 src='http://player.youku.com/embed/XMzgxMzE4NzgzMg==' frameborder=0 'allowfullscreen'></iframe></div>
            <div class="v-btn"><img src="http://localhost/theme/huimutangs/images/imgs/v-btn.jpg"></div>
        </div>
        <div class="bg7-txt wow fadeInRight">
            <h1><?php echo $this->_tpl_vars['info']['contents_arr']['bottom_right_title']; ?>
</h1>
            <p> <?php echo $this->_tpl_vars['info']['contents_arr']['bottom_right_content']; ?>

            </p>
        </div>
    </div>

    <!-- footer -->
    <div class="footer-nav flex-column pc-show flex-show">
        <div class="footer-div1 wow fadeInRight">
            <ul class="">
                <li class="">
                    <a href="/">首页</a>
                </li>
                

                <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>

                <li>
                    <a href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                </li>

                
                <?php endforeach; endif; unset($_from); ?>


                <?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <li class="li_border_r ">
                    <a <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>class="none-border-l"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>

        <nav class="footer-div2 pc-show flex-show flex-row">
            <div class="footer2-l wow fadeInLeft">
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
                    <ul >
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
                <div><img src="http://localhost/theme/huimutangs/images/imgs/pc_qm.png"></div>
                <p>Copyright 2004-2017 Shanghai Three Eyes Art Design Co.,Ltd. All Rights Reserved</p>
                <p>版权所有 <?php echo $this->_tpl_vars['site']['icp']; ?>
 沪公网安备 31011202002497</p>
            </div>
        </nav>
    </div>
    <nav class="m-footer-nav mobile-show">
        <div class="wow fadeInLeft"><img src="http://localhost/theme/huimutangs/images/imgs/m/b-tit-img.png"></div>
        <div class="wow fadeInLeft" data-wow-delay="100ms"><img src="http://localhost/theme/huimutangs/images/imgs/m/b-img2.png"></div>
        <div class="wow fadeInRight" data-wow-delay="200ms"><img src="http://localhost/theme/huimutangs/images/imgs/m/qianming.png"></div>
        <p class="wow fadeInLeft" data-wow-delay="300ms">Copyright © 2004-2018 Shanghai Three Eyes Art</p>
        <p class="wow fadeInLeft" data-wow-delay="350ms">Design Co.,Ltd. All Rights Reserved © 版权所有</p>
        <p class="wow fadeInLeft" data-wow-delay="400ms"><?php echo $this->_tpl_vars['site']['icp']; ?>
</p>
        <p class="wow fadeInLeft" data-wow-delay="450ms">沪公网安备 31011202002497号</p>
    </nav>

</div>

<div class="tt-toolbar pc-show">
    <div class="tt-toolbar-item toolbar-wx">
        <a href="####"><i></i></a>
        <div class="showDetail wx-detail">
            <div class="wx">
                <p>扫一扫关注</p>
                <p>慧目堂微信公众号</p>
                <div style="margin-top: 8px;">
                    <img src="http://localhost/theme/huimutangs/images/imgs/ewm.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="tt-toolbar-item toolbar-wb">
        <a target='_blank' href="https://weibo.com/3eyesbrand?refer_flag=1001030101_&is_all=1"><i></i></a>
    </div>
    <div class="tt-toolbar-item toolbar-lx">
        <a href="####"><i></i></a>
        <div class="showDetail lx-detail">
            <div class="lx">
                <span class="sun"></span>
                <p>客户咨询：</p>
                <p class="fnt-orange"><?php echo $this->_tpl_vars['site']['tel']; ?>
</p>
                <p>供应合作：</p>
                <p class="fnt-orange"><?php echo $this->_tpl_vars['site']['tel_commerce']; ?>
</p>
                <p>公司招聘</p>
                <a class="fnt-orange" href="pages_6.html">招聘岗位查询>>></a>
            </div>
        </div>
    </div>
    <div class="tt-toolbar-item toolbar-top">
        <a href="####"><i></i></a>
    </div>
</div>


<div id="J_MobileNavBar">
    <div id="alert-cls2" class="cls-btn"><img src="http://localhost/theme/huimutangs/images/imgs/m/close_img.png"></div>
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
<script type="text/javascript" src="http://localhost/theme/huimutangs/images/js/zoom.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutangs/images/js/tool.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutangs/images/js/global.js"></script>
</body>
</html>
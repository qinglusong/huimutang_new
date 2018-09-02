<?php /* Smarty version 2.6.26, created on 2018-09-02 21:34:01
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.html', 515, false),)), $this); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="https://cdn.bootcss.com/popper.http://localhost/theme/huimutang/images/js/1.14.3/esm/popper.min.js"></script>-->
    <!--<script src="https://cdn.bootcss.com/bootstrap/4.1.1/http://localhost/theme/huimutang/images/js/bootstrap.min.js"></script>-->
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
    <link href="http://localhost/theme/huimutang/images/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/swiper.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/style.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/index.css" rel="stylesheet">
</head>
<body>
<header class="main-header wap-header fixed" style="display: none;">
        <div class="container zoom-div">
            <div class="row">
               <div class="pull-left main-header-logo hidden-sm hidden-xs">
                    <a href="/"><img src="http://localhost/theme/huimutang/images/imgs/logo.png" alt="慧目堂" title="慧目堂"></a>
                </div>

                <div class="pull-left main-header-logo-mobile hidden-lg hidden-md">
                    <a href="/" class="flex"><img src="http://localhost/theme/huimutang/images/imgs/logov.png" alt="慧目堂" title="慧目堂"><img class="m-logotxt" src="http://localhost/theme/huimutang/images/imgs/m/title-img-rw.png"></a>
                </div>
                <div class="pull-right main-header-right">
                    <div class="pull-right main-header-extra ">
                        <div class="mobile-toggle hidden-lg">
                            <span><a href="tel:02158878218"><img src="http://localhost/theme/huimutang/images/imgs/phone.png" alt=""></a></span>
                            <span id="J_MobileNavTrigger"><img src="http://localhost/theme/huimutang/images/imgs/burger.png" alt=""></span>
                        </div>
                        <div class="pull-right hidden-md hidden-sm hidden-xs">
                            <div class="hhbank"><img src="http://localhost/theme/huimutang/images/imgs/h_right.png"></div>
                            <nav class="hidden-md hidden-sm hidden-xs nav">
                                <div class="row">
                                    <div class="main-header-nav">
                                        <ul class="j-navbar-menu list-unstyled navbar-menu clearfix">
                                            <li class="">
                                                <a href="/">首页</a>
                                            </li>


                                            <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>

                                            <li class="">
                                                <a href="<?php echo $this->_tpl_vars['item']['nav_name']; ?>
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
                                                <a <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>style="border-left: none"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                                            </li>
                                            <?php endforeach; endif; unset($_from); ?>


                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
<div class="container zoom-div">
<div class="body-img"><img src="http://localhost/theme/huimutang/images/imgs/m/body-img.jpg"></div>
<div class="content" id="head-top">
    <header class="main-header pc-header">
        <div class="container">
            <div class="row">
               <div class="pull-left main-header-logo hidden-sm hidden-xs">
                    <a href="/"><img src="http://localhost/theme/huimutang/images/imgs/logo.png" alt="慧目堂" title="慧目堂"></a>
                </div>

                <div class="pull-left main-header-logo-mobile hidden-lg hidden-md wow fadeInLeft" data-wow-delay="3000ms">
                    <a href="/" class="flex"><img src="http://localhost/theme/huimutang/images/imgs/logov.png" alt="慧目堂" title="慧目堂"><img class="m-logotxt" src="http://localhost/theme/huimutang/images/imgs/m/logotxt.png"></a>
                </div>
                <div class="pull-right main-header-right">
                    <div class="pull-right main-header-extra wow fadeInRight" data-wow-delay="100ms">
                        <div class="mobile-toggle hidden-lg">
                            <span><a href="tel:02158878218"><img src="http://localhost/theme/huimutang/images/imgs/phone.png" alt=""></a></span>
                            <span id="J_MobileNavTrigger2"><img src="http://localhost/theme/huimutang/images/imgs/burger.png" alt=""></span>
                        </div>
                        <div class="pull-right hidden-md hidden-sm hidden-xs">
                            <div class="hhbank"><img src="http://localhost/theme/huimutang/images/imgs/h_right.png"></div>
                            <nav class="hidden-md hidden-sm hidden-xs nav">
                                <div class="row">
                                    <div class="main-header-nav">
                                        <ul class="j-navbar-menu list-unstyled navbar-menu clearfix">
                                            <li class="">
                                                <a class="" href="/">首页</a>
                                            </li>


                                            <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>

                                            <li class="">
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
                                            <li class="li_border_r <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>left<?php endif; ?> ">
                                                <a <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>style="border-left: none"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                                            </li>
                                            <?php endforeach; endif; unset($_from); ?>
                                           

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- one page  PC-->
    <div class=" home-bg-00 swiper-container pc-show">
        <div class="swiper-wrapper">






        <?php $_from = $this->_tpl_vars['show_pc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>


            <?php if ($this->_tpl_vars['item']['style_banner'] == 2): ?>
            <div class="swiper-slide"><!--居左-->
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-l-div">
                                <div class="img_div_pc"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                                
                                <div class="w-p hidden w-p-l">
                                <p class="ani rl-e1"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                                <p class="ani rl-e2"><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                                <p class="ani rl-e3"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>



            <?php if ($this->_tpl_vars['item']['style_banner'] == 1): ?>
            <div class="swiper-slide"><!--居中-->
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-m-div">
                                <div class="img_div_pc"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                                
                                <div class="w-p w-p-m">
                                <p class="ani wow fadeInUp e1" data-wow-duration="1s" data-wow-delay="0s" ><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                                
                                <p class="ani wow fadeInDown e2 e4" data-wow-dusration="1.5s" data-wow-delay=".6s" ><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                                <p class="ani wow fadeInUp e3" data-wow-duration="1s" data-wow-delay=".8s"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>




            <?php if ($this->_tpl_vars['item']['style_banner'] == 3): ?>
            <div class="swiper-slide"><!--居右-->
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-r-div">
                                <div class="img_div_pc"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                                
                                <div class="w-p hidden w-p-r">
                                    <p class="ani rl-e1"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                                    
                                    <p class="ani rl-e2"><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                                    <p class="ani rl-e3"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>



        


        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-black hide"></div>
        <div class="swiper-button-prev swiper-button-black hide"></div>
    </div>





    <!-- one page 移动-->
    <div class=" home-bg-00 swiper-container mobile-show">
        <div class="swiper-wrapper">






        <?php $_from = $this->_tpl_vars['show_mobile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>


            <?php if ($this->_tpl_vars['item']['style_banner'] == 2): ?>
            <div class="swiper-slide"><!--居左-->
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-l-div">
                                <div class="img_div_m"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                                
                                <div class="w-p hidden w-p-l">
                                <p class="ani rl-e1"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                                <p class="ani rl-e2"><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                                <p class="ani rl-e3"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>



            <?php if ($this->_tpl_vars['item']['style_banner'] == 1): ?>
            <div class="swiper-slide"><!--居中-->
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-m-div">
                                <div class="img_div_m"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                                
                                <div class="w-p w-p-m">
                                <p class="ani wow fadeInUp e1" data-wow-duration="1s" data-wow-delay="0s" ><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                                
                                <p class="ani wow fadeInDown e2 e4" data-wow-dusration="1.5s" data-wow-delay=".6s" ><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                                <p class="ani wow fadeInUp e3" data-wow-duration="1s" data-wow-delay=".8s"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>




            <?php if ($this->_tpl_vars['item']['style_banner'] == 3): ?>
            <div class="swiper-slide"><!--居右-->
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-r-div">
                                <div class="img_div_m"><img src="<?php echo $this->_tpl_vars['item']['show_img']; ?>
"></div>
                                
                                <div class="w-p hidden w-p-r">
                                    <p class="ani rl-e1"><?php echo $this->_tpl_vars['item']['show_name']; ?>
</p>
                                    
                                    <p class="ani rl-e2"><?php echo $this->_tpl_vars['item']['contents']; ?>
</p>
                                    <p class="ani rl-e3"><?php echo $this->_tpl_vars['item']['slogan']; ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>



        


        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-black hide"></div>
        <div class="swiper-button-prev swiper-button-black hide"></div>
    </div>



</div>
   <!--  two page -->
   <div class="case-special home-bg-01">
        <div class="tip-bar bar1"></div>
        <div class="section-title wow fadeInUp" data-wow-delay="100ms">
            <h2>案例展示</h2>
            <p style="color: #888;">CASE DISPLAY</p>
        </div>

        <div class="home-case">
            <div class="swiper-container swiper-container-horizontal internal-w">
                <div class="swiper-wrapper">



                <?php $_from = $this->_tpl_vars['recommend_product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>


                    <div class="swiper-slide home-case-slider201" data-swiper-slide-index="7">
                        <div class="container">
                            <div class="row">
                                <div class="content-special-wrap">
                                    <div class="media case-special-item">
                                        <div class="media-left media-middle wow fadeInLeft" data-wow-delay="200ms" ><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width='522px' height='308px' alt=""></div>
                                        <div class="media-body media-right">
                                            <h3 class="wow fadeInUp" data-wow-delay="300ms"><?php echo $this->_tpl_vars['item']['name']; ?>
</h3>
                                            <div class="clearfix"></div>
                                            <p class="subtitle wow fadeInUp" data-wow-delay="300ms"><?php echo $this->_tpl_vars['item']['price_jieshao']; ?>
</p>
                                            <p class="description wow fadeInUp" data-wow-delay="300ms"><?php echo $this->_tpl_vars['item']['description']; ?>
 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; endif; unset($_from); ?>






                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </div>
    <!-- three page -->
    <div class="content home-bg-02">
        <div class="bg2-bk wow fadeIn" data-wow-delay="3000ms"></div>
        <div class="bg-01-con">
            <div class="tip-bar bar1"></div>
            <div class="section-title wow fadeInUp" data-wow-delay="3100ms">
                <h2 style="color: #ff5a00;">公司简介</h2>
                <p style="color: #fff;">COMPANY PROFILE</p>
            </div>
            <div class="bg-02-mask">
                <div class="home-product">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap">
                                <div class="news-panel">
                                    <div class="company-detail wow fadeInRight" data-wow-delay="3200ms" >
                                        <div>
                                            <a href="#">
                                                <div class="right">
                                                    <div class="media-body media-right">
                                                        <div class="news-panel-list-text">
                                                            <h2><?php echo $this->_tpl_vars['site']['index_company_profile_title']; ?>
</h2>
                                                            <p><?php echo $this->_tpl_vars['site']['index_company_profile_content']; ?>
</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- fore page -->
    <div class="content home-bg-03">
        <div class="tip-bar bar2"></div>
        <div class="section-title wow fadeInUp" data-wow-delay="100ms">
            <h2 style="color: #fff;">服务内容</h2>
            <p style="color: #fff;">PRODUCT INTRODUCTION</p>
        </div>

        <div class="home-product">
                <div class="row">
                    <div class="content-wrap text-center">
                        <div class="item-list clearfix">
                            <div class="pinpai-txt col-xs-6 pull-left wow fadeInLeft" data-wow-delay="200ms">
                                <h2><?php echo $this->_tpl_vars['site']['index_fuwu_left_top']; ?>
 </h2>
                                <p><?php echo $this->_tpl_vars['site']['index_fuwu_left_bottom']; ?>
</p>
                            </div>
                            
                            <div class="num1 wow" data-wow-delay="300ms">
                                <div class="item-list-img"><img src="http://localhost/theme/huimutang/images/imgs/no1.png" alt=""></div>
                            </div>
                            <div class="pinpai-txt col-xs-6 pull-right wow fadeInRight" data-wow-delay="400ms">
                                <h2><?php echo $this->_tpl_vars['site']['index_fuwu_right_top']; ?>
 </h2>
                                <p><?php echo $this->_tpl_vars['site']['index_fuwu_right_bottom']; ?>
</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- five page -->
    <div class="content home-bg-04">
        <div class="tip-bar bar1"></div>
        <div class="section-title wow fadeInUp" data-wow-delay="100ms">
            <h2>创始人</h2>
            <p style="color: #666;">FOUNDER</p>
        </div>

        <div class="home-news">
            <div class="container">
                <div class="row">
                    <div class="content-wrap">
                        <div class="news-panel clearfix">
                            <div class="absolute-r wow fadeInRight" data-wow-delay="200ms">
                                <div class="pull-left boss">
                                    <img src="http://localhost/theme/huimutang/images/imgs/boss.png">
                                </div>
                                <div class="boss-txt">
                                    <p>慧目堂创始人</p>
                                    <p> 中国最佳杰出策划师</p>
                                    <p>中国品牌设计年鉴编委会委员</p>
                                    <p>西安美院特聘教师</p>
                                    <p>上海交大EMBA</p>
                                    <p>上海银行品牌管理顾问</p>

                                </div>
                            </div>
                            <div class="absolute-l  wow fadeInLeft" data-wow-delay="200ms">
                                <div class="boss-focus">
                                    <div class="boss-focus-text">
                                        <h2 class="title">慧目堂创始人</h2>
                                        <h2 class="title">“合众为一营销理论”创始人</h2>
                                        <p class="description">周 轩毅  Steven</p>
                                        <div class="text-center"><a href="" class="boss-more">更多介绍</a></div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- six page -->
    <div class="content bg-col-06">
        <div class="tip-bar bar1"></div>
        <div class="section-title wow fadeInUp" data-wow-delay="100ms">
            <h2 style="color: #ff5a00;">最新资讯</h2>
            <p style="color: #fff;">LATEST INFORMATION</p>
        </div>

    <div class="home-news">
        
            <div class="row">
                <div class="content-wrap">
                    <div class="news-panel clearfix">



                    <?php $_from = $this->_tpl_vars['recommend_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                        <?php if (($this->_foreach['foo']['iteration']-1) < 3): ?>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="news-panel-focus">
                                <div class="news-panel-focus-img">
                                     <a href="/news_<?php echo $this->_tpl_vars['item']['id']; ?>
.html" ><img width='631px' height='355px' src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width="100%" alt=""></a>
                                 </div>
                                 <div class="news-panel-focus-text">
                                    <h2 class="title"><a href=""><font><?php echo $this->_tpl_vars['item']['title']; ?>
</font></a></h2>
                                    <p class="description"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
 </p>
                                    <p class="date"><?php echo $this->_tpl_vars['item']['add_time']; ?>
</p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                    <?php endforeach; endif; unset($_from); ?>
                        




                    </div>



                    <div class="m-news-p">





                        <div class="m-news-l">
                            <?php $_from = $this->_tpl_vars['recommend_article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                            <?php if (($this->_foreach['foo']['iteration']-1) < 4): ?>
                            <div class="m-news wow <?php if (($this->_foreach['foo']['iteration']-1) == '0' || ($this->_foreach['foo']['iteration']-1) == '2'): ?>fadeInLeft<?php else: ?>fadeInRight<?php endif; ?> "  <?php if (($this->_foreach['foo']['iteration']-1) > 1): ?> data-wow-delay="200ms"<?php endif; ?>>
                                <div class="m-news-img">
                                    <a href="/news_<?php echo $this->_tpl_vars['item']['id']; ?>
.html"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt=""></a>
                                </div>
                                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13) : smarty_modifier_truncate($_tmp, 13)); ?>
</p>
                                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 38) : smarty_modifier_truncate($_tmp, 38)); ?>
</p>
                            </div>
                            
                            
                        <?php if (($this->_foreach['foo']['iteration']-1) == 1): ?>
                        </div>
                        <div class="m-news-l">
                        <?php endif; ?>
                        
                        <?php if (($this->_foreach['foo']['iteration']-1) == 3): ?>
                        </div>
                        <?php endif; ?>

                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>


                    </div>



                </div>
            </div>
        
    </div>
</div>

    <div class="content bg-col-07">
        <div class="tel-div">
            <div class="tel-1">
                <div class="tel-1-s wow fadeInLeft"><img src="http://localhost/theme/huimutang/images/imgs/m/s2.png"></div>
                <div class="tel-t wow fadeInRight">
                    <div class="tel-name">客户咨询</div>
                    <div class="tel-num"><?php echo $this->_tpl_vars['site']['tel']; ?>
</div>
                </div>
            </div>
            <div class="tel-2">
                <div class="tel-1-s wow fadeInLeft" data-wow-delay="100ms"><img src="http://localhost/theme/huimutang/images/imgs/m/s1.png"></div>
                <div class="tel-t wow fadeInRight" data-wow-delay="100ms">
                    <div class="tel-name">商务合作</div>
                    <div class="tel-num"><?php echo $this->_tpl_vars['site']['tel_commerce']; ?>
</div>
                </div>
            </div>
        </div>
        <div class="er-div wow fadeInUp" data-wow-delay="200ms">
            <img src="http://localhost/theme/huimutang/images/imgs/m/ew.png">
        </div>
        <div class="input-div">
            <div class="input-d1 wow fadeInLeft" data-wow-delay="300ms">
                <div class="input-name">企业名称<span>*</span></div>
                <input placeholder="请输入" >
            </div>
            <div class="input-d1 wow fadeInRight" data-wow-delay="300ms">
                <div class="input-name">联系人<span>*</span></div>
                <input placeholder="请输入" >
            </div>
            <div class="input-d1 wow fadeInLeft" data-wow-delay="300ms">
                <div class="input-name">电话<span>*</span></div>
                <input placeholder="请输入" >
            </div>
            <div class="input-d1 wow fadeInRight" data-wow-delay="300ms">
                <div class="input-name">项目预算</div>
                <input placeholder="请输入" >
            </div>
            <div class="input-d2 wow fadeInUp" data-wow-delay="400ms">
                <p>项目概述</p>
                <textarea placeholder="请输入"></textarea>
            </div>

            <div class="l-bnt wow fadeInUp" data-wow-delay="400ms">请联系我</div>
        </div>

    </div>
<!-- footer -->
<nav class="footer-nav">
    <div class="container">
        <div class="container">
            <div class="pull-right  wechat wow fadeInRight" data-wow-delay="100ms">
                <ul class="j-navbar-menu list-unstyled navbar-menu clearfix">
                    <li class="">
                        <a href="">首页</a>
                    </li>

                    <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>

                    <li class="">
                        <a href="<?php echo $this->_tpl_vars['item']['nav_name']; ?>
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
                        <a <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>class="none-border-l"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?>

                </ul>
            </div>
        </div>

        <div class="row">
            <div class="pull-left footer-l wow fadeInLeft" data-wow-delay="100ms">
                <div>友情链接</div>
                
                <ul class="list-unstyled footer-list clearfix">

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
                <ul class="list-unstyled footer-list clearfix">
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


            <div class="row footer-r wow fadeInRight">
                <p class="hidden-lg hidden-md"></p>
                <div><img src="http://localhost/theme/huimutang/images/imgs/pc_qm.png" ></div>
                <br class="smallscreen" /><p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
                <br class="smallscreen" /><p>版权所有 <?php echo $this->_tpl_vars['site']['icp']; ?>
   沪公网安备 31011202002497</p>
            </div>
        </div>
    </div>
</nav>

<nav class="m-footer-nav">
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
<div class="tt-toolbar hidden-md hidden-sm hidden-xs">
    <div class="tt-toolbar-item toolbar-wx">
        <a href="####"><i></i></a>
        <div class="showDetail wx-detail">
        <div class="wx">
            <p>扫一扫关注</p>
            <p>慧目堂微信公众号</p>
            <div style="margin-top: 8px;">
                <img src="http://localhost/theme/huimutang/images/imgs/ewm.jpg">
            </div>
        </div>
    </div>
    </div>
    <div class="tt-toolbar-item toolbar-wb">
        <a href="###"><i></i></a>
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
            <a class="fnt-orange" href="">招聘岗位查询>>></a>
        </div>
    </div>
    </div>
    <div class="tt-toolbar-item toolbar-top">
        <a href="####"><i></i></a>
    </div>
</div>
<div id="J_MobileNavBar" class="mobile-navbar hidden-lg">

    <ul class="list-unstyled mobile-navbar-menu">
        <li onclick="alertshow()">
            <a href="#">首页</a>
        </li>

        <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <li onclick="alertshow()">
            <a href="<?php echo $this->_tpl_vars['item']['nav_name']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
        </li>
        <?php endforeach; endif; unset($_from); ?>
        
        <?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
        <li onclick="alertshow()">
            <a href="<?php echo $this->_tpl_vars['item']['guide']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
        </li>
        
        <?php endforeach; endif; unset($_from); ?>

    </ul>
    <div id="alert-cls" class="cls-btn"><img src="http://localhost/theme/huimutang/images/imgs/m/close_img.png"></div>
</div>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/wow.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/zoom.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/tool.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/index.js"></script>
<script type="text/javascript" src="http://localhost/theme/huimutang/images/js/global.js?03"></script>

<script type="text/javascript">
<?php echo '
    function htmly() {
        var hy=$(\'html, body\')[0].scrollTop;
        if(hy<190){
            $(\'html, body\').animate({scrollTop: \'190px\'}, 1500);
        }


    }

    if($(window).width()<=750){
        setTimeout(function () {
            htmly();
        },3000)

    }

    document.addEventListener("scrollend",function (e) {
console.log("sssss")
    })

    $("#J_MobileNavBar").on("touchmove",function (e) {
        console.log("aaaaaaa")
        e.preventDefault();
        e.stopPropagation();
    })

//    $(\'html, body\')[0].bind(touchEvents.touchend, function (event) {
//        event.preventDefault();
//        console.log("aaaa")
//
//    });
    $(window).scroll(function () {
        var imgh = $(".body-img").height()*wow.zoom;
        if($(window).width()<750){
            if( $(window).scrollTop()<=imgh){
                $(".wap-header").hide();
                $(".pc-header").show();
              }else{
                $(".pc-header").hide();
                $(".wap-header").show();
              }


        }
      
    });



'; ?>


</script>
</body>
</html>
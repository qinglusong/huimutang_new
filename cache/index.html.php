<?php /* Smarty version 2.6.26, created on 2018-08-29 10:01:03
         compiled from index.html */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
	<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
    <title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.14.3/esm/popper.min.js"></script>
    <!--<script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
    <link href="<?php echo $this->_tpl_vars['site_path']; ?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['site_path']; ?>
/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['site_path']; ?>
/css/swiper.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['site_path']; ?>
/css/style.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['site_path']; ?>
/css/index.css" rel="stylesheet">
</head>
<body>
<header class="main-header wap-header fixed" style="display: none;">
        <div class="container zoom-div">
            <div class="row">
               <div class="pull-left main-header-logo hidden-sm hidden-xs">
                    <a href="/"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/logo.png" alt="<?php echo $this->_tpl_vars['page_title']; ?>
" title="<?php echo $this->_tpl_vars['page_title']; ?>
"></a>
                </div>

                <div class="pull-left main-header-logo-mobile hidden-lg hidden-md">
                    <a href="/" class="flex"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/logov.png" alt="<?php echo $this->_tpl_vars['page_title']; ?>
" title="<?php echo $this->_tpl_vars['page_title']; ?>
"><img class="m-logotxt" src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/logotxt.png"></a>
                </div>
                <div class="pull-right main-header-right">
                    <div class="pull-right main-header-extra ">
                        <div class="mobile-toggle hidden-lg">
                            <span><a href="tel:02158878218"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/phone.png" alt=""></a></span>
                            <span id="J_MobileNavTrigger"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/burger.png" alt=""></span>
                        </div>
                        <div class="pull-right hidden-md hidden-sm hidden-xs">
                            <div class="hhbank"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/h_right.png"></div>
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
                                                <a href=""><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                                            </li>
											<?php endforeach; endif; unset($_from); ?>
											
											<?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['navs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['navs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['navs']['iteration']++;
?>
                                            <li class="li_border_r">
                                                <a <?php if (($this->_foreach['navs']['iteration'] == $this->_foreach['navs']['total'])): ?> style="border-left: none" <?php endif; ?> href=""><?php echo $this->_tpl_vars['item']['nav_name']; ?>
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
<div class="body-img"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/body-img.jpg"></div>
<div class="content" id="head-top">
    <header class="main-header pc-header">
        <div class="container">
            <div class="row">
               <div class="pull-left main-header-logo hidden-sm hidden-xs">
                    <a href="/"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/logo.png" alt="<?php echo $this->_tpl_vars['page_title']; ?>
" title="<?php echo $this->_tpl_vars['page_title']; ?>
"></a>
                </div>

                <div class="pull-left main-header-logo-mobile hidden-lg hidden-md wow fadeInLeft">
                    <a href="/" class="flex"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/logov.png" alt="<?php echo $this->_tpl_vars['page_title']; ?>
" title="<?php echo $this->_tpl_vars['page_title']; ?>
"><img class="m-logotxt" src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/logotxt.png"></a>
                </div>
                <div class="pull-right main-header-right">
                    <div class="pull-right main-header-extra wow fadeInRight" data-wow-delay="100ms">
                        <div class="mobile-toggle hidden-lg">
                            <span><a href="tel:02158878218"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/phone.png" alt=""></a></span>
                            <span id="J_MobileNavTrigger2"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/burger.png" alt=""></span>
                        </div>
                        <div class="pull-right hidden-md hidden-sm hidden-xs">
                            <div class="hhbank"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/h_right.png"></div>
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
                                                <a href=""><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a>
                                            </li>
											<?php endforeach; endif; unset($_from); ?>
                                            <?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['navs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['navs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['navs']['iteration']++;
?>
                                            <li class="li_border_r">
                                                <a <?php if (($this->_foreach['navs']['iteration'] == $this->_foreach['navs']['total'])): ?> style="border-left: none" <?php endif; ?> href=""><?php echo $this->_tpl_vars['item']['nav_name']; ?>
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

    <!-- one page -->
    <div class=" home-bg-00 swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-l-div">
                                <div class="w-p hidden">
                                <p class="ani rl-e1">高端羽绒家纺  第一品牌</p>
                                <p class="ani   rl-e1">2015年成功上市</p>
                                <p class="ani   rl-e2">古麒创立于安徽已有三十多年，一直以来发展较缓慢。2013年资</p>
                                <p class="ani   rl-e2">本的介入，使得企业有志于将品牌做强做大。</p>
                                <p class="ani   rl-e3">慧目堂13年铸就领军品牌</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-m-div">
                                <p class="ani wow fadeInUp e1" data-wow-duration="1s" data-wow-delay="0s" >打造领军品牌</p>
                                <p class="ani wow fadeInUp e2" data-wow-duration="1s" data-wow-delayy=".2s" >我们的使命是，帮助企业打造成细分领域的领军品牌。“领军品牌”才是可口可乐前懂事长伍德鲁夫的那句名言：“假如我的工厂被大火毁灭，假如遭遇世界金融风暴，但只要有可口可乐的品牌，第二天我又将重新站起。”“假如我的工厂被大火毁灭，假如遭遇世界金融风暴，但只要有可口可乐的品牌，第二天我又将重新站起。”</p>
                                <p class="ani wow fadeInUp e3" data-wow-duration="1s" data-wow-delay=".8s">13年铸就领军品牌</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-r-div">
                                <div class="w-p hidden">
                                    <p class="ani rl-e1">1网上保险领军品牌  资产1200亿</p>
                                    <p class="ani rl-e1">2015 并购上市</p>
                                    <p class="ani rl-e2">Online Insurance Leading Brand Assets 120 Billion</p>
                                    <p class="ani rl-e2">2015 Mergers And Acquisitions</p>
                                    <p class="ani rl-e2">2015 Mergers And Acquisitions</p>
                                    <p class="ani rl-e3">慧目堂13年铸就领军品牌</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="swiper-slide">
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-r-div">
                                <div class="w-p hidden">
                                    <p class="ani rl-e1">2网上保险领军品牌  资产1200亿</p>
                                    <p class="ani rl-e1">2015 并购上市</p>
                                    <p class="ani rl-e2">Online Insurance Leading Brand Assets 120 Billion</p>
                                    <p class="ani rl-e2">2015 Mergers And Acquisitions</p>
                                    <p class="ani rl-e2">2015 Mergers And Acquisitions</p>
                                    <p class="ani rl-e3">慧目堂13年铸就领军品牌</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="swiper-slide">
                <div class="home-banner">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap inner title-r-div">
                                <div class="w-p hidden">
                                    <p class="ani rl-e1">3网上保险领军品牌  资产1200亿</p>
                                    <p class="ani rl-e1">2015 并购上市</p>
                                    <p class="ani rl-e2">Online Insurance Leading Brand Assets 120 Billion</p>
                                    <p class="ani rl-e2">2015 Mergers And Acquisitions</p>
                                    <p class="ani rl-e2">2015 Mergers And Acquisitions</p>
                                    <p class="ani rl-e3">慧目堂13年铸就领军品牌</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
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
                    <div class="swiper-slide " >
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
        <div class="bg2-bk wow fadeIn"></div>
        <div class="bg-01-con">
            <div class="tip-bar bar1"></div>
            <div class="section-title wow fadeInUp" data-wow-delay="100ms">
                <h2 style="color: #ff5a00;">公司简介</h2>
                <p style="color: #fff;">COMPANY PROFILE</p>
            </div>
            <div class="bg-02-mask">
                <div class="home-product">
                    <div class="container">
                        <div class="row">
                            <div class="content-wrap">
                                <div class="news-panel">
                                    <div class="company-detail wow fadeInRight" data-wow-delay="200ms" >
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
                                <h2>/品牌道/ </h2>
                                <p>“9大模块”是慧目堂驱动客户打造领军品牌的系统方法，也是全案品牌咨询服务的内容。</p>
                            </div>
                            
                            <div class="num1 wow" data-wow-delay="300ms">
                                <div class="item-list-img"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/no1.png" alt=""></div>
                            </div>
                            <div class="pinpai-txt col-xs-6 pull-right wow fadeInRight" data-wow-delay="400ms">
                                <h2>/品牌道/ </h2>
                                <p>“3大原则”是慧目堂打造领军品牌系统工作，从始至终，从全局至局部，都需要遵循的思考准则。是确保制胜方案，和最佳成果的戒律。</p>
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
                            
                            <div class="absolute-l  wow fadeInLeft" data-wow-delay="200ms">
                                <div class="boss-focus">
                                    <div class="boss-focus-text">
                                        <h2 class="title"><font>慧目堂创始人</font></h2>
                                        <h2 class="title"><font>“合众为一营销理论”创始人</font></h2>
                                        <p class="description">周 轩毅  Steven</p>
                                        <div class="text-center"><a href="" class="boss-more">更多介绍</a></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="absolute-r wow fadeInRight" data-wow-delay="200ms">
                                <div class="pull-left boss">
                                    <img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/boss.png">
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
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="news-panel-focus">
                                <div class="news-panel-focus-img">
                                     <a href="/cnews/show_230.html"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic1.jpg" width="100%" alt=""></a>
                                 </div>
                                 <div class="news-panel-focus-text">
                                    <h2 class="title"><a href=""><font>茶叶包装设计欣赏</font></a></h2>
                                    <p class="description">茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业...... </p>
                                    <p class="date">2017.11.01</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="news-panel-focus">
                                <div class="news-panel-focus-img">
                                     <a href="/cnews/show_230.html"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic2.jpg" width="100%" alt=""></a>
                                 </div>
                                 <div class="news-panel-focus-text">
                                    <h2 class="title"><a href=""><font>茶叶包装设计欣赏</font></a></h2>
                                    <p class="description">茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业...... </p>
                                    <p class="date">2017.11.01</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="news-panel-focus">
                                <div class="news-panel-focus-img">
                                     <a href="/cnews/show_230.html"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic3.jpg" width="100%" alt=""></a>
                                 </div>
                                 <div class="news-panel-focus-text">
                                    <h2 class="title"><a href=""><font>茶叶包装设计欣赏</font></a></h2>
                                    <p class="description">茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业...... </p>
                                    <p class="date">2017.11.01</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="m-news-p">
                        <div class="m-news-l">
                            <div class="m-news wow fadeInLeft">
                                <div class="m-news-img">
                                    <a href=""><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic2.jpg" alt=""></a>
                                </div>
                                <p>茶叶包装设计欣赏</p>
                                <p>茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业......</p>
                            </div>
                            <div class="m-news wow fadeInRight">
                                <div class="m-news-img">
                                    <a href=""><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic2.jpg" alt=""></a>
                                </div>
                                <p>茶叶包装设计欣赏</p>
                                <p>茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业......</p>
                            </div>
                        </div>
                        <div class="m-news-l">
                            <div class="m-news wow fadeInLeft" data-wow-delay="200ms">
                                <div class="m-news-img">
                                    <a href=""><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic2.jpg"  alt=""></a>
                                </div>
                                <p>茶叶包装设计欣赏</p>
                                <p>茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业......</p>
                            </div>
                            <div class="m-news wow fadeInRight" data-wow-delay="200ms">
                                <div class="m-news-img">
                                    <a href="/cnews/show_230.html"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/pic2.jpg" alt=""></a>
                                </div>
                                <p>茶叶包装设计欣赏</p>
                                <p>茶叶，自唐宋以来长久兴盛不衰的行业，中国市场上更是有超过8000人从事的古老行业......</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>

    <div class="content bg-col-07">
        <div class="tel-div">
            <div class="tel-1">
                <div class="tel-1-s wow fadeInLeft"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/s2.png"></div>
                <div class="tel-t wow fadeInRight">
                    <div class="tel-name">客户咨询</div>
                    <div class="tel-num">021-398883336</div>
                </div>
            </div>
            <div class="tel-2">
                <div class="tel-1-s wow fadeInLeft" data-wow-delay="100ms"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/s1.png"></div>
                <div class="tel-t wow fadeInRight" data-wow-delay="100ms">
                    <div class="tel-name">客户咨询</div>
                    <div class="tel-num">021-398883336</div>
                </div>
            </div>
        </div>
        <div class="er-div wow fadeInUp" data-wow-delay="200ms">
            <img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/ew.png">
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
                        <a class="none-border-l" href="">项目咨询</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="pull-left footer-l wow fadeInLeft" data-wow-delay="100ms">
                <div>友情链接</div>
                
                <ul class="list-unstyled footer-list clearfix">
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
                <ul class="list-unstyled footer-list clearfix">
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


            <div class="row footer-r">
                <p class="hidden-lg hidden-md"></p>
                <br class="smallscreen" /><p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
                <br class="smallscreen" /><p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
                <br class="smallscreen" /><p>版权所有 沪ICP备16026508号   沪公网安备 31011202002497</p>
            </div>
        </div>
    </div>
</nav>

<nav class="m-footer-nav">
    <div class="wow fadeInLeft"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/b-tit-img.png"></div>
    <div class="wow fadeInLeft" data-wow-delay="100ms"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/b-img2.png"></div>
    <div class="wow fadeInRight" data-wow-delay="200ms"><img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/m/qianming.png"></div>
    <p class="wow fadeInLeft" data-wow-delay="300ms">Copyright © 2004-2018 Shanghai Three Eyes Art</p>
    <p class="wow fadeInLeft" data-wow-delay="350ms">Design Co.,Ltd.  All Rights Reserved © 版权所有</p>
    <p class="wow fadeInLeft" data-wow-delay="400ms">沪ICP备16026508号</p>
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
                <img src="<?php echo $this->_tpl_vars['site_path']; ?>
/imgs/ewm.jpg">
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
            <p class="fnt-orange">021-39888336</p>
            <p>供应合作：</p>
            <p class="fnt-orange">021-39888276</p>
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
        <li class="">
            <a href="#">首页</a>
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
        <li class="">
            <a href="">年度咨询</a>
        </li>
        <li class="">
            <a href="">项目咨询</a>
        </li>
    </ul>
</div>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_path']; ?>
/js/wow.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_path']; ?>
/js/zoom.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_path']; ?>
/js/global.js"></script>
<script type="text/javascript">
<?php echo '
    function htmly() {
        var hy=$(\'html, body\')[0].scrollTop;
        if(hy<190){
            $(\'html, body\').animate({scrollTop: \'190px\'}, 1500);
        }


    }

    if($(window).width()<=750){
        htmly();
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
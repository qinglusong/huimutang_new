<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>{$page_title}</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/theme/huimutang/images/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/theme/huimutang/images/js/swiper.min.js"></script>
    <script type="text/javascript" src="theme/huimutang/images/js/wow.js"></script>
    <link href="theme/huimutang/images/css/bootstrap.min.css" rel="stylesheet">
    <link href="theme/huimutang/images/css/animate.min.css" rel="stylesheet">
    <link href="theme/huimutang/images/css/swiper.css" rel="stylesheet">
    <link href="theme/huimutang/images/css/tool.css" rel="stylesheet">

</head>
<body>
<div class="header zoom-div mobile-show">
    <div class="flex-show m-title red-border">
        <div class="m-title-img-div">
            <a class="pc-show" href="/"><img src="theme/huimutang/images/imgs/logo-red.png" alt="{$site.site_name}" title="{$site.site_name}"></a>
            <a class="mobile-show" href="/"><img src="theme/huimutang/images/imgs/m/title-img-r.png" alt="{$site.site_name}" title="{$site.site_name}"></a>
        </div>
        <div class="flex-show flex-row">
            <span><a href="tel:02158878218"><img src="theme/huimutang/images/imgs/phone_red.png" alt=""></a></span>
            <span id="J_MobileNavTrigger3"><img src="theme/huimutang/images/imgs/burger_red.png" alt=""></span>
        </div>
    </div>
</div>
<div class="container zoom-div">
    <header class="pc_header white flex-show flex-row pc-show">
        <div class="pc-show flex-show pc-logo wow fadeInLeft">
            <a href="/"><img src="theme/huimutang/images/imgs/logo-red.png" alt="{$site.site_name}" title="{$site.site_name}"></a>
        </div>
        <div class="title-right wow fadeInRight">
            <div class=" flex-column flex-right pc-show flex-show">
                <div class="pc-logo-right"><img src="theme/huimutang/images/imgs/h_right_red.png"></div>
                <nav class="nav">
                    <ul class="flex-row">
                        <li>
                            <a href="index.html">首页</a>
                        </li>
						
						
                        {foreach from=$nav_middle_list item=item}
						<li class="">
							<a href="{$item.url}">{$item.nav_name}</a>
						</li>
						
						{/foreach}
						
						
						{foreach from=$nav_top_list item=item name=foo}
						<li class="li_border_r {if $smarty.foreach.foo.first}left{/if}">
							<a {if $smarty.foreach.foo.last}style="border-left: none"{/if} href="{$item.guide}">{$item.nav_name}</a>
						</li>
						{/foreach}
						

                    </ul>
                </nav>
            </div>
        </div>
    </header>
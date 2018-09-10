<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>{$page_title}</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    {if $cases==1}
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.js"></script>
    {else}
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
    {/if}
    
    <script type="text/javascript" src="theme/huimutangs/images/js/wow.js"></script>
    <link href="theme/huimutangs/images/css/bootstrap.min.css" rel="stylesheet">
    <link href="theme/huimutangs/images/css/animate.min.css" rel="stylesheet">
    <link href="theme/huimutangs/images/css/swiper.css" rel="stylesheet">
    <link href="theme/huimutangs/images/css/tool.css" rel="stylesheet">
    
</head>
<body>
<div class="header zoom-div mobile-show">
    <div class="flex-show m-title red-border">
        <div class="m-title-img-div">
            <a class="pc-show" href="/"><img width='237px' height='87px' src="theme/huimutangs/images/imgs/logo-red.png" alt="{$page_title}" title="{$page_title}"></a>
            <a class="mobile-show" href="/"><img src="theme/huimutangs/images/imgs/m/title-img-r.png" alt="{$page_title}" title="{$page_title}"></a>
        </div>
        <div class="flex-show flex-row">
            <span><a href="tel:{$site.tel}"><img src="theme/huimutangs/images/imgs/phone_red.png" alt=""></a></span>
            <span id="J_MobileNavTrigger3"><img src="theme/huimutangs/images/imgs/burger_red.png" alt=""></span>
        </div>
    </div>
</div>
<div class="container zoom-div">
    <header class="pc_header white flex-show flex-row pc-show">
        <div class="pc-show flex-show pc-logo wow fadeInLeft">
            <a href="/"><img width='237px' height='87px' src="theme/huimutangs/images/imgs/logo-red.png" alt="{$page_title}" title="{$page_title}"></a>
        </div>
        <div class="title-right wow fadeInRight">
            <div class=" flex-column flex-right pc-show flex-show">
                <div class="pc-logo-right">
                    <!--<img src="theme/huimutangs/images/imgs/h_right_red.png">-->
                    <div class="pc-r-logo black">
                        <div class="rlogo-l">
                            <p>中法国际合作</p>
                            <p>中国十佳最具创新力策划机构</p>
                        </div>
                        <div class="rlogo-r consult">
                            <div><img width='106px' height='28px' src="theme/huimutangs/images/imgs/r_logo3.png"></div>
                            <div>上海银行指定供应商</div>
                        </div>
                    </div>
                </div>
                <nav class="nav">
                    <ul class="flex-row">
                        <li>
                            <a href="/">首页</a>
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
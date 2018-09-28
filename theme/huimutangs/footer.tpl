   <div class="footer-nav flex-column pc-show flex-show">
        <div class="footer-div1 wow fadeInRight">
            <ul class="">
                <li class="">
                    <a href="/">首页</a>
                </li>
                {foreach from=$nav_middle_list item=item}

                <li onclick="alertshow()">
                    <a href="{$item.guide}">{$item.nav_name}</a>
                </li>

                {/foreach}
                {foreach from=$nav_top_list item=item name=foo}
                <li class="li_border_r ">
                    <a {if $smarty.foreach.foo.last}style="border-left: none" class="none-border-l"{/if} href="{$item.guide}">{$item.nav_name}</a>
                </li>
                {/foreach}
                
            </ul>
        </div>

        <nav class="footer-div2 pc-show flex-show flex-row">
            <div class="footer2-l wow fadeInLeft" >
                <div>友情链接</div>
                <ul class="">
                    {foreach from=$friend_link_list item=item}
                        <li>
                            <a target='_blank' href="{$item.link_url}">{$item.title}</a>
                        </li>
                        
                        {/foreach}

                </ul>
                <div>
                    <div>联系我们</div>
                    <ul class="">
                        <li>业务咨询：{$site.tel}</li>
                        <li>
                            商务推介：{$site.tel_commerce}
                        </li>
                        <li>
                            QQ：{$site.qqcode}
                        </li>
                        <li>
                            E-mail：{$site.email}
                        </li>
                        <li>地址：{$site.site_address}</li>
                    </ul>
                </div>
            </div>

            <div style='text-align: left;' class="footer2-r wow fadeInRight">
                <div><img src="theme/huimutangs/images/imgs/pc_qm.png" ></div>
                <p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
                <p>版权所有 {$site.icp}   沪公网安备 31011202002497</p>
            </div>
        </nav>
    </div>
    <nav class="m-footer-nav mobile-show">
        <div class="wow fadeInLeft"><img src="theme/huimutangs/images/imgs/m/b-tit-img.png"></div>
        <div class="wow fadeInLeft" data-wow-delay="100ms"><img src="theme/huimutangs/images/imgs/m/b-img2.png"></div>
        <div class="wow fadeInRight" data-wow-delay="200ms"><img src="theme/huimutangs/images/imgs/m/qianming.png"></div>
        <p class="wow fadeInLeft" data-wow-delay="300ms">Copyright © 2004-2018 Shanghai Three Eyes Art</p>
        <p class="wow fadeInLeft" data-wow-delay="350ms">Design Co.,Ltd.  All Rights Reserved © 版权所有</p>
        <p class="wow fadeInLeft" data-wow-delay="400ms">{$site.icp}</p>
        <p class="wow fadeInLeft"data-wow-delay="450ms">沪公网安备 31011202002497号</p>
    </nav>
<div id="J_MobileNavBar" class="mobile-show">
    <div id="alert-cls2" class="cls-btn"><img src="theme/huimutangs/images/imgs/m/close_img.png"></div>
    <ul class="flex-column">
        <li class="">
            <a href="/">首页</a>
        </li>
        {foreach from=$nav_middle_list item=item}

        <li>
            <a href="{$item.guide}">{$item.nav_name}</a>
        </li>

        
        {/foreach}


        {foreach from=$nav_top_list item=item name=foo}
        <li>
            <a href="{$item.guide}">{$item.nav_name}</a>
        </li>
        {/foreach}
    </ul>
</div>
<!--慧目堂pages hmt.html 右侧浮层-->
{if $is_l_r_buttom=='1'}
<div class="right-tool pc-show zoom-div">
    <div class="tool-item">
        <a class="back" href="/"><i></i></a>
        <a class="right" href="pages_{$pages_arr.list.$page_down.id}.html"><i></i></a>
        <a class="left" href="pages_{$pages_arr.list.$page_up.id}.html"><i></i></a>
        <a class="top" href="####"><i></i></a>
    </div>
</div>
{/if}



<!--案例列表分类浮层-->
{if $is_case=='1'}
<div class="m-class-btn-div1  flex-show flex-row hidden">
    <ul>
        {foreach from=$product_category.1.child item=item name=foo}
        <li><a href='case_{$product_category.1.cat_id}_{$item.cat_id}_1.html'>{$item.cat_name}</a></li>
        {/foreach}
    </ul>   
    <div class="close-div">
        <img src="theme/huimutangs/images/imgs/m/close_img.png">
    </div>
</div>
<div class="m-class-btn-div2  flex-show flex-column hidden">
    <ul>
        {foreach from=$product_category.0.child item=item name=foo}
        <li><a href='case_{$product_category.0.cat_id}_{$item.cat_id}_1.html'>{$item.cat_name}</a></li>
        {/foreach}
    </ul>
    <div class="close-div">
        <img src="theme/huimutangs/images/imgs/m/close_img.png">
    </div>
</div>


{/if}

{if $cases==1}
<div class="right-tool fixed pc-show zoom-div">
  <div class="tool-item">
    <a class="back" href="/"><i></i></a>
        <a class="right" {if $lifts.previous.id}href="case_info_{$lifts.previous.id}.html" {else} href='javascript:;'{/if}><i></i></a>
        <a class="left" {if $lifts.next.id}href="case_info_{$lifts.next.id}.html" {else} href='javascript:;'{/if}><i></i></a>
        <a class="top" href="####"><i></i></a>
  </div>
</div>
{/if}

{if $news==1}
<div class="right-tool fixed zoom-div">
  <div class="tool-item">
    <a class="back" href="/"><i></i></a>
        <a class="right" {if $lifts.previous.id}href="news_info_{$lifts.previous.id}.html" {else} href='javascript:;'{/if}><i></i></a>
        <a class="left" {if $lifts.next.id}href="news_info_{$lifts.next.id}.html" {else} href='javascript:;'{/if}><i></i></a>
        <a class="top" href="#"><i></i></a>
  </div>
</div>
{/if}


<script type="text/javascript" src="theme/huimutangs/images/js/zoom.js"></script>
<script type="text/javascript" src="theme/huimutangs/images/js/tool.js"></script>
<script type="text/javascript" src="theme/huimutangs/images/js/global.js"></script>
</body>
</html>
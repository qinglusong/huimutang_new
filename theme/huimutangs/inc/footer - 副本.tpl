   <div class="footer-nav flex-column pc-show flex-show">
        <div class="footer-div1 wow fadeInRight">
            <ul class="">
                <li class="">
                    <a href="/">首页</a>
                </li>
				
				{foreach from=$nav_middle_list item=item}
				<li class="">
					<a href="{$item.url}">{$item.nav_name}</a>
				</li>
				
				{/foreach}
			   
			   {foreach from=$nav_top_list item=item name=foo}
				<li class="li_border_r">
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

            <div class="footer2-r wow fadeInRight">
                <div><img src="theme/huimutang/images/imgs/pc_qm.png" ></div>
                <p>Copyright  2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved</p>
                <p>版权所有 {$site.icp}   沪公网安备 31011202002497</p>
            </div>
        </nav>
    </div>
    <nav class="m-footer-nav mobile-show">
        <div class="wow fadeInLeft"><img src="theme/huimutang/images/imgs/m/b-tit-img.png"></div>
        <div class="wow fadeInLeft" data-wow-delay="100ms"><img src="theme/huimutang/images/imgs/m/b-img2.png"></div>
        <div class="wow fadeInRight" data-wow-delay="200ms"><img src="theme/huimutang/images/imgs/m/qianming.png"></div>
        <p class="wow fadeInLeft" data-wow-delay="300ms">Copyright © 2004-2018 Shanghai Three Eyes Art</p>
        <p class="wow fadeInLeft" data-wow-delay="350ms">Design Co.,Ltd.  All Rights Reserved © 版权所有</p>
        <p class="wow fadeInLeft" data-wow-delay="400ms">{$site.icp}</p>
        <p class="wow fadeInLeft"data-wow-delay="450ms">沪公网安备 31011202002497号</p>
    </nav>
</div>
<div id="J_MobileNavBar" class="mobile-show">
    <div id="alert-cls2" class="cls-btn"><img src="theme/huimutang/images/imgs/m/close_img.png"></div>
    <ul class="flex-column">
        <li class="">
            <a href="/">首页</a>
        </li>
        
		{foreach from=$nav_middle_list item=item}
		<li class="">
			<a href="{$item.url}">{$item.nav_name}</a>
		</li>
		
		{/foreach}
		
		{foreach from=$nav_top_list item=item name=foo}
		<li class="">
			<a  href="{$item.guide}">{$item.nav_name}</a>
		</li>
		{/foreach}
        
    </ul>
</div>
<script type="text/javascript" src="theme/huimutang/images/js/zoom.js"></script>
<script type="text/javascript" src="theme/huimutang/images/js/tool.js"></script>
<script type="text/javascript" src="theme/huimutang/images/js/global.js"></script>
</body>
</html>
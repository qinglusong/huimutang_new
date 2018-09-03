<?php /* Smarty version 2.6.26, created on 2018-09-03 19:33:11
         compiled from contact.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link href="http://localhost/theme/huimutang/images/css/container.css" rel="stylesheet">
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=m9NbZNsf9dK0p87DgDYDDHWr"></script>
    <div class="bg_01">
        <p class="bg1-t1 wow fadeInDown">联系我们</p>
        <p class="bg1-t2 wow fadeInDown">CONTACT US</p>
        <div class="bg1-con flex-show flex-show flex-wrap wow fadeInUp">
            <div class="flex-show flex-row">
                <div><img src="http://localhost/theme/huimutang/images/imgs/s1_b.png"></div>
                <div class="flex-show flex-column bg4-txt">
                    <p>客户咨询：</p>
                    <p><?php echo $this->_tpl_vars['site']['tel']; ?>
</p>
                </div>
            </div>
            <div class="flex-show flex-row">
                <div><img src="http://localhost/theme/huimutang/images/imgs/s2_b.png"></div>
                <div class="flex-show flex-column bg4-txt">
                    <p>供应合作：</p>
                    <p><?php echo $this->_tpl_vars['site']['tel_commerce']; ?>
</p>
                </div>
            </div>
            <div class="flex-show flex-row">
                <div><img src="http://localhost/theme/huimutang/images/imgs/s3_b.png"></div>
                <div class="flex-show flex-column bg4-txt">
                    <p>公司招聘：</p>
                    <p style='cursor:pointer;' onclick='location.href="http://www.3e-d.com/pages_6.html";'>招聘岗位查询>>></p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_02 flex-show flex-row">
        <div class="bg2-d1 pc-show wow fadeInLeft">
            <p>E-mail：<?php echo $this->_tpl_vars['site']['email']; ?>
</p>
            <p>Web：<?php echo $this->_tpl_vars['site']['web_url']; ?>
</p>
            <p><?php echo $this->_tpl_vars['site']['web_url']; ?>
</p>
        </div>
        <div class="bg2-d2 pc-show wow fadeInRight">
            <p>地址：<?php echo $this->_tpl_vars['site']['site_address']; ?>
</p>
            <p>Add：<?php echo $this->_tpl_vars['site']['site_en_addr']; ?>
</p>
            <p>邮编：<?php echo $this->_tpl_vars['site']['youbian']; ?>
</p>
        </div>
        <div class="bg-d3-m mobile-show">
            <p>地址：<?php echo $this->_tpl_vars['site']['site_address']; ?>
</p>
            <p>邮编：<?php echo $this->_tpl_vars['site']['youbian']; ?>
</p>
            <p>E-mail：<?php echo $this->_tpl_vars['site']['email']; ?>
</p>
            <p>Web：<?php echo $this->_tpl_vars['site']['web_url']; ?>
</p>
            <p><?php echo $this->_tpl_vars['site']['web_url']; ?>
</p>
        </div>
    </div>
    <div class="bg_03 wow fadeIn">
        <div id="map"></div>
    </div>

    <div class="bg-col-07 mobile-show">
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

    <div class="bg_04">
        <h1>虹桥世界中心</h1>
        <p>Hongqiao World Centre</p>
        <div class="hq-img-div flex-show flex-row flex-wrap">
            <div><img src="http://localhost/theme/huimutang/images/imgs/hq1.jpg"></div>
            <div><img src="http://localhost/theme/huimutang/images/imgs/hq2.jpg"></div>
            <div><img src="http://localhost/theme/huimutang/images/imgs/hq3.jpg"></div>
        </div>
    </div>

	
	<script>
<?php echo '
    // 百度地图API功能
    var map = new BMap.Map("map");    // 创建Map实例
    var point = new BMap.Point(121.311725,31.190143);
    map.centerAndZoom(point, 15);  // 初始化地图,设置中心点坐标和地图级别
    //添加地图类型控件
    map.addControl(new BMap.MapTypeControl({
        mapTypes:[
            BMAP_NORMAL_MAP,
            BMAP_HYBRID_MAP
        ]}));
    map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

    // 添加带有定位的导航控件
    var navigationControl = new BMap.NavigationControl({
        // 靠左上角位置
        anchor: BMAP_ANCHOR_TOP_LEFT,
        // LARGE类型
        type: BMAP_NAVIGATION_CONTROL_LARGE,
        // 启用显示定位
        enableGeolocation: true
    });
    map.addControl(navigationControl);

    // 添加定位控件
    var geolocationControl = new BMap.GeolocationControl();
    geolocationControl.addEventListener("locationSuccess", function(e){
        // 定位成功事件
        var address = \'\';
        address += e.addressComponent.province;
        address += e.addressComponent.city;
        address += e.addressComponent.district;
        address += e.addressComponent.street;
        address += e.addressComponent.streetNumber;
        alert("当前定位地址为：" + address);
    });
    geolocationControl.addEventListener("locationError",function(e){
        // 定位失败事件
        alert(e.message);
    });
    map.addControl(geolocationControl);

    map.centerAndZoom(point, 15);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);               // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
'; ?>

</script>
    <!-- footer -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
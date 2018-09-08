<?php /* Smarty version 2.6.26, created on 2018-09-08 14:42:51
         compiled from inc/header.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js"></script>
    <script type="text/javascript" src="http://localhost/theme/huimutang/images/js/wow.js"></script>
    <link href="http://localhost/theme/huimutang/images/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/swiper.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutang/images/css/tool.css" rel="stylesheet">

</head>
<body>
<div class="header zoom-div mobile-show">
    <div class="flex-show m-title red-border">
        <div class="m-title-img-div">
            <a class="pc-show" href="/"><img src="http://localhost/theme/huimutang/images/imgs/logo-red.png" alt="<?php echo $this->_tpl_vars['site']['site_name']; ?>
" title="<?php echo $this->_tpl_vars['site']['site_name']; ?>
"></a>
            <a class="mobile-show" href="/"><img src="http://localhost/theme/huimutang/images/imgs/m/title-img-r.png" alt="<?php echo $this->_tpl_vars['site']['site_name']; ?>
" title="<?php echo $this->_tpl_vars['site']['site_name']; ?>
"></a>
        </div>
        <div class="flex-show flex-row">
            <span><a href="tel:02139888336"><img src="http://localhost/theme/huimutang/images/imgs/phone_red.png" alt=""></a></span>
            <span id="J_MobileNavTrigger3"><img src="http://localhost/theme/huimutang/images/imgs/burger_red.png" alt=""></span>
        </div>
    </div>
</div>
<div class="container zoom-div">
    <header class="pc_header white flex-show flex-row pc-show">
        <div class="pc-show flex-show pc-logo wow fadeInLeft">
            <a href="/"><img src="http://localhost/theme/huimutang/images/imgs/logo-red.png" alt="<?php echo $this->_tpl_vars['site']['site_name']; ?>
" title="<?php echo $this->_tpl_vars['site']['site_name']; ?>
"></a>
        </div>
        <div class="title-right wow fadeInRight">
            <div class=" flex-column flex-right pc-show flex-show">
                <div class="pc-logo-right"><img src="http://localhost/theme/huimutang/images/imgs/h_right_red.png"></div>
                <nav class="nav">
                    <ul class="flex-row">
                        <li>
                            <a href="index.html">首页</a>
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
<?php /* Smarty version 2.6.26, created on 2018-09-09 17:15:34
         compiled from infomation.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link href="http://localhost/theme/huimutangs/images/css/case.css" rel="stylesheet">
    <link href="http://localhost/theme/huimutangs/images/css/infomation.css" rel="stylesheet">
    <div class="bg_1">
        <div class="h-btn-div h-btn-l pc-show wow fadeIn">
            <div class="btn-back-div">
                <span>资讯分类</span>
            </div>
        </div>
        <div class="ul-div pc-show class-1">
            <ul>
                <li class="wow fadeInUp" data-wow-delay="50ms"><a <?php if ($this->_tpl_vars['cat_id'] == 0): ?>class="active"<?php endif; ?> href='news_0_1.html'>全部资讯</a></li>
                
                <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <li class="wow fadeInUp" data-wow-delay="<?php echo ($this->_foreach['foo']['iteration']-1)+1; ?>
00ms"><a <?php if ($this->_tpl_vars['item']['cat_id'] == $this->_tpl_vars['cat_id']): ?>class="active"<?php endif; ?> href='news_<?php echo $this->_tpl_vars['item']['cat_id']; ?>
_1.html'><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>


        <div class="m-btn-div mobile-show flex-show flex-row">
            <div onclick="location.href='news_0_1.html';" class="m-btn flex-show flex-row wow fadeInLeft <?php if ($this->_tpl_vars['cat_id'] == 0): ?>active<?php endif; ?>"><div>全部资讯</div><div class="btn-img-div"><img src="http://localhost/theme/huimutang/images/imgs/m/r-r-s.png"></div></div>
            
            <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
            <div onclick="location.href='news_<?php echo $this->_tpl_vars['item']['cat_id']; ?>
_1.html';" class="m-btn flex-show flex-row wow fadeInRight <?php if ($this->_tpl_vars['item']['cat_id'] == $this->_tpl_vars['cat_id']): ?>active<?php endif; ?>"><div><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</div><div class="btn-img-div"><img src="http://localhost/theme/huimutang/images/imgs/m/r-r-s.png"></div></div>
            <?php endforeach; endif; unset($_from); ?>
        </div>
<!--移动显示-->
        <div id ='mobile_show' data-page='<?php echo $this->_tpl_vars['page']; ?>
' data-cat-id='<?php echo $this->_tpl_vars['cat_id']; ?>
' class="class-con mobile-show">


            <div class="bg-4-c flex-show flex-row mobile-show" >
            <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>

                <a href="news_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html">
                <div class="bg-4-c-m wow fadeInUp news-panel-focus mobile-show " data-wow-delay="100ms">
                    <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
                    <p class="bg-4m-t1"><?php echo $this->_tpl_vars['item']['title']; ?>
</p>
                    <p class="bg-4m-t2"><?php echo $this->_tpl_vars['item']['description']; ?>

                    </p>
                    <p class="bg-4m-t3"><?php echo $this->_tpl_vars['item']['add_date']; ?>
</p>
                </div>
                </a>

                <?php if (( $this->_tpl_vars['key']+1 ) % 4 == 0): ?>
                </div>
                <div class="bg-4-c flex-show flex-row mobile-show">
                <?php endif; ?>

                <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>
                </div>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            

    </div>
<!--PC显示-->
        <div id='pc_show' data-page='<?php echo $this->_tpl_vars['page']; ?>
' data-cat-id='<?php echo $this->_tpl_vars['cat_id']; ?>
' class="class-con pc-show">
                <div class="bg-4-c flex-show flex-row pc-show">
                <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <a href="news_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html">
                <div class="bg-4-c-m wow fadeInUp news-panel-focus" data-wow-delay="100ms">
                    <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
                    <p class="bg-4m-t1"><?php echo $this->_tpl_vars['item']['title']; ?>
</p>
                    <p class="bg-4m-t2"><?php echo $this->_tpl_vars['item']['description']; ?>

                    </p>
                    <p class="bg-4m-t3"><?php echo $this->_tpl_vars['item']['add_date']; ?>
</p>
                </div>
                </a>

                <?php if (( $this->_tpl_vars['key']+1 ) % 3 == 0): ?>
                </div>
                <div class="bg-4-c flex-show flex-row pc-show">
                <?php endif; ?>

                <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>
                </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>


 
    </div>
    <!--<div class="btn-down-div pc-show wow fadeIn">-->
        <!--<img src="http://localhost/theme/huimutangs/images/imgs/donw_btn.png">-->
    <!--</div>-->
    <!-- footer -->
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
<?php echo '
    function add_div1() {
        var page1 = $(\'#pc_show\').attr(\'data-page\');
                var cat_id1 = $(\'#pc_show\').attr(\'data-cat-id\');
                var page2 = $(\'#mobile_show\').attr(\'data-page\');
                var cat_id2 = $(\'#mobile_show\').attr(\'data-cat-id\');
                $.ajax({
                    //\'async\' : false,// 使用同步的Ajax请求
                    type : "post",
                    url : \'article_category_post.php\',
                    dataType : "json",
                    data : {id:cat_id1,page:page1},
                    success : function(e){
                            if(e.code==200){
                                //组合数据 设置page加1

                                var newhtml=\'<div class="bg-4-c flex-show flex-row pc-show">\\n\';
                                $.each(e.data.list, function (n, value) {


                                    newhtml +=\'<a href="news_info_\'+value.id+\'.html">\'+
                                        \'<div class="bg-4-c-m wow fadeInUp news-panel-focus" data-wow-delay="\'+(n+1)+\'00ms">\'+
                                        \'<div class="bg-4m-img news-panel-focus-img"><img src="\'+value.image+\'"></div>\'+
                                        \'<p class="bg-4m-t1">\'+value.title.substring(0,20)+\'</p>\'+
                                        \'<p class="bg-4m-t2">\'+value.description.substring(0,20)+\'</p>\'+
                                        \'</div>\'+
                                        \'</a>\';
                                        if((n+1)%3==0){
                                            newhtml +=\'</div><div class="bg-4-c flex-show flex-row pc-show">\';
                                        }



                                });

                                
                                newhtml +=\'</div>\';




                                var newhtml_mobile=\'<div class="bg-4-c flex-show flex-row mobile-show">\\n\';
                                $.each(e.data.list, function (n, value) {


                                    newhtml_mobile +=\'<a href="news_info_\'+value.id+\'.html">\'+
                                        \'<div class="bg-4-c-m wow fadeInUp news-panel-focus mobile-show" data-wow-delay="\'+(n+1)+\'00ms">\'+
                                        \'<div class="bg-4m-img news-panel-focus-img"><img src="\'+value.image+\'"></div>\'+
                                        \'<p class="bg-4m-t1">\'+value.title.substring(0,20)+\'</p>\'+
                                        \'<p class="bg-4m-t2">\'+value.description.substring(0,20)+\'</p>\'+
                                        \'</div>\'+
                                        \'</a>\';
                                        if((n+1)%4==0){
                                            newhtml_mobile +=\'</div><div class="bg-4-c flex-show flex-row mobile-show">\';
                                        }



                                });

                                
                                newhtml_mobile +=\'</div>\';




                                $(\'#pc_show\').attr(\'data-page\',e.data.page);
                                $(\'#mobile_show\').attr(\'data-page\',e.data.page);

                                $("#pc_show").append(newhtml);
                                $("#mobile_show").append(newhtml_mobile);
                                
                            }else{
                            $(\'#pc_show\').attr(\'data-page\',e.data.page);
                            $(\'#mobile_show\').attr(\'data-page\',e.data.page);
                                alert(e.message);
                                
                            }
                    }
                });

        

    }

    $(window).scroll(function(){
            totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
            if(($(document).height()) <= totalheight) {
                add_div1();
            }
        });

    //add_div1();

'; ?>

</script>
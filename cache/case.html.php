<?php /* Smarty version 2.6.26, created on 2018-09-09 15:56:41
         compiled from case.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'case.html', 48, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="http://localhost/theme/huimutangs/images/css/case.css" rel="stylesheet">

    <div class="bg_1">
        <div class="h-btn-div qus-color1 h-btn-l pc-show wow fadeIn">
            <div class="btn-back-div">
                <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                 <span><a href='case_<?php echo $this->_tpl_vars['item']['cat_id']; ?>
_0_1.html'><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a></span>
                <?php endforeach; endif; unset($_from); ?>
                <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                 <div class="<?php if ($this->_tpl_vars['item']['cat_id'] == 1): ?>btn-l<?php endif; ?><?php if ($this->_tpl_vars['item']['cat_id'] == 2): ?>btn-r<?php endif; ?> <?php if ($this->_tpl_vars['item']['cat_id'] == $this->_tpl_vars['cat_f_id']): ?>show<?php else: ?>hidden<?php endif; ?>"><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
        <div class="ul-div pc-show class-1 show">
            <ul>
                <li class="wow fadeInUp" data-wow-delay="50ms">
                   <a <?php if ($this->_tpl_vars['cat_id'] == 0): ?>class="active"<?php endif; ?> href='case_<?php echo $this->_tpl_vars['cat_f_id']; ?>
_0_1.html'>全部案例</a>
                </li>
                <?php $_from = $this->_tpl_vars['product_category_erji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <li class="wow fadeInUp" data-wow-delay="<?php echo ($this->_foreach['foo']['iteration']-1)+1; ?>
00ms">
                    <a <?php if ($this->_tpl_vars['item']['cat_id'] == $this->_tpl_vars['cat_id']): ?>class="active"<?php endif; ?> href='case_<?php echo $this->_tpl_vars['cat_f_id']; ?>
_<?php echo $this->_tpl_vars['item']['cat_id']; ?>
_1.html'><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</a>
                </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
        


        <div class="m-btn-div mobile-show flex-show flex-row">
            <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <div class="m-btn flex-show flex-row wow <?php if ($this->_tpl_vars['item']['cat_id'] == 1): ?>fadeInLeft<?php endif; ?> <?php if ($this->_tpl_vars['item']['cat_id'] == 2): ?>fadeInRight<?php endif; ?> " <?php if ($this->_tpl_vars['item']['cat_id'] == 1): ?>id="case_class_but"<?php endif; ?> <?php if ($this->_tpl_vars['item']['cat_id'] == 2): ?>id="hy_class_but"<?php endif; ?>>
                <div><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</div>
                <div class="btn-img-div">
                    <img src="http://localhost/theme/huimutang/images/imgs/m/btn-d-s.png">
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
        </div>

        <div class="class-con" id='down_data' data-page='<?php echo $this->_tpl_vars['page']; ?>
' data-cat-id='<?php echo $this->_tpl_vars['cat_id']; ?>
' data-cat-f-id='<?php echo $this->_tpl_vars['cat_f_id']; ?>
'>

            <div class="bg-4-c flex-show flex-row">
            <?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['foo']['iteration']++;
?>
                <a href="case_info_<?php echo $this->_tpl_vars['item']['id']; ?>
.html">
                <div class="bg-4-c-m wow fadeInUp news-panel-focus" data-wow-delay="100ms">
                    <div class="bg-4m-img news-panel-focus-img"><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
"></div>
                    <p class="bg-4m-t1"><?php if ($this->_tpl_vars['item']['name']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '') : smarty_modifier_truncate($_tmp, 20, '')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '') : smarty_modifier_truncate($_tmp, 20, '')); ?>
<?php endif; ?></p>
                    <p class="bg-4m-t2"><?php if ($this->_tpl_vars['item']['price']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '') : smarty_modifier_truncate($_tmp, 20, '')); ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?></p>
                </div>
                </a>
                <?php if (( $this->_tpl_vars['key']+1 ) % 3 == 0): ?>
            </div>
            <div class="bg-4-c flex-show flex-row">
                <?php endif; ?>

                <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>
            </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>


        </div>
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
    $(".close-div").click(function () {
        $(".m-class-btn-div1").addClass("hidden");
        $(".m-class-btn-div2").addClass("hidden");
    })

    $("#case_class_but").click(function () {
        $(".m-class-btn-div1").removeClass("hidden");
    })
    $("#hy_class_but").click(function () {
        $(".m-class-btn-div2").removeClass("hidden");
    })


    function add_div1() {

        var page = $(\'#down_data\').attr(\'data-page\');
        var cat_id = $(\'#down_data\').attr(\'data-cat-id\');
        var cat_f_id = $(\'#down_data\').attr(\'data-cat-f-id\');
        $.ajax({
            //\'async\' : false,// 使用同步的Ajax请求
            type : "post",
            url : \'product_category_post.php\',
            dataType : "json",
            data : {id:cat_id,fid:cat_f_id,page:page},
            success : function(e){
                    if(e.code==200){
                        //组合数据 设置page加1
                        
                        
                        
                        var newhtml=\'<div class="bg-4-c flex-show flex-row">\\n\';
                        $.each(e.data.list, function (n, value) {   
                            newhtml +=\'<a href="case_info_\'+value.id+\'.html">\'+
                                \'<div class="bg-4-c-m wow fadeInUp news-panel-focus" data-wow-delay="\'+(n+1)+\'00ms">\'+
                                \'<div class="bg-4m-img news-panel-focus-img"><img src="\'+value.image+\'"></div>\'+
                                \'<p class="bg-4m-t1">\'+value.name.substring(0,20)+\'</p>\'+
                                \'<p class="bg-4m-t2">\'+value.price.substring(0,20)+\'</p>\'+
                                \'</div>\'+
                                \'</a>\';
                                if((n+1)%3==0){
                                    newhtml +=\'</div><div class="bg-4-c flex-show flex-row">\';
                                }
                        });

                        
                        newhtml +=\'</div>\';

                        $(\'#down_data\').attr(\'data-page\',e.data.page);
                        $(".class-con").append(newhtml);
                        
                        
                    }else{
                    $(\'#down_data\').attr(\'data-page\',e.data.page);
                        alert(e.message);
                        
                    }
            }
        });
        

    }

    // $(window).scroll(function () {
    //     add_div1()
    // });
    $(window).scroll(function(){
        totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
        if(($(document).height()) <= totalheight) {
            add_div1();
            //$(".class-con").append(newhtml);
        }
    });
    //add_div1();

//    add_div2();

    function add_div2() {
        $(\'.class-con\').css("height","1385px");
        var newhtml2 = \'<div class="bg-4-c flex-show flex-row" style="visiblity:visible">\\n\' +
                \'                <div class="bg-4-c-m  news-panel-focus" style="visiblity:visible">\\n\' +
                \'                    <div class="bg-4m-img news-panel-focus-img"><img src="http://localhost/theme/huimutangs/images/imgs/pic3.jpg"></div>\\n\' +
                \'                    <p class="bg-4m-t1">鼓起羽绒</p>\\n\' +
                \'                    <p class="bg-4m-t2">高端羽绒家纺领军品牌</p>\\n\' +
                \'                </div>\\n\' +
                \'                <div class="bg-4-c-m  news-panel-focus" style="visiblity:visible">\\n\' +
                \'                    <div class="bg-4m-img news-panel-focus-img"><img src="http://localhost/theme/huimutangs/images/imgs/pic1.jpg"></div>\\n\' +
                \'                    <p class="bg-4m-t1">鼓起羽绒</p>\\n\' +
                \'                    <p class="bg-4m-t2">高端羽绒家纺领军品牌</p>\\n\' +
                \'                </div>\\n\' +
                \'                <div class="bg-4-c-m  news-panel-focus" style="visiblity:visible">\\n\' +
                \'                    <div class="bg-4m-img news-panel-focus"><img src="http://localhost/theme/huimutangs/images/imgs/pic2.jpg"></div>\\n\' +
                \'                    <p class="bg-4m-t1">鼓起羽绒</p>\\n\' +
                \'                    <p class="bg-4m-t2">高端羽绒家纺领军品牌</p>\\n\' +
                \'                </div>\\n\' +
                \'            </div>\'

        $(\'.class-con\').scroll(function(){
            var $this = $(this)
            totalheight = parseFloat($this.height()) + parseFloat($this.scrollTop());
            if($this.height() <= totalheight-100) {
                $(".class-con").append(newhtml2);
            }
        })
    }


'; ?>

</script>
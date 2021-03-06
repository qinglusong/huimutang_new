<?php
/**
 * DouPHP
 * --------------------------------------------------------------------------------------------------
 * 版权所有 2013-2018 漳州豆壳网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.douco.com
 * --------------------------------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在遵守授权协议前提下对程序代码进行修改和使用；不允许对程序代码以任何形式任何目的的再发布。
 * 授权协议：http://www.douco.com/license.html
 * --------------------------------------------------------------------------------------------------
 * Author: DouCo
 * Release Date: 2018-05-23
 */
define('IN_DOUCO', true);

require (dirname(__FILE__) . '/include/init.php');

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'default';

// 图片上传
include_once (ROOT_PATH . 'include/file.class.php');
$file = new File('images/product/'); // 实例化类文件(文件上传路径，结尾加斜杠)

// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'product');

if ($_USER['action_list'] != 'ALL' && $_USER['action_list']!='ADMIN2' && $_USER['action_list']!='ADMIN') {
        $dou->dou_msg($_LANG['without'], 'manager.php');
}

/**
 * +----------------------------------------------------------
 * 产品列表
 * +----------------------------------------------------------
 */
if ($rec == 'default') {
    $smarty->assign('ur_here', $_LANG['product']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['product_add'],
            'href' => 'product.php?rec=add' 
    ));
    
    // 获取参数
    $cat_id = $_REQUEST['cat_id'] ? $_REQUEST['cat_id'] : '';
    $cat_id_like = '';

    if(!is_array($cat_id) && $cat_id!=''){
            $cat_id_flag_arr = explode(',', $cat_id);
            $cat_id_flag_str = $cat_id;
    }
    if(is_array($cat_id)){//是数组 form过来的
        foreach($cat_id as $k=>$v){
            $cat_id_like .=' cat_id like "%|'.$v.'|%" or';
        }
        $cat_id_flag_str = implode(',', $cat_id);
    }
    if(is_array($cat_id_flag_arr)){
        foreach($cat_id_flag_arr as $k=>$v){
            $cat_id_like .=' cat_id like "%|'.$v.'|%" or';
        }
    }

    if(empty($cat_id)){
        $cat_id = $cat_id_flag_arr;
    }

    $cat_id_like = trim($cat_id_like,'or');


    $keyword = isset($_REQUEST['keyword']) ? trim($_REQUEST['keyword']) : '';
    
    // 筛选条件
    //$where = ' WHERE cat_id IN (' . $cat_id . $dou->dou_child_id('product_category', $cat_id) . ')';

    if($cat_id_like){
        $where = 'WHERE  '.$cat_id_like.' ';// cat_id like '%_10_%'' or cat_id like '%__20%' ...
    }else{
        $where = 'WHERE 1=1 ';
    }
    

    if ($keyword) {
        $where = $where . " AND name LIKE '%$keyword%'";
        $get = '&keyword=' . $keyword;
    }
    
    // 分页
    $page = $check->is_number($_REQUEST['page']) ? $_REQUEST['page'] : 1;
    $page_url = 'product.php' . ($cat_id_flag_str ? '?cat_id=' . $cat_id_flag_str : '');
    $limit = $dou->pager('product', 15, $page, $page_url, $where, $get);
    
    $sql = "SELECT id, name, cat_id, add_time FROM " . $dou->table('product') . $where . " ORDER BY id DESC" . $limit;
    $query = $dou->query($sql);
    while ($row = $dou->fetch_array($query)) {
        $cat_name = $dou->get_one("SELECT cat_name FROM " . $dou->table('product_category') . " WHERE cat_id = '$row[cat_id]'");
        $add_time = date("Y-m-d", $row['add_time']);
        
        $product_list[] = array (
                "id" => $row['id'],
                "cat_id" => $row['cat_id'],
                "cat_name" => $cat_name,
                "name" => $row['name'],
                "add_time" => $add_time 
        );
    }
    
    // 首页显示商品数量限制框
    for($i = 1; $i <= $_CFG['home_display_product']; $i++) {
        $sort_bg .= "<li><em></em></li>";
    }
    //print_r($cat_id);
    // 赋值给模板
    $sorts =$dou->get_sort('product', 'name');
    //print_r($sorts);
    $smarty->assign('sort', $dou->get_sort('product', 'name'));
    $smarty->assign('xiangmuzixun_sort', $dou->get_xiangmuzixun_sort('product', 'name'));
    $smarty->assign('cat_id', $cat_id);
    $smarty->assign('keyword', $keyword);
    $smarty->assign('product_erji_category', $dou->get_erji_category('product_category'));
    $smarty->assign('product_list', $product_list);
    
    $smarty->display('product.htm');
} 

/**
 * +----------------------------------------------------------
 * 产品添加
 * +----------------------------------------------------------
 */
elseif ($rec == 'add') {
    $smarty->assign('ur_here', $_LANG['product_add']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['product'],
            'href' => 'product.php' 
    ));
    
    // 格式化自定义参数，并存到数组$product，商品编辑页面中调用商品详情也是用数组$product，
    if ($_DEFINED['product']) {
        $defined = explode(',', $_DEFINED['product']);
        foreach ($defined as $row) {
            $defined_product .= $row . "：\n";
        }
        $product['defined'] = trim($defined_product);
        $product['defined_count'] = count(explode("\n", $product['defined'])) * 2;
    }
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    

    $product_yiji_category = $dou->get_yiji_category('product_category');
    $product_hangye_erji_category = $dou->get_erji_category('product_category',2);
    $product_xiangmu_erji_category = $dou->get_erji_category('product_category',1);
    // 赋值给模板
    $smarty->assign('form_action', 'insert');
    $smarty->assign('product_yiji_category', $product_yiji_category);
    $smarty->assign('product_hangye_erji_category', $product_hangye_erji_category);
    $smarty->assign('product_xiangmu_erji_category', $product_xiangmu_erji_category);
    $smarty->assign('item_id', $dou->auto_id('product'));
    $smarty->assign('product', $product);
    
    $smarty->display('product.htm');
} 

elseif ($rec == 'insert') {
    $file_banner_list = $_FILES['show_img'];
    $file_banner_list_wap = $_FILES['show_img_wap'];
    

    // 数据验证
    if (empty($_POST['name'])) $dou->dou_msg($_LANG['name'] . $_LANG['is_empty']);
    //if (!$check->is_price($_POST['price'] = trim($_POST['price']))) $dou->dou_msg($_LANG['price_wrong']);
    
    // 文件上传盒子
    $image = $file->box('product', $dou->auto_id('product'), 'image', 'main', false, true);
    
    // 数据格式化
    $add_time = time();
    $_POST['defined'] = str_replace("\r\n", ',', $_POST['defined']);
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    $cat_ids = '';
    $cat_f_xm_id = false;
    $cat_f_hy_id = false;
    if($_POST['cat_id_xiangmu']){
        foreach($_POST['cat_id_xiangmu'] as $k=>$v){
            $cat_ids .='|'.$v.'|,';
        }
        $cat_f_xm_id = true;//项目分类
    }

    if($_POST['cat_id_hangye']){
        foreach($_POST['cat_id_hangye'] as $k=>$v){
            $cat_ids .='|'.$v.'|,';
        }
        $cat_f_hy_id = true;//行业分类
    }
    $cat_f_id = 0;
    if($cat_f_xm_id && $cat_f_hy_id){
        $cat_f_id = 3;//两类分类
    }else{
        if($cat_f_xm_id){
            $cat_f_id = 1;//项目分类
        }elseif($cat_f_hy_id){
            $cat_f_id = 2;//行业分类
        }
    }

    $cat_ids = trim($cat_ids,',');

    $post_description = htmlspecialchars($_POST['description']);
    
    $sql = "INSERT INTO " . $dou->table('product') . " (id, cat_id,cat_f_id, name, en_name, price, defined, content, image ,keywords, description, add_time, sort_list)" . " VALUES (NULL, '$cat_ids', '$cat_f_id', '$_POST[name]', '$_POST[en_name]', '$_POST[price]', '$_POST[defined]', '$_POST[content]', '$image', '$_POST[keywords]', '$post_description', '$add_time', '".$_POST['sort_list']."')";
    $dou->query($sql);
    $insert_id = $dou->insert_id();

    // 插入幻灯案例图片

    if(isset($file_banner_list['name']) ){

        foreach($file_banner_list['name'] as $k=>$v){
            if($v==''){
                continue;
            }
            $files = array();
            $files['show_img']['name'] = $v;
            $files['show_img']['type'] = $file_banner_list['type'][$k];
            $files['show_img']['tmp_name'] = $file_banner_list['tmp_name'][$k];
            $files['show_img']['error'] = $file_banner_list['error'][$k];
            $files['show_img']['size'] = $file_banner_list['size'][$k];

            $show_img = '';
            if ($v != "") {
                $custom_filename = $dou->create_rand_string('letter', 6, date('Ymd'));
                $show_img = $file->box_banner($files,'show', $dou->auto_id('show'), 'show_img', 'main', $custom_filename);

                $sql = "INSERT INTO " . $dou->table('show') . " (id, show_name, show_link, show_img, type, sort, type_id)" . " VALUES (NULL, '".$_POST['banner_title'][$k]."', '".$_POST['banner_link'][$k]."', '$show_img', 'demo', '".$_POST['banner_sort'][$k]."', '$insert_id')";
                $dou->query($sql);
            }

        }

    }



    //wap

    if(isset($file_banner_list_wap['name'])){

        foreach($file_banner_list_wap['name'] as $k=>$v){
            if($v==''){
                continue;
            }
            $files_wap = array();
            $files_wap['show_img']['name'] = $v;
            $files_wap['show_img']['type'] = $file_banner_list_wap['type'][$k];
            $files_wap['show_img']['tmp_name'] = $file_banner_list_wap['tmp_name'][$k];
            $files_wap['show_img']['error'] = $file_banner_list_wap['error'][$k];
            $files_wap['show_img']['size'] = $file_banner_list_wap['size'][$k];

            $show_img = '';
            
            if ($v != "") {
                $custom_filename = $dou->create_rand_string('letter', 6, date('Ymd'));
                $show_img = $file->box_banner($files_wap,'show', $dou->auto_id('show'), 'show_img', 'main', $custom_filename);

                $sql = "INSERT INTO " . $dou->table('show') . " (id, show_name, show_link, show_img, type, sort, type_id)" . " VALUES (NULL, '".$_POST['banner_title_wap'][$k]."', '".$_POST['banner_link_wap'][$k]."', '$show_img', 'demom', '".$_POST['banner_sort_wap'][$k]."', '$insert_id')";
                $dou->query($sql);
            }

        }

    }

    
    $dou->create_admin_log($_LANG['product_add'] . ': ' . $_POST['name']);
    $dou->dou_msg($_LANG['product_add_succes'], 'product.php');
} 

/**
 * +----------------------------------------------------------
 * 产品编辑
 * +----------------------------------------------------------
 */
elseif ($rec == 'edit') {
    $smarty->assign('ur_here', $_LANG['product_edit']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['product'],
            'href' => 'product.php' 
    ));
    
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : '';
    
    $query = $dou->select($dou->table('product'), '*', '`id` = \'' . $id . '\'');
    $product = $dou->fetch_array($query);
    
    // 格式化数据
    $product['image'] = $dou->dou_file($product['image']);
    
    // 格式化自定义参数
    if ($_DEFINED['product'] || $product['defined']) {
        $defined = explode(',', $_DEFINED['product']);
        foreach ($defined as $row) {
            $defined_product .= $row . "：\n";
        }
        // 如果商品中已经写入自定义参数则调用已有的
        $product['defined'] = $product['defined'] ? str_replace(",", "\n", $product['defined']) : trim($defined_product);
        $product['defined_count'] = count(explode("\n", $product['defined'])) * 2;
    }

    //print_r($product);
    $cat_ids = str_replace('|', '', $product['cat_id']);
    $product['cat_ids_arr'] = explode(',', $cat_ids);
    //print_r($cat_ids_arr);

    $product['img_wap_list'] = $dou->get_demo_show_list('demom',$id);//移动幻灯片
    $product['img_pc_list'] = $dou->get_demo_show_list('demo',$id);//PC幻灯片
    //print_r($product);exit;
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    $product_yiji_category = $dou->get_yiji_category('product_category');
    $product_hangye_erji_category = $dou->get_erji_category('product_category',2);
    $product_xiangmu_erji_category = $dou->get_erji_category('product_category',1);
    // 赋值给模板
    $smarty->assign('form_action', 'update');
    $smarty->assign('product_yiji_category', $product_yiji_category);
    $smarty->assign('product_hangye_erji_category', $product_hangye_erji_category);
    $smarty->assign('product_xiangmu_erji_category', $product_xiangmu_erji_category);
    $smarty->assign('item_id', $id);
    $smarty->assign('product', $product);
    
    $smarty->display('product.htm');
} 

elseif ($rec == 'update') {
    $file_banner_list = $_FILES['show_img'];
    $file_banner_list_wap = $_FILES['show_img_wap'];
    //print_r($file_banner_list);exit;
    // 数据验证
    if (empty($_POST['name'])) $dou->dou_msg($_LANG['name'] . $_LANG['is_empty']);
    //if (!$check->is_price($_POST['price'] = trim($_POST['price']))) $dou->dou_msg($_LANG['price_wrong']);
        
    // 文件上传盒子
    $image = $file->box('product', $_POST['id'], 'image', 'main', false, true);
    $image = $image ? ", image = '" . $image . "'" : '';
    
    // 格式化自定义参数
    $_POST['defined'] = str_replace("\r\n", ',', $_POST['defined']);
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    $cat_f_xm_id = false;
    $cat_f_hy_id = false;
    $cat_ids = '';
    if($_POST['cat_id_xiangmu']){
        foreach($_POST['cat_id_xiangmu'] as $k=>$v){
            $cat_ids .='|'.$v.'|,';
        }
        $cat_f_xm_id = true;//项目分类
    }

    if($_POST['cat_id_hangye']){
        foreach($_POST['cat_id_hangye'] as $k=>$v){
            $cat_ids .='|'.$v.'|,';
        }
        $cat_f_hy_id = true;//行业分类
    }

    $cat_f_id = 0;
    if($cat_f_xm_id && $cat_f_hy_id){
        $cat_f_id = 3;//两类分类
    }else{
        if($cat_f_xm_id){
            $cat_f_id = 1;//项目分类
        }elseif($cat_f_hy_id){
            $cat_f_id = 2;//行业分类
        }
    }

    $cat_ids = trim($cat_ids,',');
    $post_description = htmlspecialchars($_POST['description']);
    $sql = "update " . $dou->table('product') . " SET cat_id = '$cat_ids', cat_f_id = '$cat_f_id', name = '$_POST[name]', en_name = '$_POST[en_name]', price = '$_POST[price]', defined = '$_POST[defined]' ,content = '$_POST[content]'" . $image . ", keywords = '$_POST[keywords]', description = '$post_description', sort_list='".$_POST['sort_list']."' WHERE id = '$_POST[id]'";
    $dou->query($sql);
    $insert_id = $_POST['id'];

    // 插入幻灯案例图片

    if(isset($file_banner_list['name']) || isset($_POST['banner_sort'])){

        foreach($_POST['banner_sort'] as $k=>$v){
            //print_r($_POST['banner_id'][$k]);
            if($file_banner_list['name'][$k]=='' && empty($_POST['banner_id'][$k])){
                continue;
            }

            $files = array();
            $files['show_img']['name'] = $file_banner_list['name'][$k];
            $files['show_img']['type'] = $file_banner_list['type'][$k];
            $files['show_img']['tmp_name'] = $file_banner_list['tmp_name'][$k];
            $files['show_img']['error'] = $file_banner_list['error'][$k];
            $files['show_img']['size'] = $file_banner_list['size'][$k];

            $show_img = '';
            if ($file_banner_list['name'][$k] != "") {
                $custom_filename = $dou->create_rand_string('letter', 6, date('Ymd'));
                $show_img = $file->box_banner($files,'show', $dou->auto_id('show'), 'show_img', 'main', $custom_filename);

                $sql = "INSERT INTO " . $dou->table('show') . " (id, show_name, show_link, show_img, type, sort, type_id)" . " VALUES (NULL, '".$_POST['banner_title'][$k]."', '".$_POST['banner_link'][$k]."', '$show_img', 'demo', '".$_POST['banner_sort'][$k]."', '$insert_id')";
                $dou->query($sql);
            }else{
                $sql = "update " . $dou->table('show') . " SET show_name='".$_POST['banner_title'][$k]."',show_link = '".$_POST['banner_link'][$k]."', sort = '".$_POST['banner_sort'][$k]."' , type_id = '$insert_id' WHERE id = '".$_POST['banner_id'][$k]."'";
                $dou->query($sql);
            }



        }

    }



    //wap

    if(isset($file_banner_list_wap['name']) || isset($_POST['banner_sort_wap'])){

        foreach($_POST['banner_sort_wap'] as $k=>$v){
            //print_r($_POST['banner_id_wap'][$k]);
            if($file_banner_list_wap['name'][$k]=='' && empty($_POST['banner_id_wap'][$k])){
                continue;
            }
            $files_wap = array();
            $files_wap['show_img']['name'] = $file_banner_list_wap['name'][$k];
            $files_wap['show_img']['type'] = $file_banner_list_wap['type'][$k];
            $files_wap['show_img']['tmp_name'] = $file_banner_list_wap['tmp_name'][$k];
            $files_wap['show_img']['error'] = $file_banner_list_wap['error'][$k];
            $files_wap['show_img']['size'] = $file_banner_list_wap['size'][$k];

            $show_img = '';
            
            if ($file_banner_list_wap['name'][$k] != "") {
                $custom_filename = $dou->create_rand_string('letter', 6, date('Ymd'));
                $show_img = $file->box_banner($files_wap,'show', $dou->auto_id('show'), 'show_img', 'main', $custom_filename);

                $sql = "INSERT INTO " . $dou->table('show') . " (id, show_name, show_link, show_img, type, sort, type_id)" . " VALUES (NULL, '".$_POST['banner_title_wap'][$k]."', '".$_POST['banner_link_wap'][$k]."', '$show_img', 'demom', '".$_POST['banner_sort_wap'][$k]."', '$insert_id')";
                $dou->query($sql);
            }else{
                $sql = "update " . $dou->table('show') . " SET show_name='".$_POST['banner_title_wap'][$k]."',show_link = '".$_POST['banner_link_wap'][$k]."', sort = '".$_POST['banner_sort_wap'][$k]."' , type_id = '$insert_id' WHERE id = '".$_POST['banner_id_wap'][$k]."'";

                $dou->query($sql);
            }

        }

    }
    
    $dou->create_admin_log($_LANG['product_edit'] . ': ' . $_POST['name']);
    $dou->dou_msg($_LANG['product_edit_succes'], 'product.php');
}

/**
 * +----------------------------------------------------------
 * 文件盒子
 * +----------------------------------------------------------
 */
elseif ($rec == 'filebox') {
    // 验证并获取合法的REQUEST
    $id = $check->is_number($_REQUEST['item_id']) ? $_REQUEST['item_id'] : '';
    $type = $check->is_letter($_REQUEST['type']) ? $_REQUEST['type'] : '';
    
    // 文件上传盒子
    $custom_filename = $id . '_' . $type . '_' . $dou->create_rand_string('number', 6, time());
    $image = $file->box('product', $id, $type . '_file', $type, $custom_filename);
    $file_url = $dou->dou_file($image);
    $img = '<img src="' . $file_url. '" data-file="' . $image . '" />';
    
    echo $img;
}

/**
 * +----------------------------------------------------------
 * 重新生成产品图片
 * +----------------------------------------------------------
 */
elseif ($rec == 'thumb') {
    $smarty->assign('ur_here', $_LANG['product_thumb']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['product'],
            'href' => 'product.php' 
    ));
    
    $sql = "SELECT file FROM " . $dou->table('file') . " WHERE module = 'product' AND thumb_size > 0 ORDER BY id ASC";
    $count = mysql_num_rows($query = $dou->query($sql));
    $mask['count'] = preg_replace('/d%/Ums', $count, $_LANG['product_thumb_count']);
    $mask_tag = '<i></i>';
    $mask['confirm'] = $_POST['confirm'];
    
    for($i = 1; $i <= $count; $i++)
        $mask['bg'] .= $mask_tag;
    
    $smarty->assign('mask', $mask);
    $smarty->display('product.htm');
    
    if (isset($_POST['confirm'])) {
        echo ' ';
        while ($row = $dou->fetch_array($query)) {
            $file->thumb(basename($row['image']), $_CFG['thumb_width'], $_CFG['thumb_height']);
            echo "<script type=\"text/javascript\">mask('" . $mask_tag . "');</script>";
            flush();
            ob_flush();
        }
        echo "<script type=\"text/javascript\">success();</script>\n</body>\n</html>";
    }
}

/**
 * +----------------------------------------------------------
 * 产品删除
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'product.php');
    
    $name = $dou->get_one("SELECT name FROM " . $dou->table('product') . " WHERE id = '$id'");
    
    if (isset($_POST['confirm']) ? $_POST['confirm'] : '') {
        // 删除相应图片
        $image = $dou->get_one("SELECT image FROM " . $dou->table('product') . " WHERE id = '$id'");
        $dou->del_file($image);
        
        $dou->create_admin_log($_LANG['product_del'] . ': ' . $name);
        $dou->delete($dou->table('product'), "id = '$id'", 'product.php');
    } else {
        $_LANG['del_check'] = preg_replace('/d%/Ums', $name, $_LANG['del_check']);
        $dou->dou_msg($_LANG['del_check'], 'product.php', '', '30', "product.php?rec=del&id=$id");
    }
}

/**
 * +----------------------------------------------------------
 * 批量操作选择
 * +----------------------------------------------------------
 */
elseif ($rec == 'action') {
    if (is_array($_POST['checkbox'])) {
        if ($_POST['action'] == 'del_all') {
            // 批量商品删除
            $dou->del_all('product', $_POST['checkbox'], 'id', 'image', true);
        } elseif ($_POST['action'] == 'category_move') {
            // 批量移动分类
            $dou->category_move('product', $_POST['checkbox'], $_POST['new_cat_id']);
        } else {
            $dou->dou_msg($_LANG['select_empty']);
        }
    } else {
        $dou->dou_msg($_LANG['product_select_empty']);
    }
}

/**
 * +----------------------------------------------------------
 * 首页商品筛选
 * +----------------------------------------------------------
 */
elseif ($rec == 'sort') {
    // act操作项的初始化
    $act = $check->is_rec($_REQUEST['act']) ? $_REQUEST['act'] : '';
 
    $dou->sort_box('product', $act, $id);
    $dou->dou_header($_SERVER['HTTP_REFERER']); // 跳转到上一页面
}

/**
 * +----------------------------------------------------------
 * 项目咨询筛选
 * +----------------------------------------------------------
 */
elseif ($rec == 'xiangmuzixun_sort') {
    // act操作项的初始化
    $act = $check->is_rec($_REQUEST['act']) ? $_REQUEST['act'] : '';
 
    $dou->xiangmuzixun_sort_box('product', $act, $id);
    $dou->dou_header($_SERVER['HTTP_REFERER']); // 跳转到上一页面
}

?>
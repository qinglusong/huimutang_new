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
$cat_f_ids = array(1,2,3);
$cat_f_id = $_REQUEST['fid'];
if(!in_array($cat_f_id, $cat_f_ids)){
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
}
$where = ' WHERE 1=1 ';
// 验证并获取合法的ID，如果不合法将其设定为-1
$cat_id = $firewall->get_legal_id('product_category', $_REQUEST['id'], $_REQUEST['unique_id']);
if ($cat_id == -1) {
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
} else {
    if($cat_id>0){
        $where .= " AND cat_id like '%|".$cat_id."|%'   ";
    }
    
}

if($cat_f_id && $cat_id==0){
    $where .="AND cat_f_id in ('".$cat_f_id."','3') ";
}

// 获取分页信息
$page = $check->is_number($_REQUEST['page']) ? trim($_REQUEST['page']) : 1;
$limit = $dou->pager('product', ($_DISPLAY['product'] ? $_DISPLAY['product'] : 10), $page, $dou->rewrite_url('product_category', $cat_id), $where);

/* 获取产品列表 */
$sql = "SELECT id, cat_id, name, price, content, image, add_time, description FROM " . $dou->table('product') . $where . " ORDER BY sort_list ASC,id DESC" . $limit;
$query = $dou->query($sql);

while ($row = $dou->fetch_array($query)) {
    $url = $dou->rewrite_url('product', $row['id']); // 获取经过伪静态产品链接
    $add_time = date("Y-m-d", $row['add_time']);
    
    // 如果描述不存在则自动从详细介绍中截取
    $description = $row['description'] ? $row['description'] : $dou->dou_substr($row['content'], 150, false);
    
    // 格式化价格
    $price = $row['price'];
    $img_pc_list = array();
    $img_wap_list = array();

    //$img_wap_list = $dou->get_demo_show_list('demom',$row['id']);//移动幻灯片
    //$img_pc_list = $dou->get_demo_show_list('demo',$row['id']);//PC幻灯片
    $product_list[] = array (
            "id" => $row['id'],
            "cat_id" => $row['cat_id'],
            "name" => $row['name'],
            "price" => $price,
            "image" => $dou->dou_file($row['image']),
            "add_time" => $add_time,
            "description" => $description,
            "url" => $url,
            //"img_pc_list"=>$img_pc_list,
            //"img_wap_list"=>$img_wap_list,
    );
}

// 获取分类信息
$cate_info = $dou->get_row('product_category', '*', "cat_id = '$cat_id'");
// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('product_category', $cat_id));
$smarty->assign('keywords', $cate_info['keywords']);
$smarty->assign('description', $cate_info['description']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'product_category', $cat_id, $cate_info['parent_id']));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('ur_here', $dou->ur_here('product_category', $cat_id));
$smarty->assign('cate_info', $cate_info);

//产品分类
$product_category = $dou->get_category('product_category', 0, $cat_id);
$smarty->assign('product_category', $product_category);

$product_category_erji = $dou->get_category('product_category', $cat_f_id, $cat_id);
$smarty->assign('product_category_erji', $product_category_erji);

//print_r($product_category_erji);
//产品列表-----------------
$smarty->assign('product_list', $product_list);
$smarty->assign('cat_id', $cat_id);
$smarty->assign('cat_f_id', $cat_f_id);
$smarty->assign('page', $page);
//print_r($product_list);
$smarty->assign('is_case',1);//footer.tpl 页面 分类弹出
$smarty->display('case.html');
?>
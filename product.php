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

// 验证并获取合法的ID，如果不合法将其设定为-1
$id = $firewall->get_legal_id('product', $_REQUEST['id'], $_REQUEST['unique_id']);
$cat_id_str = $dou->get_one("SELECT cat_id FROM " . $dou->table('product') . " WHERE id = '$id'");
//
#print_r($cat_id);

//取出来cat_id的第一个id
$cat_id_arr = explode(',', $cat_id_str);
$cat_id = trim($cat_id_arr[0],'|');//分类id去掉竖线保留分类数字
$cat_info_hangye_arr = array();
foreach($cat_id_arr as $k=>$v){//循环案例分类获取对应分类信息
	$cat_info = array();
	$cat_id_flag = trim($v,'|');
	$cat_info = $dou->fetch_assoc($dou->query("SELECT cat_id,cat_name,parent_id FROM " . $dou->table('product_category') . " WHERE cat_id = '" . $cat_id_flag . "'"));
	//print_r($cat_info);exit;
	$cat_id_name_arr[$k]['cat_name'] = $cat_info['cat_name'];
	$cat_id_name_arr[$k]['parent_id'] = $cat_info['parent_id'];
	$cat_id_name_arr[$k]['cat_id'] = $cat_id_flag;

    //找对应的行业分类
    if($cat_info['parent_id']=='2'){
        $cat_info_hangye_arr[] = $cat_info['cat_id'];
    }
}
$where_str_flag = ' and ( ';
foreach($cat_info_hangye_arr as $k=>$v){
    $where_str_flag .=" cat_id like '%|".$v."|%' or";
}
$where_str_flag = trim($where_str_flag,'or').' )';
//print_r($cat_id_name_arr);//案例详情对应案例分类
$parent_id = $dou->get_one("SELECT parent_id FROM " . $dou->table('product_category') . " WHERE cat_id = '" . $cat_id . "'");
if ($id == -1)
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
    
// 获取产品信息
$product = $dou->get_row('product', '*', "id = '$id'");

 $product['img_wap_list'] = $dou->get_demo_show_list('demom',$id);//移动幻灯片
 $product['img_pc_list'] = $dou->get_demo_show_list('demo',$id);//PC幻灯片

// 格式化数据
//$product['price'] = $product['price'] > 0 ? $dou->price_format($product['price']) : $_LANG['price_discuss'];
$product['add_time'] = date("Y-m-d", $product['add_time']);
$product['image'] = $dou->dou_file($product['image']);

// 格式化自定义参数
foreach (explode(',', $product['defined']) as $row) {
    $row = explode('：', str_replace(":", "：", $row));
    
    if ($row['1']) {
        $defined[] = array (
                "arr" => $row['0'],
                "value" => $row['1'] 
        );
    }
}

$where = "where 1=1 ".$where_str_flag." and id<>'".$id."'  ";//同行业分类下 排除当前案例

/* 获取产品列表 */
$sql_list = "SELECT id, cat_id, name, price, content, image, add_time, description FROM " . $dou->table('product') . $where . " ORDER BY sort_list ASC,id DESC limit 3";
//echo $sql_list;exit;
$query_list = $dou->query($sql_list);
$ii = 0;
while ($row_list = $dou->fetch_array($query_list)) {
    //$url = $dou->rewrite_url('product', $row_list['id']); // 获取经过伪静态产品链接
    $add_time = date("Y-m-d", $row_list['add_time']);
    
    // 如果描述不存在则自动从详细介绍中截取
    $description = $row_list['description'] ? $row_list['description'] : $dou->dou_substr($row_list['content'], 150, false);
    
    // 格式化价格
    $price = $row_list['price'];
   // $img_pc_list = array();
   // $img_wap_list = array();

    //$img_wap_list = $dou->get_demo_show_list('demom',$row_list['id']);//移动幻灯片
    //$img_pc_list = $dou->get_demo_show_list('demo',$row_list['id']);//PC幻灯片
    $product_related_list[] = array (
            "id" => $row_list['id'],
            "cat_id" => $row_list['cat_id'],
            "name" => $row_list['name'],
            "price" => $price,
            "image" => $dou->dou_file($row_list['image']),
            "add_time" => $add_time,
            "description" => $description,
            "url" => $url,
            //"img_pc_list"=>$img_pc_list,
            //"img_wap_list"=>$img_wap_list,
    );
    $ii++;
}
if($ii< 3){
    $sqls = "SELECT id, cat_id, name, price, content, image, add_time, description FROM " . $dou->table('product') . " where 1=1 ORDER BY sort_list ASC,id DESC limit ".(3-$ii);
    //echo $sql_list;exit;
    $querys = $dou->query($sqls);
    while ($rows = $dou->fetch_array($querys)) {
        //$url = $dou->rewrite_url('product', $rows['id']); // 获取经过伪静态产品链接
        $add_time = date("Y-m-d", $rows['add_time']);
        
        // 如果描述不存在则自动从详细介绍中截取
        $description = $rows['description'] ? $rows['description'] : $dou->dou_substr($rows['content'], 150, false);
        
        // 格式化价格
        $price = $rows['price'];
        $product_related_list[$ii] = array (
                "id" => $rows['id'],
                "cat_id" => $rows['cat_id'],
                "name" => $rows['name'],
                "price" => $price,
                "image" => $dou->dou_file($rows['image']),
                "add_time" => $add_time,
                "description" => $description,
                "url" => $url,
        );
        $ii++;
    }

}

//print_r($product_related_list);// 相关案例 规则 取出相同行业分类的前三个 如果不满足 则从全部案例取
$smarty->assign('product_related_list', $product_related_list);
// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('product_category', $cat_id, $product['name']));
$smarty->assign('keywords', $product['keywords']);
$smarty->assign('description', $product['description']);
//print_r($product);
// 赋值给模板-数据
$smarty->assign('ur_here', $dou->ur_here('product_category', $cat_id, $product['name']));
$smarty->assign('product_category', $dou->get_category('product_category', 0, $cat_id));
$smarty->assign('product', $product);
$smarty->assign('defined', $defined);
$smarty->assign('lift', $dou->lift('product', $id, $cat_id));
$lifts = $dou->lift('product',$product['id']);
#print_r($lifts);

$smarty->assign('product_cate_list',$cat_id_name_arr);
$smarty->assign('lifts', $lifts);
$smarty->assign('cases', 1);//案例详情头部包含swiper.js文件 和右侧浮层
$smarty->display('cases.html');
?>
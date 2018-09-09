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

// 强制在移动端中显示PC版
// if (isset($_REQUEST['mobile'])) {
//     setcookie('client', 'pc');
//     if ($_COOKIE['client'] != 'pc') $_COOKIE['client'] = 'pc';
// }

require (dirname(__FILE__) . '/include/init.php');

// 如果存在搜索词则转入搜索页面
if ($_REQUEST['s']) {
    if ($check->is_search_keyword($keyword = trim($_REQUEST['s']))) {
        require (ROOT_PATH . 'include/search.inc.php');
    } else {
        $dou->dou_msg($_LANG['search_keyword_wrong']);
    }
}




// 获取关于我们信息
// $sql = "SELECT * FROM " . $dou->table('page') . " WHERE id = '1'";
// $query = $dou->query($sql);
// $about = $dou->fetch_array($query);

// // 写入到index数组
// $index['about_name'] = $about['page_name'];
// $index['about_content'] = $about['description'] ? $about['description'] : $dou->dou_substr($about['content'], 300, false); // 这里的300数值不能设置得过大，否则会造成程序卡死
// $index['about_link'] = $dou->rewrite_url('page', '1');
// $index['cur'] = true;

// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title());
$smarty->assign('keywords', $_CFG['site_keywords']);
$smarty->assign('description', $_CFG['site_description']);



// 赋值给模板-数据
$show_mobile_list = $dou->get_show_list('mobile');//移动幻灯片
$show_pc_list = $dou->get_show_list('pc');//PC幻灯片
//print_r($show_pc_list);exit;

$smarty->assign('show_pc_list', $show_pc_list);//1居中 2居左 3居右
$smarty->assign('show_mobile_list', $show_mobile_list);

//print_r($show_mobile_list);

//案例列表
$demo_list = $dou->get_list('product', 'ALL', $_DISPLAY['home_product'], 'sort DESC');
$news_list = $dou->get_list('article', 'ALL', $_DISPLAY['home_article'], 'sort DESC');
// foreach($demo_list as $k=>$v){
// 	$demo_list[$k]['description'] = mb_strcut($v['description'],0,520,'utf-8');
// 	$demo_list[$k]['price_jieshao'] = mb_strcut($v['price_jieshao'],0,60,'utf-8');
// }
// foreach($news_list as $k=>$v){
// 	$news_list[$k]['description'] = mb_strcut($v['description'],0,520,'utf-8');
// }
//print_r($demo_list);
$smarty->assign('recommend_product', $demo_list);
$smarty->assign('recommend_article', $news_list);


$smarty->assign('link', $link);
$smarty->assign('index', $index);
//print_r($demo_list);

$smarty->display('index.html');


?>
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
$id = intval($_REQUEST['id']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));

$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'page', $id));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('top', $top);
$pages_list = $dou->get_pages_list();

#print_r($pages_list);
$pages_arr = array();
$counts_pages = count($pages_list);
foreach($pages_list as $k=>$v){
	if($v['id']==$id){
		$pages_arr['info'] = $v;
		if($k>0 && $k < ($counts_pages-1)){
			$page_up = $k-1;
			$page_down = $k+1;
		}else{
			if($k=='0'){
				$page_up = count($pages_list)-1;
				$page_down = $k+1;
			}else{
				$page_up = $k-1;
				$page_down = 0;
			}
			
		}
		
		break;
	}
}
if(empty($pages_arr['info'])){
	$pages_arr['info'] = $pages_list[0];
	$page_up = count($pages_list)-1;
	$page_down = 1;
	
}
$pages_arr['list'] = $pages_list;
//print_r($pages_arr);


//这里----------------------------------------------------赋值页面标题 用对应内容的标题
// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('page', '', $pages_arr['info']['page_name']));
$smarty->assign('keywords', $pages_arr['info']['page_name']);
$smarty->assign('description', $pages_arr['info']['page_name']);





$smarty->assign('pages_arr',$pages_arr);
$smarty->assign('page_up',$page_up);
$smarty->assign('page_down',$page_down);
$smarty->display('hmt.html');

?>
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
$cat_id = $firewall->get_legal_id('article_category', $_REQUEST['id'], $_REQUEST['unique_id']);
if ($cat_id == -1) {
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
} else {
    $where = ' WHERE cat_id IN (' . $cat_id . $dou->dou_child_id('article_category', $cat_id) . ')';
}
    
// 获取分页信息
$page = $check->is_number($_REQUEST['page']) ? trim($_REQUEST['page']) : 1;
$page =intval($page)+1;//访问这里都是下一页
$limit = $dou->pager('article', ($_DISPLAY['article'] ? $_DISPLAY['article'] : 9), $page, $dou->rewrite_url('article_category', $cat_id), $where);

/* 获取文章列表 */
$sql = "SELECT id, title, content, image, cat_id, add_time,add_date, click, description FROM " . $dou->table('article') . $where . " ORDER BY add_date DESC,id DESC" . $limit;
$query = $dou->query($sql);

while ($row = $dou->fetch_array($query)) {
    $url = $dou->rewrite_url('article', $row['id']);
    $add_time = date("Y-m-d", $row['add_time']);
    $add_date = date("Y-m-d", $row['add_date']);
    $add_time_short = date("m-d", $row['add_time']);
    
    // 如果描述不存在则自动从详细介绍中截取
    $description = $row['description'] ? $row['description'] : $dou->dou_substr($row['content'], 200, false);
    
    $article_list[] = array (
            "id" => $row['id'],
            "cat_id" => $row['cat_id'],
            "title" => $row['title'],
            "image" => $dou->dou_file($row['image']),
            "add_time" => $add_time,
            "add_date" => $add_date,
            "add_time_short" => $add_time_short,
            "click" => $row['click'],
            "description" => $description,
            "url" => $url 
    );
}

//print_r($article_list);
$data['list'] = $article_list;
$data['page'] = $page;
$data['cat_id'] = $cat_id;
if($article_list){

    $arr = array('code'=>200,'message'=>'ok','data'=>$data,'html'=>'');
    echo json_encode($arr);
}else{
    $arr = array('code'=>101,'message'=>'没有更多啦','data'=>$data);
    echo json_encode($arr);
}

?>
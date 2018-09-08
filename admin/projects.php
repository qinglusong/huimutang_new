<?php
/**
 * 慧目堂设计
 * --------------------------------------------------------------------------------------------------
 * 版权所有 2004-2017 Shanghai Three Eyes Art Design Co.,Ltd.  All Rights Reserved  © 版权所有，并保留所有权利。
 * 网站地址: http://www.3e-d.com
 * --------------------------------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在遵守授权协议前提下对程序代码进行修改和使用；不允许对程序代码以任何形式任何目的的再发布。
 * 
 * --------------------------------------------------------------------------------------------------
 * Author: DouCo
 * Release Date: 2018-05-23
 */
define('IN_DOUCO', true);

require (dirname(__FILE__) . '/include/init.php');

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'edit';

// 图片上传
include_once (ROOT_PATH . 'include/file.class.php');
$file = new File('images/projects/'); // 实例化类文件(文件上传路径，结尾加斜杠)

// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'projects');

/**
 * +----------------------------------------------------------
 * 文章列表
 * +----------------------------------------------------------
 */
if ($rec == 'edit') {
    $smarty->assign('ur_here', '编辑项目咨询页面');
    $smarty->assign('action_link', array (
            'text' => '项目咨询页面',
            'href' => 'projects.php' 
    ));
    
    
    $projects = $dou->get_row('fuwu', '*', "type = '2'");//type=2 项目咨询页
    if($projects['contents']){
        $projects['contents'] = urldecode($projects['contents']);
        $projects['contents_arr'] = json_decode($projects['contents'],true);
    }
    //print_r($projects);
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    $projects['contents_arr']['bottom_video']['url_format'] =  $dou->dou_file($projects['contents_arr']['bottom_video']['url']);
    //客户评价背景图 pc and wap
    $projects['contents_arr']['comment_bg']['url_format'] =  $dou->dou_file($projects['contents_arr']['comment_bg']['url']);
    $projects['contents_arr']['comment_bg_m']['url_format'] =  $dou->dou_file($projects['contents_arr']['comment_bg_m']['url']);
    // 赋值给模板
    $smarty->assign('form_action', 'update');
    $smarty->assign('info', $projects);
    
    $smarty->display('projects.htm');

} 

elseif ($rec == 'update') {
    // 验证标题
    //if (empty($_POST['title'])) $dou->dou_msg('所有内容不可为空');
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    $post_data = array();
    
    unset($_POST['id']);
    unset($_POST['submit']);
    unset($_POST['token']);
    $posts = $_POST;
    unset($_POST['old_file_url']);
    unset($_POST['old_file_url_comment_bg']);
    unset($_POST['old_file_url_comment_bg_m']);
    foreach($_POST as $k=>$v){
        if(!$v){
            $dou->dou_msg('所有内容不可为空');
            break;
        }
    }
    //print_r($posts);exit;
    $post_flg = array();
    foreach($posts['comment'] as $k=>$v){
        $post_flg[$k]['title'] = $v;
        $post_flg[$k]['content'] = $posts['comment_content'][$k];
    }

    
    $post_data['comment_new'] = $post_flg;
    $post_data['bottom_right_title'] = $posts['bottom_right_title'];
    $post_data['bottom_right_content'] = $posts['bottom_right_content'];

    if($posts['is_up_file']=='1'){
        // 文件上传盒子
        if ($_FILES['bottom_video']['name'] != "") {
            $custom_filename = $dou->create_rand_string('letter', 6, date('Ymd'));
            $videos = $file->box('show', $dou->auto_id('show'), 'bottom_video', 'main', $custom_filename);
            $post_data['bottom_video']['url'] = $videos; 
        }
        
    }else{
        $post_data['bottom_video']['url'] = $posts['old_file_url']; 
    }
//客户评价背景 pc

    if($posts['is_up_file_comment_bg']=='1'){
        // 文件上传盒子
        if ($_FILES['comment_bg']['name'] != "") {
            $custom_filenames = $dou->create_rand_string('letter', 6, date('Ymd'));
            $videos = $file->box('show', $dou->auto_id('show'), 'comment_bg', 'main', $custom_filenames);
            $post_data['comment_bg']['url'] = $videos; 
        }
        
    }else{
        $post_data['comment_bg']['url'] = $posts['old_file_url_comment_bg']; 
    }
//客户评价背景 wap
    if($posts['is_up_file_comment_bg_m']=='1'){
        // 文件上传盒子
        if ($_FILES['comment_bg_m']['name'] != "") {
            $custom_filenames = $dou->create_rand_string('letter', 6, date('Ymd'));
            $videos = $file->box('show', $dou->auto_id('show'), 'comment_bg_m', 'main', $custom_filenames);
            $post_data['comment_bg_m']['url'] = $videos; 
        }
        
    }else{
        $post_data['comment_bg_m']['url'] = $posts['old_file_url_comment_bg_m']; 
    }
    
//print_r($post_data);exit;
    $contents = json_encode($post_data);
    $contents = urlencode($contents);
    
    $sql = "UPDATE " . $dou->table('fuwu') . " SET contents = '$contents' WHERE type = '2' ";
    $dou->query($sql);
    
    $dou->create_admin_log('修改项目咨询页面内容');
    $dou->dou_msg('项目咨询页修改成功', 'projects.php');
} 




?>
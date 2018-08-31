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
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'default';

// 图片上传
include_once (ROOT_PATH . 'include/file.class.php');
$file = new File('data/slide/'); // 实例化类文件(文件上传路径，结尾加斜杠)
                                                        
// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'demoshow');
$smarty->assign('ur_here', $_LANG['demoshow']);
$systems = 'demo';
$smarty->assign('show_list', $dou->get_show_list($systems));

$sql = "SELECT id, name FROM " . $dou->table('product') . " ORDER BY id DESC ";
    $query = $dou->query($sql);
    while ($row = $dou->fetch_array($query)) {
        //$add_time = date("Y-m-d", $row['add_time']);
        
        $product_list[] = array (
                "id" => $row['id'],
                "name" => $row['name'],
        );
    }

$smarty->assign('demo_list',$product_list);


/**
 * +----------------------------------------------------------
 * 幻灯列表
 * +----------------------------------------------------------
 */
if ($rec == 'default') {
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    $smarty->display('demoshow.htm');
} 

/**
 * +----------------------------------------------------------
 * 幻灯添加处理
 * +----------------------------------------------------------
 */
elseif ($rec == 'insert') {
    // 验证幻灯名称
    //if (empty($_POST['show_name'])) $dou->dou_msg($_LANG['show_name'] . $_LANG['is_empty']);
      if (!$_POST['type_id']) $dou->dou_msg('选择对应的案例');
    // 文件上传盒子
    if ($_FILES['show_img']['name'] != "") {
        $custom_filename = $dou->create_rand_string('letter', 6, date('Ymd'));
        $show_img = $file->box('show', $dou->auto_id('show'), 'show_img', 'main', $custom_filename);
    }
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    
    $sql = "INSERT INTO " . $dou->table('show') . " (id, show_name, show_link, show_img, type, sort, type_id)" . " VALUES (NULL, '$_POST[show_name]', '$_POST[show_link]', '$show_img', '$systems', '$_POST[sort]', '$_POST[type_id]')";
    $dou->query($sql);
    
    $dou->create_admin_log($_LANG['show_add'] . ': ' . $_POST[show_name]);
    $dou->dou_msg($_LANG['show_add_succes'], 'demoshow.php');
} 

/**
 * +----------------------------------------------------------
 * 幻灯编辑
 * +----------------------------------------------------------
 */
elseif ($rec == 'edit') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : '';
    
    $query = $dou->select($dou->table('show'), '*', '`id` = \'' . $id . '\'');
    $show = $dou->fetch_array($query);
    
    // 格式化数据
    $show['show_img'] = $dou->dou_file($show['show_img']);
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    // 赋值给模板
    $smarty->assign('id', $id);
    $smarty->assign('show', $show);
    
    $smarty->display('demoshow.htm');
} 

elseif ($rec == 'update') {
    // 验证幻灯名称
    //if (empty($_POST['show_name'])) $dou->dou_msg($_LANG['show_name'] . $_LANG['is_empty']);
        
    // 文件上传盒子
    if ($_FILES['show_img']['name'] != "") {
        $file_name = $dou->get_file_name($dou->get_one("SELECT show_img FROM " . $dou->table('show') . " WHERE id = '$_POST[id]'"));
        $custom_filename = $file_name ? $file_name : $dou->create_rand_string('letter', 6, date('Ymd'));
        $show_img = $file->box('show', $_POST['id'], 'show_img', 'main', $custom_filename);
        $show_img = ", show_img = '" . $show_img . "'";
    }
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    
    $sql = "update " . $dou->table('show') . " SET show_name='$_POST[show_name]'" . $show_img . " ,show_link = '$_POST[show_link]', sort = '$_POST[sort]', type_id = '$_POST[type_id]' WHERE id = '$_POST[id]'";
    $dou->query($sql);
    
    $dou->create_admin_log($_LANG['show_edit'] . ': ' . $_POST[show_name]);
    $dou->dou_msg($_LANG['show_edit_succes'], 'demoshow.php');
}

/**
 * +----------------------------------------------------------
 * 幻灯删除
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'demoshow.php');
    
    $show_name = $dou->get_one("SELECT show_name FROM " . $dou->table('show') . " WHERE id = '$id'");
    
    if (isset($_POST['confirm']) ? $_POST['confirm'] : '') {
        // 删除相应图片
        $show_img = $dou->get_one("SELECT show_img FROM " . $dou->table('show') . " WHERE id = '$id'");
        $dou->del_file($show_img);
        
        $dou->create_admin_log($_LANG['show_del'] . ': ' . $show_name);
        $dou->delete($dou->table('show'), "id = '$id'", 'demoshow.php');
    } else {
        $_LANG['del_check'] = preg_replace('/d%/Ums', $show_name, $_LANG['del_check']);
        $dou->dou_msg($_LANG['del_check'], 'demoshow.php', '', '30', "demoshow.php?rec=del&id=$id");
    }
}

?>
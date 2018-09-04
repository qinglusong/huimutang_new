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
$file = new File('images/article/'); // 实例化类文件(文件上传路径，结尾加斜杠)

// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'article');

/**
 * +----------------------------------------------------------
 * 文章列表
 * +----------------------------------------------------------
 */
if ($rec == 'default') {
    $smarty->assign('ur_here', $_LANG['article']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['article_add'],
            'href' => 'article.php?rec=add' 
    ));
    
    // 获取参数
    $cat_id = $check->is_number($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : 0;
    $keyword = isset($_REQUEST['keyword']) ? trim($_REQUEST['keyword']) : '';
    
    // 筛选条件
    $where = ' WHERE cat_id IN (' . $cat_id . $dou->dou_child_id('article_category', $cat_id) . ')';
    if ($keyword) {
        $where = $where . " AND title LIKE '%$keyword%'";
        $get = '&keyword=' . $keyword;
    }
    
    // 分页
    $page = $check->is_number($_REQUEST['page']) ? $_REQUEST['page'] : 1;
    $page_url = 'article.php' . ($cat_id ? '?cat_id=' . $cat_id : '');
    $limit = $dou->pager('article', 15, $page, $page_url, $where, $get);
    
    $sql = "SELECT id, title, cat_id, image, add_time FROM " . $dou->table('article') . $where . " ORDER BY id DESC" . $limit;
    $query = $dou->query($sql);
    while ($row = $dou->fetch_array($query)) {
        $cat_name = $dou->get_one("SELECT cat_name FROM " . $dou->table('article_category') . " WHERE cat_id = '$row[cat_id]'");
        $add_time = date("Y-m-d", $row['add_time']);
        
        $article_list[] = array (
                "id" => $row['id'],
                "cat_id" => $row['cat_id'],
                "cat_name" => $cat_name,
                "title" => $row['title'],
                "image" => $dou->dou_file($row['image']),
                "add_time" => $add_time 
        );
    }
 
    // 赋值给模板
    $smarty->assign('sort', $dou->get_sort('article', 'title'));
    $smarty->assign('cat_id', $cat_id);
    $smarty->assign('keyword', $keyword);
    $smarty->assign('article_category', $dou->get_category_nolevel('article_category'));
    $smarty->assign('article_list', $article_list);
    
    $smarty->display('article.htm');
} 

/**
 * +----------------------------------------------------------
 * 文章添加
 * +----------------------------------------------------------
 */
elseif ($rec == 'add') {
    $smarty->assign('ur_here', $_LANG['article_add']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['article'],
            'href' => 'article.php' 
    ));
    
    // 格式化自定义参数，并存到数组$article，文章编辑页面中调用文章详情也是用数组$article，
    if ($_DEFINED['article']) {
        $defined = explode(',', $_DEFINED['article']);
        foreach ($defined as $row) {
            $defined_article .= $row . "：\n";
        }
        $article['defined'] = trim($defined_article);
        $article['defined_count'] = count(explode("\n", $article['defined'])) * 2;
    }
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    // 赋值给模板
    $smarty->assign('form_action', 'insert');
    $smarty->assign('article_category', $dou->get_category_nolevel('article_category'));
    $smarty->assign('item_id', $dou->auto_id('product'));
    $smarty->assign('article', $article);
    
    $smarty->display('article.htm');
} 

elseif ($rec == 'insert') {
    // 验证标题
    if (empty($_POST['title'])) $dou->dou_msg($_LANG['article_name'] . $_LANG['is_empty']);
    
    // 文件上传盒子
    $image = $file->box('article', $dou->auto_id('article'), 'image', 'main');
    
    // 数据格式化
    $add_time = time();
    $_POST['defined'] = str_replace("\r\n", ',', $_POST['defined']);
    $_POST['add_date'] = strtotime($_POST['add_date']);
        
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    
    $sql = "INSERT INTO " . $dou->table('article') . " (id, cat_id, title, defined, content, image, keywords, description, add_time, add_date)" . " VALUES (NULL, '$_POST[cat_id]', '$_POST[title]', '$_POST[defined]', '$_POST[content]', '$image', '$_POST[keywords]', '$_POST[description]', '$add_time', '$_POST[add_date]')";
    $dou->query($sql);
    
    $dou->create_admin_log($_LANG['article_add'] . ': ' . $_POST['title']);
    $dou->dou_msg($_LANG['article_add_succes'], 'article.php');
} 

/**
 * +----------------------------------------------------------
 * 文章编辑
 * +----------------------------------------------------------
 */
elseif ($rec == 'edit') {
    $smarty->assign('ur_here', $_LANG['article_edit']);
    $smarty->assign('action_link', array (
            'text' => $_LANG['article'],
            'href' => 'article.php' 
    ));
    
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : '';
    
    $query = $dou->select($dou->table('article'), '*', '`id` = \'' . $id . '\'');
    $article = $dou->fetch_array($query);
    
    // 格式化数据
    $article['image'] = $dou->dou_file($article['image']);
    
    // 格式化自定义参数
    if ($_DEFINED['article'] || $article['defined']) {
        $defined = explode(',', $_DEFINED['article']);
        foreach ($defined as $row) {
            $defined_article .= $row . "：\n";
        }
        // 如果文章中已经写入自定义参数则调用已有的
        $article['defined'] = $article['defined'] ? str_replace(",", "\n", $article['defined']) : trim($defined_article);
        $article['defined_count'] = count(explode("\n", $article['defined'])) * 2;
    }
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    $article['add_date'] = date('Y-m-d',$article['add_date']);
    // 赋值给模板
    $smarty->assign('form_action', 'update');
    $smarty->assign('article_category', $dou->get_category_nolevel('article_category'));
    $smarty->assign('item_id', $id);
    $smarty->assign('article', $article);
    
    $smarty->display('article.htm');
} 

elseif ($rec == 'update') {
    // 验证标题
    if (empty($_POST['title'])) $dou->dou_msg($_LANG['article_name'] . $_LANG['is_empty']);
        
    // 文件上传盒子
    $image = $file->box('article', $_POST['id'], 'image', 'main');
    $image = $image ? ", image = '" . $image . "'" : '';
    
    // 格式化自定义参数
    $_POST['defined'] = str_replace("\r\n", ',', $_POST['defined']);
    $_POST['add_date'] = strtotime($_POST['add_date']);
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    
    $sql = "UPDATE " . $dou->table('article') . " SET cat_id = '$_POST[cat_id]', title = '$_POST[title]', defined = '$_POST[defined]' ,content = '$_POST[content]'" . $image . ", keywords = '$_POST[keywords]', description = '$_POST[description]', add_date = '$_POST[add_date]' WHERE id = '$_POST[id]'";
    $dou->query($sql);
    
    $dou->create_admin_log($_LANG['article_edit'] . ': ' . $_POST['title']);
    $dou->dou_msg($_LANG['article_edit_succes'], 'article.php');
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
    $image = $file->box('article', $id, $type . '_file', $type, $custom_filename);
    $file_url = $dou->dou_file($image);
    $img = '<img src="' . $file_url. '" data-file="' . $image . '" />';
    
    echo $img;
}

/**
 * +----------------------------------------------------------
 * 文章删除
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'article.php');
    $title = $dou->get_one("SELECT title FROM " . $dou->table('article') . " WHERE id = '$id'");
    
    if (isset($_POST['confirm']) ? $_POST['confirm'] : '') {
        // 删除相应商品图片
        $image = $dou->get_one("SELECT image FROM " . $dou->table('article') . " WHERE id = '$id'");
        $dou->del_file($image);
        
        $dou->create_admin_log($_LANG['article_del'] . ': ' . $title);
        $dou->delete($dou->table('article'), "id = '$id'", 'article.php');
    } else {
        $_LANG['del_check'] = preg_replace('/d%/Ums', $title, $_LANG['del_check']);
        $dou->dou_msg($_LANG['del_check'], 'article.php', '', '30', "article.php?rec=del&id=$id");
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
            // 批量文章删除
            $dou->del_all('article', $_POST['checkbox'], 'id', 'image');
        } elseif ($_POST['action'] == 'category_move') {
            // 批量移动分类
            $dou->category_move('article', $_POST['checkbox'], $_POST['new_cat_id']);
        } else {
            $dou->dou_msg($_LANG['select_empty']);
        }
    } else {
        $dou->dou_msg($_LANG['article_select_empty']);
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
 
    $dou->sort_box('article', $act, $id);
    $dou->dou_header($_SERVER['HTTP_REFERER']); // 跳转到上一页面
}

?>
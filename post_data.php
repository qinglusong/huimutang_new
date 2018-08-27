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

$aaa = verifyReferer(1);

//print_r($aaa);


if($_SERVER['REQUEST_METHOD']=='POST'){
		$postData = array();
		$postData['company_name'] = $_POST['company_name'];
		$postData['linkman'] = $_POST['linkman'];
		$postData['tel'] = $_POST['tel'];
		$postData['yusuan'] = $_POST['yusuan'];
		$postData['project_desc'] = $_POST['project_desc'];
		$times = time();
		$ips = get_remote_ip();

		if (isset($_COOKIE["hmtcookie-".$postData['tel']])){
			echo  json_encode(outArray(201,'请一分钟再试'));exit;
		}

		if(empty($postData['company_name']) || empty($postData['linkman']) || empty($postData['tel']) ){
	            echo  json_encode(outArray(204,'数据不全'));exit;
	    }

	    $sql = "INSERT INTO " . $dou->table('customer') . "(`company_name`, `linkman`, `tel` ,`yusuan`, `project_desc`, `add_time`, `ip`) VALUES ( '".$postData['company_name']."', '".$postData['linkman']."', '".$postData['tel']."', '".$postData['yusuan']."', '".$postData['project_desc']."', '".$times."', '".$ips."' ) ";
		$query = $dou->query($sql);
		if($query){
			setcookie("hmtcookie-".$postData['tel'], 1, time()+60);//一分钟
			echo  json_encode(outArray(200,'成功'));
			exit;
		}else{
			echo  json_encode(outArray(201,'错误'));exit;
		}
}else{
	echo  json_encode(outArray(202,'提交错误'));exit;
}


exit;



function get_remote_ip(){
		$ip=false;
		if(!empty($_SERVER["HTTP_CLIENT_IP"]))
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
			if ($ip){
				array_unshift($ips, $ip);
				$ip = FALSE;
			}
			for ($i = 0; $i < count($ips); $i++) {
				if (!preg_match ("/^(10|172\.16|192\.168)\./i", $ips[$i])) {
					$ip = $ips[$i];
					break;
				}
			}
		}
		return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
	}


/**
 * [verifyReferer 防止csrf漏洞]
 * @Author    qinglu
 * @DateTime 2017-11-17T10:19:04+0800
 * @return   [type]                   [description]
 */
 function verifyReferer($return=0){
 	//print_r($_SERVER);
    // 验证referer,防止CSRF漏洞
    if( !isset( $_SERVER['HTTP_REFERER'] ) || (!preg_match( "/^http:\/\/www.3e-d.com\//" , $_SERVER['HTTP_REFERER'] ) )){
		if($return == 1){
			return outArray(1006,'referer error');
		}else{
			header ( "Location: http://www.3e-d.com" );
			die ();
		}
    }

	if($return == 1){
		return outArray(200,'ok');
	}
}

// 返回结果
	function outArray($code, $msg='', $data=array()){
		$code = intval($code);
		return array('code'=>$code, 'msg'=>$msg, 'data'=>$data);
	}


?>
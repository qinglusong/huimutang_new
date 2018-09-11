<?php
if($_REQUEST['cid']=='1'){
	header('Location: /pages.html');
}elseif($_REQUEST['cid']=='2'){
	header('Location: /pages_2.html');
}elseif($_REQUEST['cid']=='6'){
	header('Location: /contact.html');
}else{
	header('Location: /');
}

?>
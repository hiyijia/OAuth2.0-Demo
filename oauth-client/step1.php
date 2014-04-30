<?php
include("common.php");
$my_url=$redirect_uri;
$code=$_REQUEST["code"];
if(empty($code)){
	$_SESSION['state']=md5(uniqid(rand(),TRUE));
	$dialog_url=$server_uri."oauth2-php/server/examples/pdo/authorize.php?response_type=code&client_id=".$app_id."&redirect_uri=".urlencode($my_url)."&state=".$_SESSION['state'];
	
	echo  ("<script> top.location.href='".$dialog_url."'</script>");

}
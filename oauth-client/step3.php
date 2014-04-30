<?php

include('common.php');
$url=$server_uri."oauth2-php/server/examples/pdo/protected_resource.php?oauth_token=".$_SESSION['access_token'];
if($content=file_get_contents($url)){
	echo $content;
}else{
	echo 'not got';
}
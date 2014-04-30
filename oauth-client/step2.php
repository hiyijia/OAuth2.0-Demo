<?php
include("common.php");
if($_REQUEST['error'])
	die($_REQUEST['error']);
function http_post($url,$data){
	$data_url=http_build_query($data);
	$data_len=strlen($data_url);
	echo $data_len;
	return array('content'=>file_get_contents($url,false,stream_context_create(array('http'=>array('method'=>'POST','header'=>"Connection:closeContent-Length:172",
		'content'=>$data_url)))),
		'headers'=>$http_response_header);
	}

	$code=$_REQUEST["code"];
	if($_REQUEST['state']==$_SESSION['state']){
		$re=http_post($server_uri."oauth2-php/server/examples/pdo/token.php",
		array(
			'client_id'=>$app_id,
			'client_secret'=>$app_secret,
			'code'=>$code,
			'grant_type'=>'authorization_code',
			'redirect_uri'=>$redirect_uri
			)
		//	$arrayName = array('client_id' => $app_id)
		);
	$re=(array) json_decode($re['content']);
	if($re['access_token']){
		$_SESSION['access_token']=$re['access_token'];
		echo $re['access_token'];
		echo '<a href="step3.php">protected_resource</a>';
	}else{
		echo 'failed';

	}
}


?>
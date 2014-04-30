<?php
error_reporting(E_ALL-E_NOTICE);
session_start();
$app_id="testclient";//应用id
$app_secret="thisismysecretkey";//应用密钥

/*********服务器参数********/
$server_uri='http://localhost/draft/';

/*****客户端参数*****/
$redirect_uri='http://www.tsang.com/draft/oauth-client/step2.php'
?>
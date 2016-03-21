<?php

	ini_set('max_execution_time', 300);

	require_once('libs/Facebook/GraphObject.php');
	require_once('libs/Facebook/GraphSessionInfo.php');
	require_once('libs/Facebook/Entities/AccessToken.php');
	require_once('libs/Facebook/HttpClients/FacebookHttpable.php');
	require_once('libs/Facebook/HttpClients/FacebookCurl.php');
	require_once('libs/Facebook/HttpClients/FacebookCurlHttpClient.php');
	require_once('libs/Facebook/FacebookSession.php' );
	require_once('libs/Facebook/FacebookRedirectLoginHelper.php' );
	require_once('libs/Facebook/FacebookRequest.php' );
	require_once('libs/Facebook/FacebookResponse.php' );
	require_once('libs/Facebook/FacebookSDKException.php' );
	require_once('libs/Facebook/FacebookRequestException.php' );
	require_once('libs/Facebook/FacebookAuthorizationException.php' );

	
	$fb_app_id = '226372777713630'; // Goto your Fb app->settings
	$fb_secret_id = 'f368ea7a5a9fcc9e2cadecdd6424f40f'; // Goto your Fb app->settings

	//fb_login_url is same url which is added in facebook app->settings.
	$fb_login_url = 'https://localhost/facebook/index.php/'; 
	$fb_logout_url = 'https://localhost/facebook/logout.php';

	session_start();

?>

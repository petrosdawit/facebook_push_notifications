<?php

class pushNotifications {

	/*
		Gets the Facebook SDK for PHP whuch is a library that easily integrates Facebook login and makes requests to Facebook's Graph API.
	*/
	function getFacebook(){
		require_once __DIR__ . '/src/Facebook/autoload.php';
		$facebook = new Facebook\Facebook(array(
			'app_id' => 'APP_ID',
			'app_secret' => 'APP_SECRET',
			'default_graph_version' => 'v2.5'
			)
		);
		return $facebook;
	}

	/*
		Creates the Facebook notification array and the content in the notification
		Input: String for the facebook notification message, String for link to the notification app link
		Output: Notification array that will be put in the facebook POST api call
	*/
	function createNotification($notificationMessage, $notificationAppLink){
		$notificationArray = array(
			'href' => $notificationAppLink,
			'template' => $notificationMessage
		);
		return $notificationArray;
	}

	/*
		Sends the notification through Facebook Graph api through its post method. Catches an error and prints it out if there is a facebook authentication exception. 'ex: needing a valid accesstoken, user not signed up to your app etc...'
		Input: UserId (id you are sending to. The id must have your app installed to send to him/her), accessToken (combination of your app's id and secret), 
		notification array that you created with the createNotification method
		Output: returns true if the post goes through or false otherwise 
	*/
	function sendPushNotification($userId, $accessToken, $notificationArray){
		$facebook = $this->getFacebook();
		$sent = true;
		try {
			$sendNotification = $facebook->post('/' . $userId . '/notifications', $notificationArray, $accessToken);
		}catch(Facebook\Exceptions\FacebookAuthenticationException $e) {
			print 'FacebookAuthenticationException' . $e->getMessage();
			$sent = false;
		}
		return $sent;
	}

}

if (!count(debug_backtrace())) {
	$notifier = new pushNotfications()
	$app_id = 'APP_ID';
	$app_secret = 'APP_SECRET';
	$accessToken = $app_id . '|' . $app_secret;
	$notificationMessage = 'insert message here';
	#app link cannot be any link. you are restricted by your game's url. The href will be your game's url + href($notificationAppLink)
	#ex: if you're game's facebook url is game.com. if your $notificationAppLink is about, you will be redirected to game.com/about.
	#if the game's url + href don't exist, it redirects to game's url as a default
	$notificationAppLink = 'insert app link'; 
	$userId = 'USER_ID';

	$notificationArray = $notifier.createNotification($notificationMessage, $notificationAppLink);
	if ($notifier.sendPushNotification($userId, $accessToken, $notificationArray)){
		print 'The message was sent';
	}
}
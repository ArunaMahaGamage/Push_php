<?php

    	require_once('PushNotifications.php');

	// Message payload
	$msg_payload = array (
		'mtitle' => '{"pass_image": "images/passenger.png","pass_loc_lon":6.865406,"pass_loc_lat":79.895961,"trip_id": 68,"pass_mobile": "778896886", "passenger_name": "Dilani Karunarathne" }',
		'mdesc' => 'Test push notification body',
	
	);
	
	// For Android
	$regId = 'eSpeOSVqNoo:APA91bHUPP5aKUPxrZEBJQcYB7SFEMtG7vHp49hvrStAuW1SXSZwXYMfeLeiSEHPcTLkH_DdIPyZJhjn1rTAxWxxW6PIhxoCJGE48FROGP6A6kTNgSWFFrW27mmLlQzGYfQHh_MrBJ7x';

//$regId = 'f7dFx1yzUuw:APA91bFO7LQY0LDZrl4CYGnhUVk78mNfbXOrQ7OYFhyNBrUNq8mFlGTyJYzhQc317auHhntapa06nqcAJwTaSO6BTbf8HB2VcRfTeuVAqkpKaSA2Leo17nxN7XT6cAqSTFbbhIfl_uU2pQVQ7Jfw5yoyYjjpExHM0g';

	// For iOS
	$deviceToken = 'FE66489F304DC75B8D6E8200DFF8A456E8DAEACEC428B427E9518741C92C6660';
	// For WP8
	$uri = 'http://s.notify.live.net/u/1/sin/HmQAAAD1XJMXfQ8SR0b580NcxIoD6G7hIYP9oHvjjpMC2etA7U_xy_xtSAh8tWx7Dul2AZlHqoYzsSQ8jQRQ-pQLAtKW/d2luZG93c3Bob25lZGVmYXVsdA/EKTs2gmt5BG_GB8lKdN_Rg/WuhpYBv02fAmB7tjUfF7DG9aUL4';
	
	// Replace the above variable values
	
	echo "ok </br>";
    	$result = PushNotifications::android($msg_payload, $regId);

    	echo "result " + $result;

    	
    //	PushNotifications::WP8($msg_payload, $uri);
    	
//    	PushNotifications::iOS($msg_payload, $deviceToken);

?>

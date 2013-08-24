<?php

function get_isgd_url($url)  
{  
	//get content
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://is.gd/api.php?longurl='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$content = curl_exec($ch);  
	curl_close($ch);
	
	//return the data
	return $content;  
}

require_once('TwitterAPIExchange.php');
include('config.php');

if (!isset($_GET['id'])) {
    die("No URL provided!");
}

$url = 'https://api.twitter.com/1.1/statuses/show.json';
$getfield = '?id='.$_GET['id'];
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

$data = json_decode($response);
//echo $response;
if (array_key_exists("user", $data)) {
    $username = $data->user->screen_name;
    $realname = $data->user->name;
    $text = $data->text;
    $url = "https://twitter.com/".$username."/status/".$data->id_str;
    if (!isset($_GET['longurl'])) {
        $url = get_isgd_url($url);
    }
    echo $realname." (@".$username."): \"".$text."\" ".$url;
} else if (array_key_exists("errors", $data)) {
    echo "Error on response: ".$data->errors[0]->message;
} else {
    echo "Unspecified error.";
}
?>
<?php

$url = $_SERVER['SCRIPT_NAME'];
//echo $url;
//var_dump($_SERVER);

$url = rtrim($url, '/'); //remove / from end

$urlMap = [
'' => 'home.php',
'/sql' => 'sql-test.php',
// 'job-description' => 'job-description.html',
// 'goals' => 'goals.html',
// 'conclusion' => 'conclusion.html'
];

if(isset($url)){
	if(!empty($urlMap[$url])){
		require($urlMap[$url]);
	}
	else{
		require("404.php");
	}
}
<?php
$apiKey = "AIzaSyC0UQdluBtwXAl0JWQoBaw6dCNlwm7eqLQ"; 
$query = $_GET['query'];
$maxResults = 10;

$apiUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&maxResults=$maxResults&q=$query&order=rating&key=$apiKey";
$response = file_get_contents($apiUrl);
echo $response;
?>

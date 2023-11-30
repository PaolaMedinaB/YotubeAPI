<?php

require 'vendor/autoload.php';

use Google\Service\YouTube;

use Google\Service\YouTubeList;

// Your Google Cloud API credentials (service account key)
$credentialsPath = '"C:\Users\paomb\Downloads\youtubeapi-406721-c8f945b0ccb3.json"';

// Create a new Google_Client instance
$client = new Google\Client();

// Set up the client with your credentials
$client->setAuthConfig($credentialsPath);
$client->setScopes([YouTube::YOUTUBE_READONLY]);
$client->setAccessType('offline'); // enables refresh token

// Create a new YouTube service
$youtube = new YouTube($client);


//example
$searchResponse = $youtube->search->listSearch('snippet', [
    'q' => 'kittens videos',
    'maxResults' => 10,
]);


// Example: Get information about a video by its ID
$videoId = 'YOUR_VIDEO_ID';
$video = $youtube->videos->listVideos('snippet', ['id' => $videoId]);

// Output the video title
echo 'Video Title: ' . $video->getItems()[0]->getSnippet()->getTitle();
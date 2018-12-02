<?php
// Copy this file to config.php and fill in your own API keys.
// config.php is git-ignored, so keys never get committed.
return [
  // Twitter API (server-side, used by api/twitter.php)
  'twitter' => [
    'oauth_access_token'        => '',
    'oauth_access_token_secret' => '',
    'consumer_key'              => '',
    'consumer_secret'           => '',
  ],
  // YouTube Data API v3 key (client-side, used by assets/js/search.js)
  'youtube_api_key' => '',
  // IEEE Xplore API key (client-side, used by assets/js/search.js)
  'ieee_api_key' => '',
];

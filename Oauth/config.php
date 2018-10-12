<?php

session_start();

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
  'app_id' => '283641248917990',
  'app_secret' => '60e6838fa4182f0028cf4087fae4df5f',
  'default_graph_version' => 'v3.1',
  ]);

$helper = $FB->getRedirectLoginHelper();

?>
<?php
  session_start();

  require 'Facebook/autoload.php';

  $fb = new Facebook\Facebook([
    'app_id' => '742898109445216', // Replace {app-id} with your app id
    'app_secret' => 'bd7155a70c64094bf82f1858abf249ff',
    'default_graph_version' => 'v3.2',
    ]);

  $helper = $fb->getRedirectLoginHelper();

  //$permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('http://localhost/practice/API/FB%20Login/fb-callback.php');

  echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>

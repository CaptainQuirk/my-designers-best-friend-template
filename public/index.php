<?php
  // App wide constants
  define('ROOT', realpath(__DIR__.'/..'));
  define('VENDORS', ROOT.'/vendor');

  /**
    * MyDesignersBestFriend loading
    **/
  if (isset($_GET['url']) && $_GET['url'] === 'favicon.ico') {
    return;
  } else {
    $MyDesignersBestFriend = new DesignersBestFriend();
    $MyDesignersBestFriend->dispatch($_GET['url']);
  }

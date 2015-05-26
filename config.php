<?php

require './vendor/autoload.php';
require './lib/clarify_data_model.php';

function self_url() {
  $url = '';
  $url .= $_SERVER['REQUEST_SCHEME'] . '://';
  $url .= $_SERVER['HTTP_HOST'];
  $url .= dirname($_SERVER['SCRIPT_NAME']);

  return $url;
}

$config = [
  'webroot' =>  self_url(),
  'clarify' => [
    'api_key' => $_ENV['CLARIFY_API_KEY'],
  ],

];

$clarify = new ClarifyDataModel(
  new Clarify\Bundle($config['clarify']['api_key'])
);

function xml() {
  echo '<?xml version="1.0" encoding="UTF-8"?>';
}


<?php

require 'config.php';

$number = (int)$_GET['d'];
$url = $_POST['RecordingUrl'];

if (filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo xml();
  echo '<Response><Say>Invalid URL.</Say></Response>';
  die();
}

$clarify->saveBoxIDWithMedia($number, $url);

echo xml();
?>
<Response>
  <Redirect method="GET"><?php echo $config['webroot'] ?>start.php</Redirect>
</Response>

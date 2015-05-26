<?php

require 'config.php';

$number = $_GET['d'];
$url = $_POST['RecordingUrl'];

$clarify->saveBoxIDWithMedia($number, $url);

echo xml();
?>
<Response>
  <Redirect method="GET"><?php echo $config['webroot'] ?>start.php</Redirect>
</Response>

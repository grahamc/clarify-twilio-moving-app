<?php require 'config.php'; ?>
<h1>Hey there!</h1>
<p>On your Twilio configuration page for a telephone number...</p>

<p><strong>Voice Request URL:</strong> <code><?php echo $config['webroot']; ?>start.php</code></p>
<p><strong>SMS Request URL:</strong> <code><?php echo $config['webroot']; ?>search.php</code></p>

<hr />

<p>Now follow the example on <a href="https://github.com/grahamc/clarify-twilio-moving-app#readme">the README</a></p>


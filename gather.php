<?php
require 'config.php';

$digit = (int)$_REQUEST['Digits'];

xml();
?>
<Response>
  <Say>Recording contents for box number
  <?php echo $digit; ?>.
  Press pound when you're done.</Say>
  <Record
  timeout="3600"
  finishOnKey="#"
  action="<?php echo $config['webroot']; ?>save.php?d=<?php echo $digit; ?>"></Record>
</Response>

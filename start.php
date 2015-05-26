<?php
require 'config.php';

echo xml();
?>
<Response>
  <Gather action="<?php echo $config['webroot']; ?>gather.php" method="GET">
    <Say>Please enter the number of the box you are packing. When you are
         done, press pound. We will keep all recordings of each box number.
    </Say>
  </Gather>
</Response>

<?php

require 'config.php';

$query = $_REQUEST['Body'];

$names = $clarify->searchForBoxes($query);

if (count($names) > 0) {
  $about = implode($names, ', ');
} else {
  $about = '0 boxes';
}

echo xml();
?>
<Response>
  <Message>We found "<?php echo htmlspecialchars($query); ?>" in <?php echo htmlspecialchars($about); ?>.</Message>
</Response>

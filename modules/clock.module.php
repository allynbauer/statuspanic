<?php

date_default_timezone_set('America/Chicago');

$time = date('g:i a');

?>

<p class='jumbo' style='line-height: 50px'>
    <span class='icon'>H</span><?php echo $time; ?>
</p>
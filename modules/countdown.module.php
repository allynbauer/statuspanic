<?php

date_default_timezone_set('America/Chicago');

/* DATA */
// http://php.net/manual/en/function.mktime.php
$stop = $_GET['stop'];

/* DISPLAY */
$diff = $stop - time();
$days = floor($diff/(60*60*24));

if ($diff < 0) {
    $result = 'COUNTDOWN FINISHED!';
} else {
    $result = "$days DAYS <span class='event'>{$_GET['event']}</span>";
}

?>

<div class='mega'>
    <span class='icon'>H</span><?php echo $result; ?>
</div>
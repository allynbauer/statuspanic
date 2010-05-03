<?php

date_default_timezone_set('America/Chicago');

// http://php.net/manual/en/function.mktime.php
$stop = $_GET['stop'];
$diff = $stop - time();
$days = floor($diff/(60*60*24));

if ($diff < 0) {
    $result = 'COUNTDOWN FINISHED!';
} else {
    $result = "$days DAYS <span class='event'>{$_GET['event']}</span>";
}

?>

<p class='jumbo' style='line-height: 50px'>
    <?php echo $result; ?>
</p>
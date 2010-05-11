<?php

/* DATA */
$num = rand(-99, 99);

if (rand(0,4) == 0) {
    $num = 0;
}

/* DISPLAY */
if ($num > 0) {
    $class = 'uparrow';
    $code = 'A';
} elseif ($num < 0) {
    $class = 'downarrow';
    $code = 'A';
} else {
    $class = 'zero-block';
    $code = 'K';
}
?>

<div>    
    <span class='<?php echo $class ?>' id='arrow_icon'><?php echo $code ?></span>
    <span class='mega'><?php echo $num ?>%</span>
</div>

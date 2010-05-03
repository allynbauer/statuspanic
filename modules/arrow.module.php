<?php

$num = 0.56;


if ($num > 0) $class = 'uparrow';
else          $class = 'downarrow';

?>
    
<span class='<?php echo $class ?>'>A</span><span class='mega'><?php echo $num ?>%</span>

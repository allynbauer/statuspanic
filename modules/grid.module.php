<?php

/* DATA */
$data = array(
  array('TRANSMIT',     'Blurb', 'Blarb', 'ZH'),
  array('UNISON',       'Blurb', 'Blarb', 'ZLI'),
  array('CODA',         'Blurb', 'Blarb', 'ZHP'),
  array('OTHER THING',  'Blurb', 'Blarb', 'GL'),
  array('EXCITING',     'Blurb', 'Blarb', 'LGI')
);

/* DISPLAY */
?>

<div>
    <table border='0' width='100%' cellpadding='0' cellspacing='10'>
    <?php
    $count = 0;
    foreach($data as $row) {
        $class = ($count % 2 == 1 ? " class='alt'" : '');
        echo "<tr$class>";
        for($j = 0; $j < count($row); $j++) {
            echo "<td class='cell_$j'>$row[$j]</td>";
        }
        echo '</tr>';
        $count++;
    }
    
    ?>
    
    </table>
</div>
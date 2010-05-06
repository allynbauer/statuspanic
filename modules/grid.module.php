<?php

/* DATA */
$data = array(
  array('TRANSMIT',     'Blurb', 'Blarb', 'ZH'),
  array('UNISON',       'Blurb', 'Blarb', 'ZLI'),
  array('CODA',         'Blurb', 'Blarb', 'ZHP'),
  array('OTHER THING',  'Blurb', 'Blarb', 'GL')
);

/* DISPLAY */
?>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
<?php

foreach($data as $row) {
    echo '<tr>';
    for($j = 0; $j < count($row); $j++) {
        echo "<td class='cell_$j'>$row[$j]</td>";
    }
    echo '</tr>';
}

?>

</table>
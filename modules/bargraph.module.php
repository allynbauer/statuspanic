<?php

class Bar {
    function __construct($name, $height, $header) {
        $this->name = $name;
        $this->height = $height;
        $this->header = $header;
    }
}

$bars = array();
$bars[] = new Bar('TRANSMIT', 18, '18 / 1');
$bars[] = new Bar('CODA', 29, '29 / 3');
$bars[] = new Bar('UNISON', 48, '48 / 3');
$bars[] = new Bar('CANDYBAR', 8, '8 / 2');
$bars[] = new Bar('GENERAL', 3, '3 / 0');


$max_height = 0;
foreach($bars as $bar) {
    if ($bar->height > $max_height)
        $max_height = $bar->height;
}
?>

<div id='graph' style='height: <?php echo $_GET['height'] ?>px'>
<?php for($j = 0; $j < count($bars); $j++) {
    $bar = $bars[$j];
    $count = $j + 1;
    $bar_height =  ($bar->height / $max_height) * $_GET['height'];
    
?>
    <div class='bar'>
        <span class='header'><?php echo $bar->header ?></span>
        <div class='view' id='graph_<?php echo $count ?>' style='height: <?php echo $bar_height; ?>px;'></div>
        <span class='title'><?php echo $bar->name ?></span>
    </div>
<?php } ?>
</div>
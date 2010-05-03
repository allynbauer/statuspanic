<?php
define('CONFIG', 'config.json');

// FIRST: read in the configuration
$config = fopen(CONFIG, 'r');
$data = fread($config, filesize(CONFIG));
$data = json_decode($data);

if (!$data) die('JSON syntax error in "'.CONFIG.'"');

function render($module) {
    $argstr = "''";
    if (isset($module->args)) {
        $argstr = array();
        foreach($module->args as $key => $val) {
            $argstr[] = "$key=" . urlencode($val);
        }
        $argstr = "'" . implode("&", $argstr) . "'";
    }
    
    echo "<div class='module' id='$module->name' style='width: {$module->width}px'></div>\n";
    echo "\t<script type='text/javascript'>activate_module('$module->name', $module->update, $argstr);</script>\n\n";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title><?php echo (isset($data->title) ? $data->title : 'statuspanic generic status board') ?></title>
    <link rel='stylesheet' type='text/css' href='resources/panic.css' />
    <script type='text/javascript' src='resources/jquery.js'></script>
    <script type='text/javascript' src='resources/board.js'></script>
    <style type='text/css'>
        #board {
            width: <?php echo (isset($data->width) ? $data->width . 'px' : '100%') ?>;
        }
    </style>
</head>
<body>
    <div id='board'>
        <?php 
        foreach($data->modules as $module)
            render($module);
        ?>
    </div>
</body>
</html>
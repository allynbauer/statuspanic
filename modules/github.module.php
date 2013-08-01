<?php

require_once("./magpie/rss_fetch.inc");

if (empty($_GET['branch'])) { $branch = "master"; } else { $branch = $_GET['branch']; }
$repo = $_GET['repo']."commits/".$branch.".atom";
$repo = fetch_rss( $repo );
$feed_name = $repo->channel['title'];

?>

<div class="grid">
	<span class="jumbo"><?php echo $feed_name ?></span>
    <table border='0' width='100%' cellpadding='0' cellspacing='10'>
    <?php
	for ($i = 0; $i < $_GET['commits']; $i++) {
		$item = $repo->items[$i];
    	$title = $item['title'];
    	$author = $item['author'];
    	$avatar = $item['media']['thumbnail@url'];?>
        <tr>
        <td style='width: 600px;'><div style='overflow: hidden; width: 600px; white-space:nowrap;'><?php echo $title; ?></div></td>
        <td><img src='<?php echo $avatar; ?>'/>&nbsp;<?php echo $author; ?></td>
        </tr>
    <?php } ?>
    </table>
</div>
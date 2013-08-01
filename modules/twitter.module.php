<?php

require_once("./twitter/twitter.class.php");

$twitter = new Twitter($_GET['consumerKey'], $_GET['consumerSecret'], $_GET['accessToken'], $_GET['accessTokenSecret']);   

try {
    if ($_GET["content"] == "replies") {
        $statuses = $twitter->load(Twitter::REPLIES);
        $label = "Tweets Mentioning @alazyreader";
    } elseif ($_GET["content"] == "me") {
        $statuses = $twitter->load(Twitter::ME);
        $label = "@alazyreader's Recent Tweets";
    }
} catch (Exception $e) {
    ?>
    <div>
        <div class="jumbo">Twitter Module</div>
        <div>Error getting tweets.</div>
        <!-- <?php $e ?> -->
    </div>
    <?php
    return;
}

?>

<div>
	<table class="padding">
        <tr><th class="jumbo" colspan='2'><?php echo $label; ?></th></tr>
        <?php
    	for ($i = 0; $i < $_GET['count']; $i++) {
    		$status = $statuses[$i];
        	$message = $status->text;
        	$when = $status->created_at;
        	$who = $status->user->name;?>
            <tr><td><?php echo $who; ?></td><td><?php echo $message; ?></td></tr>
        <?php } ?>
    </table>
</div>
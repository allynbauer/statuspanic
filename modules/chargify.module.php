<?php
require_once 'Chargify-PHP-Client/lib/Chargify.php';

$domain = $_GET['domain'];
$api_key = $_GET['api_key'];

$test_mode = true;
$request_format = 'JSON';
$connector = new ChargifyConnector( $test_mode, $domain, $api_key );

$page = 1;
$per_page = 100;

$foo = 0;
$bar = 0;

function is_active( $subscription ){
    return ('active' == $subscription->state);
}

function is_trial( $subscription ){
    return ('trialing' == $subscription->state);
}

try {
    $subscriptions = $connector->getSubscriptions( $page, $per_page );
    $foo = count( array_filter($subscriptions, 'is_active') );
    $bar = count( array_filter($subscriptions, 'is_trial') );
} catch (Exception $e) {
    $foo = $e->getMessage();
}

?>
  <div class='jumbo vertical-center'>
      <span class='chargify'><?php echo $foo; ?> / <?php echo $bar; ?></span>
  </div>
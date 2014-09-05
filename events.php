<?php
$title = "ACM @ Hunter - Events";
$section = 'events';
require_once(dirname(__FILE__).'/scripts/top.php');
?>

<h1>Events</h1>

<p>The Hunter College chapter of the ACM regularly hosts talks by guest speakers about various technology-related topics. Location is primarily determined by room availability and expected attendance rate.</p>

<?php list_events($events) ?>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>

<?php
$title = "ACM @ Hunter - Events";
$section = 'events';
require_once(dirname(__FILE__).'/scripts/top.php');

$event = $events[$_GET['event']];
if($event) {
	$evt_msg = "";
	$evt_li = "\t\t".'<li><a href="%s">%s</a></li>'."\n";

	if(!empty($event['url'])) $evt_msg .= sprintf($evt_li, $event['url'], 'Link');
	if(!empty($event['github'])) $evt_msg .= sprintf($evt_li, $event['github'], 'Source code');
	if(!empty($event['tutorial'])) $evt_msg .= sprintf($evt_li, $event['tutorial'], 'Tutorial');
	if(!empty($event['slides'])) $evt_msg .= sprintf($evt_li, $event['slides'], 'Slides');
	if(!empty($event['nda'])) $evt_msg .= sprintf($evt_li, $event['nda'], 'NDA');
	if(!empty($event['ip'])) $evt_msg .= sprintf($evt_li, $event['ip'], 'IP');
	if(!empty($event['survey'])) $evt_msg .= sprintf($evt_li, $event['survey'], 'Survey');
	if(!empty($evt_msg)) $evt_msg = "\t<ul>\n{$evt_msg}\t</ul>\n";
?>
<div class='event'>
	<h1 class='event-name'><?=$event['title']?></h1>
	<?php if(!empty($event['location'])) {?>
        <h2 class='event-info'>Location: <em><?=$event['location']?></em></h2>
    <?php } ?>
	<h2 class='event-info'>
		<em class='event-date'><?=$event['date']->format('Y/m/d')?></em><?php if (!empty($event['time'])) { ?>,
			<span class="event-time"><?=$event['time']->format('G:i')?>
			<?php if (!empty($event['endtime'])) { ?>to <?= $event['endtime']->format('G:i') ?><?php } ?></span>
		<?php } ?>
		<?php if (!empty($event['speaker'])) {?>- <strong class='event-guest'><?=stripslashes($event['speaker'])?></strong><?php } ?>
	</h2>
<?=$evt_msg?>
	<?=stripslashes(\Michelf\Markdown::defaultTransform($event['description']))?>

    <?php
        if (!empty($event['bio'])) {?>
    <div class="bio" id="bio">
        <h2><strong>About the Speakers</strong></h2>
        <?=stripslashes(\Michelf\Markdown::defaultTransform($event['bio']))?>
    </div>
    <?php } ?>
</div>


<?php
	if (!empty($event['minutes'])) {?>
<div class="minutes" id="minutes">
	<h3>Minutes</h3>
	<?=stripslashes(\Michelf\Markdown::defaultTransform($event['minutes']))?>
</div>
<?php }
}
else if (!empty($_GET['event'])) {
?>
<h1>Invalid Event!</h1>

<p>There was an error loading the given event. Please <a href='events.php'>return to the Events listing</a> to view all previous and upcoming Hunter ACM events.</p>
<?php }
else {
?>
<h1>Events</h1>
<p>There is currently no event chosen. Please <a href='events.php'>return to the Events listing</a> to view all previous and upcoming Hunter ACM events.</p>
<?php }
require_once(dirname(__FILE__).'/scripts/bottom.php')
?>

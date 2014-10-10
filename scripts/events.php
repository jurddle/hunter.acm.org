<?php

require_once(dirname(__FILE__).'/acm.php');
require_once($file_root.'/scripts/spyc/Spyc.php');
require_once($file_root.'/scripts/PHP_markdown/Michelf/Markdown.php');

$current_date = new DateTime("now");

$events_path = $file_root.'/files/events.yaml';
$events = file_exists($events_path) ? Spyc::YAMLLoad($events_path) : Array();

// Transform the date on each event into a DateTime object
foreach($events as &$event){
	$event['date'] = DateTime::createFromFormat('Y-m-d',$event['date']);
	$event['starttime'] = DateTime::createFromFormat('H:i',$event['starttime']);
	$event['endtime'] = DateTime::createFromFormat('H:i',$event['endtime']);
}

// Sort the events in ascending date order
usort($events, function($a, $b){
	return $a['date']->getTimestamp() > $b['date']->getTimestamp();
});

// Tag each event with it's chronilogical index, and transform its date to a DateTime object
foreach($events as $key => &$event){
	$event['index'] = $key;
}

$future_events = array_filter($events, function($event) use ($current_date){
	return $event['date']->getTimestamp() >= $current_date->getTimestamp();
});

$past_events = array_filter($events, function($event) use ($current_date){
	return $event['date']->getTimestamp() < $current_date->getTimestamp();
});

function render_event_list_item($event, $root){
	$txt = "\t\t".'<li class="event-listing"><a class="event-name" href="%s">%s</a><span class="event-info"><em class="event-date">%s from %s to %s</em>%s%s</span></li>'."\n";
	return sprintf(
		$txt,
		"{$root}/event.php?event={$event['index']}",
		$event['title'],
		$event['date']->format('Y/m/d'),
		$event['starttime']->format('G:i'),
		$event['endtime']->format('G:i'),
		!empty($event['location'])?' in <strong class="event-guest">'.$event['location'].'</strong>':'',
		!empty($event['speaker'])?' feat. <strong class="event-guest">'.stripslashes($event['speaker']).'</strong>':''
	);
}

function render_event_list($events){
	global $root;
	$count = 0;
?>
	<ui class="unstyled event-list">
<?php
	foreach ($events as $event){
		echo render_event_list_item($event, $root);
		++$count;
	}
?>
	</ui>
<?php
}

function list_events(){
	global $future_events, $past_events;
	?>
	<h2>Upcoming Events</h2>
	<?php render_event_list($future_events);
	if (!empty($past_events)) {?>
	<h2>Past Events</h2>
	<?php render_event_list(array_reverse($past_events));
	}

}

function event_sidebar(){
	global $future_events, $root;
	if (!empty($future_events)) {
	?><ul class="list-unstyled upcoming-events"><?php
	foreach ($future_events as $event) {
		?><li><a href="<?=$root?>/event.php?event=<?=$event['index']?>"><?=$event['title']?></a><br /><?=$event['date']->format('D, M d, Y').' from '.$event['starttime']->format('G:i').' to '.$event['endtime']->format('G:i') ?></li><?php
	}
	?></ul><?php
	}
	else { ?>
		<p>Keep watching this space for upcoming ACM&nbsp;events&nbsp;@&nbsp;Hunter!</p>
	<?php }
}

?>

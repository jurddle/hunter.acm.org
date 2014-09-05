<?php
$section = 'home';
require_once(dirname(__FILE__).'/scripts/top.php');
?>

<section class="jumbotron" id='hero'>
	<h1>ACM @ Hunter</h1>
	<h2>City University of New&nbsp;York<br/>Hunter&nbsp;College</h2>
	<h2>Student Chapter of the <a href='http://www.acm.org/'>Association for Computing Machinery</a></h2>
</section>

<section id='index-intro'>
	<h2>Welcome New and Returning Students!</h2>
	<p>Here's some info about the ACM at Hunter College:</p>
	<ul>
		<li>We meet Wednesdays at 1pm in the 1000J computer lab in the North building.</li>
		<li>We talk about technology!</li>
		<li>We also have guest speakers who talk about technologies they are involved in or helped develop.</li>
		<li>While club members do not have to formally join the ACM, it is highly recommended that interested parties join the parent organization.<br/>
			Formal ACM membership is only $19 a year for students, and comes with a load of great benefits.</li>
	</ul>
</section>

<div class="row">
	<section class="col-md-4">
		<h2>Upcoming Events</h2>
		<?php event_sidebar(); ?>
	</section>
	<section class="col-md-4">
		<h2>IRC</h2>
		Join us at <a href="irc://freenode/#hunter-acm">#hunter-acm on freenode</a>
		<br /><a class="btn btn-success" href="http://webchat.freenode.net/?channels=%23hunter-acm">Chat Now</a>
	</section>
	<section class="col-md-4">
		<h2>Get Notified!</h2>
		<ul>
			<?php if ($show_forums_link) { ?><li><a href="http://hunter.acm.org/phpbb">Hunter ACM Forums</a></li><?php } ?>
			<li><a href="https://www.facebook.com/groups/huntercollege.acm.chapter/">Hunter ACM on Facebook</a></li>
		</ul>
	</section>
</div>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>

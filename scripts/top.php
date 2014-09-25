<?php require_once(dirname(__FILE__).'/acm.php') ?>
<?php require_once(dirname(__FILE__).'/events.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="The Hunter College student chapter of the ACM talks tech, makes tech, and invites techies to give advice to the techies of tomorrow." />
<meta name="author" content="Alex Rosario" />
<link rel="icon" type="image/ico" href="<?= $root ?>/files/images/favicon.ico" />
<link rel="shortcut icon" type="image/ico" href="<?= $root ?>/files/images/favicon.ico" />

<title><?=$title?></title>

<!-- Bootstrap core CSS -->
<link type='text/css' href="<?= $root ?>/files/bootstrap/css/bootstrap.css" rel="stylesheet"/>

<link type='text/css' href="<?= $root ?>/files/css/acm.css" rel="stylesheet"/>

<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js'></script>

<script type='text/javascript' src="<?= $root ?>/files/js/jquery.js"></script>
<script type='text/javascript' src="<?= $root ?>/files/bootstrap/js/bootstrap.js"></script>

<?php head_content()?>

<script type="text/javascript">/* <![CDATA[ */
if(Modernizr.mq)Modernizr.load({
	test:Modernizr.mq('(only all)'),
	nope:["http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"]
	//nope:["/res/js/respond.js"]
});
/* ]]> */</script></head>
<body id='<?= $section ?>'>
<header class="navbar navbar-fixed-top navbar-inverse" id='hdr' role="navigation"><div class="container">
	<section class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?=$root?>/index.php"><img src='<?= $root ?>/res/img/acm-chapter.svg' alt='[ACM]' class='overlay' /><?=$site_title?></a>
	</section>
	<nav class="collapse navbar-collapse" id='nav'><ul class="nav navbar-nav">
		<li<?php active('home')?>><a href="<?=$root?>/index.php">News</a></li>
		<li<?php active('about')?>><a href="<?=$root?>/about.php">Profiles</a></li>
		<li<?php active('about')?>><a href="<?=$root?>/contact.php">Contact Us</a></li>
		<li<?php active('projects')?>><a href="<?=$root?>/projects.php">Projects</a></li>
		<li<?php active('events')?>><a href="<?=$root?>/events.php">Events</a></li>
<?php /* ?>
		<li<?php active('contact')?>><a href="<?=$root?>/contact.php">Contact Us</a></li>
		<li<?php active('tutors')?>><a href="<?=$root?>/tutors.php">Tutors</a></li>
		<li<?php active('misc')?>><a href="<?=$root?>/misc.php">Misc.</a></li>
<?php */ ?>
	</ul></nav><!-- /.nav-collapse -->
</div><!-- /.container --></header><!-- /.navbar -->
<article id='main'><div class="container">

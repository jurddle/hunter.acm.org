<?php
$title = "ACM @ Hunter - About Us";
$section = 'about';
require_once(dirname(__FILE__).'/scripts/top.php');

$officers = array(
    "2016"=>array(
		array("title"=>"Advisor","name"=>"Stewart Weiss", "link"=>"http://www.compsci.hunter.cuny.edu/~sweiss/"),
		array("title"=>"Chair","name"=>"Joy Lam"),
		array("title"=>"Vice Chair","name"=>"Christopher Thomas"),
		array("title"=>"Treasurer","name"=>" Carol Chau"),
		array("title"=>"Secretary","name"=>"Andrew Glyadchenko"),
		array("title"=>"Webmaster","name"=>"Alex Rosario & Robert O'Connor"),
	),
    "2015"=>array(
		array("title"=>"Advisor","name"=>"Subash Shankar", "link"=>"http://www.cs.hunter.cuny.edu/~sshankar/"),
		array("title"=>"Chair","name"=>"Alex Rosario <em>(Resigned Fall 2015)</em>; Victor Cabrera"),
		array("title"=>"Vice Chair","name"=>"Victor Cabrera <em>(Filled <strong>Chair</strong> vacancy in Fall 2015)</em>; Manuel Grullon"),
		array("title"=>"Treasurer","name"=>"Joy Lam"),
		array("title"=>"Secretary","name"=>"Victoria Zhong"),
		array("title"=>"Webmaster","name"=>"Alex Rosario & Robert O'Connor"),
	),
	"2014"=>array(
		array("title"=>"Advisor","name"=>"Stewart Weiss", "link"=>"http://www.compsci.hunter.cuny.edu/~sweiss"),
		array("title"=>"Chair","name"=>"Alex Rosario"),
		array("title"=>"Vice Chair","name"=>"Daniel Fialkovsky <em>(Graduated Fall 2014)</em>; Victoria Zhong"),
		array("title"=>"Treasurer","name"=>"Manuel Grullon"),
		array("title"=>"Secretary","name"=>"Victor Cabrera <em>(Resigned Fall 2014)</em>; Andrew Glyadchenko"),
		array("title"=>"Webmaster","name"=>"Alex Rosario & Robert O'Connor"),
	),
	"2013"=>array(
		array("title"=>"Advisor","name"=>"Stewart Weiss", "link"=>"http://www.compsci.hunter.cuny.edu/~sweiss"),
		array("title"=>"Chair","name"=>"Robert O'Connor"),
		array("title"=>"Vice Chair","name"=>"Tereza Shterenberg"),
		array("title"=>"Treasurer","name"=>"Daniel Fialkovsky"),
		array("title"=>"Secretary","name"=>"Manuel Grullon"),
		array("title"=>"Webmaster","name"=>"Alex Rosario"),
	)
);

$members = array(
	"2015"=>array(),
	"2014"=>array(),
	"2013"=>array()
);

$cur_year = 2016;

function list_officers($o, $as_table=false) {
	$s = "";
	$fmt_tbl = "\t<tr><th class='text-right'>%s</th><td>%s</td></tr>\n";
	$fmt_dt = "\t<dt>%s</dt><dd>%s</dd>\n";
	$fmt_a = "<a href='%s'>%s</a>";
	for ($i=0; $i<count($o);++$i) {
		$s .= sprintf(
			$as_table?$fmt_tbl:$fmt_dt,
			$o[$i]['title'],
			(!empty($o[$i]['link'])?sprintf($fmt_a,$o[$i]['link'],$o[$i]['name']):$o[$i]['name'])
		);
	}
	if (!empty($s)) $s = $as_table?
		"<table class='table table-striped table-condensed'>{$s}</table>\n":
		"<dl class='dl-horizontal'>{$s}</dl>\n";
	return $s;
}
?>

<h1>About Us</h1>

<section class="row" id="abt-acm"><div class="col-md-12">
	<h2>The ACM</h2>
	The Association for Computing Machinery is the largest international organization devoted to science and education related to computing.
	It is a non-profit organization founded in 1947 that provides its members access to professional publications, conferences, and career resources.
	The ACM also has student programming competitions.
</div></section>

<section class="row" id="abt-acm-hunter">
	<div class="col-md-4" id="hunter-officers">
		<h2>Officers</h2>
		<?=list_officers($officers[$cur_year],true)?>
	</div>
	<div class="col-md-8" id="abt-acm-chapter">
		<h2>Our Local Chapter</h2>
		<p>We are the <a href="http://hunter.cuny.edu/">CUNY Hunter College</a> student chapter of the <a href="http://www.acm.org/">Association for Computing Machinery</a>.</p>
		<p>
			We talk tech, make tech, provide informal CS tutoring during the week in addition to the existing CS tutors, and we regularly bring guest speakers to give professional advice.
			We're always open to suggestions for other things we could do as a group.
		</p>
		<p>Have an idea? Find us in North building 1000J every Wednesday!</p>
	</div>
</section>

<hr />

<section id="officers-past">
    <p>The following is a list of past officers of the ACM @ Hunter.</p>
    <!-- 12 column rows; three years per row. -->
    <div class="row">
        <div class="col-md-4" id="officers-past-2013">
            <h3>ACM officers for 2013-2014</h3>
            <?=list_officers($officers["2013"]);?>
        </div>
        <div class="col-md-4" id="officers-past-2014">
            <h3>ACM officers for 2014-2015</h3>
            <?=list_officers($officers["2014"]);?>
        </div>
        <div class="col-md-4" id="officers-past-2015">
            <h3>ACM officers for 2015-2016</h3>
            <?=list_officers($officers["2015"]);?>
        </div>
    </div>
    </div>
</section>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>

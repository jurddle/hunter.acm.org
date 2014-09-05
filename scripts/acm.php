<?php

$root = "";
$is_cuny = false;
$show_forums_link = false;

// If running on hunter.acm.edu root is root
if( $_SERVER["HTTP_HOST"] == "hunter.acm.org") {
	$root = "";
	$production = true;
}
// If accessing at plx set that as root.
elseif(preg_match('/^\/acm\//',$_SERVER["REQUEST_URI"])){
	$root = '/acm';
	$production = true;
}
// Otherwise assume the user is running with the root as whatever part of the URI matches acm.cat.pdx.edu
else{
	$path_parts = array('');
	preg_match( "/^(.*)hunter\.acm\.org/", $_SERVER["REQUEST_URI"], $path_parts);
	//$root = (!empty($path_parts)?$path_parts[0]:'').'';
	if (count($path_parts)>0) $root = $path_parts[0].'';
	else $root = "";
	$production = false;
}

$file_root=dirname(dirname(__FILE__));

$site_title = "ACM @ Hunter";

if(!isset($title)){
	$title = $site_title;
}

if(!function_exists('head_content')){
	function head_content(){}
}

if(!function_exists('main_content')){
	function main_content(){}
}

function active($target_section){
	global $section;
	if($section == $target_section) { ?> class="active"<?php }
}

?>
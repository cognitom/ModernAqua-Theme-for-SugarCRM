<?php
$manifest = array (
	'acceptable_sugar_versions' => array(
		'exact_matches' => array(),
		'regex_matches' => array(
			0 => '6\.0\.\d(beta\d|RC\d|[a-z])?',
			1 => '6\.1\.\d(beta\d|RC\d|[a-z])?',
			2 => '6\.2\.\d(beta\d|RC\d|[a-z])?',
			3 => '6\.3\.\d(beta\d|RC\d|[a-z])?',
			4 => '6\.4\.\d(beta\d|RC\d|[a-z])?',
			5 => '6\.5\.\d(beta\d|RC\d|[a-z])?',

		),
	),
	'acceptable_sugar_flavors' => array(
		0 => 'CE',
		1 => 'PRO',
	),
	'name' => 'Modern Aqua',
	'description' => 'MacOSX-like theme',
	'author' => 'CogniTom Academic Design',
	'published_date' => '2010-10-19 0:12:00',
	'version' => '0.5.7',
	'type' => 'theme',
	'is_uninstallable' => TRUE,
	'icon' => 'images/Themes.gif',
	'copy_files' => array(
		'from_dir' => 'ModernAqua',
		'to_dir' => 'themes/ModernAqua',
		'force_copy' => array(),
	),
);
?>

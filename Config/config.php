<?php
$config['InfinitasPiwik'] = array(
	'tracker_cache' => Configure::read('debug') ? '-1 day' : '+1 week',
	'piwik' => null,
	'site_id' => null,
	'track_admin' => false,
	'report' => array(
		'site_id' => null,
		'auth_token' => 'anonymous',
	)
);
<?php

global $project;
$project = 'mysite';

global $database;
$database = 'SS_mysite';

require_once('conf/ConfigureFromEnv.php');

if(SS_ENVIRONMENT_TYPE == 'dev'){ //Only use SQLite if in development mode

	global $databaseConfig;
	$databaseConfig = array(
		"type" => 'SQLiteDatabase',
		"database" => $database,
		"path" => 'assets/.db'
	);

}


// Set the site locale
i18n::set_locale('en_US');

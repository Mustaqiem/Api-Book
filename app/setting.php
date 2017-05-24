<?php

return [
	//setting display error
	'displayErrorDetails'	=> true,

	'addContentLengthHeader' => false,

	//setting timezone
	'timezone'	=> 'Asia/Jakarta',

	//setting language
	'lang'	=> [
		'default'	=> 'en',
	],

	//setting db (with doctrine)
	'db'	=> [
		'url'	=> 'mysql://root:mustaqim@db/db_book_api',
	],

	'determineRouteBeforeAppMiddleware' => true,

	//setting language
	'lang'	=> [
		'default'	=> 'en',
	],
	];
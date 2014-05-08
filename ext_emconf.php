<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "https_macmade".
 *
 * Auto generated 16-08-2013 14:00
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'HTTPS Enforcer / macmade.net',
	'description' => 'A RealURL compatible HTTPS enforcer, for pages or site sections. Works with load balancing.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.3.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Manuel Eiden',
	'author_email' => 'manuel.eiden@yahoo.de',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-6.2.99',
			'php' => '5.2.0-0.0.0',
		),
		'conflicts' => '',
		'suggests' => 
		array (
		),
	),
);

?>

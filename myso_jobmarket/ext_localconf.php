<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MysoJobMarket.' . $_EXTKEY,
	'Mysojobmarket',
	array(
		'Jobmarket' => 'list, show, latest',
		
	),
	// non-cacheable actions
	array(
		'Jobmarket' => '',
		
	)
);

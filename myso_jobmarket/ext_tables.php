<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Mysojobmarket',
	'MySolution Jobmarket'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'My Solution Job Market');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mysojobmarket_domain_model_jobmarket', 'EXT:myso_jobmarket/Resources/Private/Language/locallang_csh_tx_mysojobmarket_domain_model_jobmarket.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mysojobmarket_domain_model_jobmarket');
$GLOBALS['TCA']['tx_mysojobmarket_domain_model_jobmarket'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'id,title,subtitle,company,task,profile,description,image,relationships,locations,industries,contracts,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Jobmarket.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mysojobmarket_domain_model_jobmarket.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mysojobmarket_domain_model_relationship', 'EXT:myso_jobmarket/Resources/Private/Language/locallang_csh_tx_mysojobmarket_domain_model_relationship.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mysojobmarket_domain_model_relationship');
$GLOBALS['TCA']['tx_mysojobmarket_domain_model_relationship'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_relationship',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Relationship.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mysojobmarket_domain_model_relationship.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mysojobmarket_domain_model_location', 'EXT:myso_jobmarket/Resources/Private/Language/locallang_csh_tx_mysojobmarket_domain_model_location.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mysojobmarket_domain_model_location');
$GLOBALS['TCA']['tx_mysojobmarket_domain_model_location'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_location',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,short_title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Location.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mysojobmarket_domain_model_location.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mysojobmarket_domain_model_industrie', 'EXT:myso_jobmarket/Resources/Private/Language/locallang_csh_tx_mysojobmarket_domain_model_industrie.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mysojobmarket_domain_model_industrie');
$GLOBALS['TCA']['tx_mysojobmarket_domain_model_industrie'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_industrie',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Industrie.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mysojobmarket_domain_model_industrie.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mysojobmarket_domain_model_contract', 'EXT:myso_jobmarket/Resources/Private/Language/locallang_csh_tx_mysojobmarket_domain_model_contract.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mysojobmarket_domain_model_contract');
$GLOBALS['TCA']['tx_mysojobmarket_domain_model_contract'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_contract',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Contract.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mysojobmarket_domain_model_contract.gif'
	),
);

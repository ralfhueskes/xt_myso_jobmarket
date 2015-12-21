<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_mysojobmarket_domain_model_jobmarket'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_mysojobmarket_domain_model_jobmarket']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, title, subtitle, company, task, profile, description, image, relationships, locations, industries, contracts',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, id, title, subtitle, company;;;richtext:rte_transform[mode=ts_links], task;;;richtext:rte_transform[mode=ts_links], profile;;;richtext:rte_transform[mode=ts_links], description;;;richtext:rte_transform[mode=ts_links], image, relationships, locations, industries, contracts, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_mysojobmarket_domain_model_jobmarket',
				'foreign_table_where' => 'AND tx_mysojobmarket_domain_model_jobmarket.pid=###CURRENT_PID### AND tx_mysojobmarket_domain_model_jobmarket.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'id' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'subtitle' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.subtitle',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.company',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'task' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.task',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'profile' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.profile',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'relationships' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.relationships',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mysojobmarket_domain_model_relationship',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'locations' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.locations',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mysojobmarket_domain_model_location',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'industries' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.industries',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mysojobmarket_domain_model_industrie',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'contracts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:myso_jobmarket/Resources/Private/Language/locallang_db.xlf:tx_mysojobmarket_domain_model_jobmarket.contracts',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mysojobmarket_domain_model_contract',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);

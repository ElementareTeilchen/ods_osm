<?php
if (!defined('TYPO3_MODE')) die('Access denied.');

/* --------------------------------------------------
	Extend existing tables
-------------------------------------------------- */

$tempColumns = array(
    'tx_odsosm_marker' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xml:tt_address_group.tx_odsosm_marker',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_odsosm_marker',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', 'tx_odsosm_marker;;;;1-1-1');

?>

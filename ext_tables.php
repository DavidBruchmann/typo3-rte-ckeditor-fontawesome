<?php
defined('TYPO3_MODE') or die();
// Register Plugin and name SPaces
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WebKon.' . $_EXTKEY,
    'CKEditor',
    'CKEditor'
);
// Add Plugin Configs
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'CKEditor');
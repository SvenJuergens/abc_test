<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'abc test',
        'abc_test_pi1'
    ],
    'list_type',
    'abc_test'
);

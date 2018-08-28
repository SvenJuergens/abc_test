<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'abc_test',
    'pi1/class.tx_abctest_pi1.php',
    '_pi1',
    'list_type',
    1
);

<?php
defined('TYPO3_MODE') or die();

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
//    'abc_test',
//    'pi1/class.tx_abctest_pi1.php',
//    '_pi1',
//    'list_type',
//    1
//);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '
plugin.tx_abctest_pi1 = USER
plugin.tx_abctest_pi1 {
    userFunc = Testing\AbcTest\Controller\NewAbc->main
}

# Setting abc_test plugin TypoScript
tt_content.list.20.abc_test_pi1 = < plugin.tx_abctest_pi1
');

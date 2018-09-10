<?php
namespace Testing\AbcTest\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class NewAbc extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin
{
    public $prefixId      = 'tx_abctest_pi1';        // Same as class name
    public $extKey        = 'abc_test';    // The extension key.
    public $pi_checkCHash = false;


    /**
     * The main method of the PlugIn
     *
     * @param    string $content : The PlugIn content
     * @param    array $conf : The PlugIn configuration
     * @return    string The content that is displayed on the website
     */
    public function main($content, $conf)
    {
        debug($this->cObj->data);
        return $this->pi_wrapInBaseClass($content);
    }

}

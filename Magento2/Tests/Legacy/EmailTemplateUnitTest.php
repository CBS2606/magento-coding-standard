<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento2\Tests\Legacy;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class EmailTemplateUnitTest extends AbstractSniffUnitTest
{
    /**
     * @inheritdoc
     */
    public function getErrorList()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getWarningList($testFile = '')
    {
        if ($testFile === 'EmailTemplateUnitTest.1.html') {
            return [];
        }
        if ($testFile === 'EmailTemplateUnitTest.2.html') {
            return [
                1 => 1,
                2 => 1,
                3 => 2,
            ];
        }

        return [];
    }
}

<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento2\Tests\Legacy;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class ObsoleteConnectionUnitTest extends AbstractSniffUnitTest
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
    public function getWarningList()
    {
        return [
            3 => 1,
            6 => 1,
            10 => 1,
            14 => 1,
            18 => 1,
            21 => 1,
            25 => 1,
            32 => 1
        ];
    }
}

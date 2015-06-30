<?php

namespace tests\library;

use library\BaseDataModel;
use library\DataModelInterface;

class BaseDataModelTest extends \PHPUnit_Framework_TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(class_exists('library\BaseDataModel'));
    }
    
    public function testImplementsDataModelInterface()
    {
        $this->assertTrue(
            in_array(
                'library\DataModelInterface',
                class_implements(new BaseDataModel())
            )
        );
    }
}

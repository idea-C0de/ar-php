<?php

namespace ArUtil\Tests;

use ArUtil\ArUtil;

class ArUtilTest extends AbstractTestCase
{
    
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }
    
    protected function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }
    
    /** @test */
    public function it_exists()
    {
        $this->assertTrue(
            class_exists(ArUtil::class),
            'Class ArUtil does not exist.');
    }
}

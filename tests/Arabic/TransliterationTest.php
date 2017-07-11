<?php

namespace Tests\Arabic;

use I18N_Arabic_Transliteration;
use Tests\AbstractTestCase;

class Transliteration extends AbstractTestCase
{
    
    /**
     * @var I18N_Arabic_Transliteration
     */
    protected $transliterator;
    
    protected function setUp()
    {
        parent::setUp();
        $this->transliterator = new \I18N_Arabic('Transliteration');
    }
    
    /** @test */
    public function it_loads_normalise_class()
    {
        $this->assertInstanceOf(I18N_Arabic_Transliteration::class, $this->transliterator->myObject);
    }
    
}

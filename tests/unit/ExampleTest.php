<?php

include('../../web/wp/wp-blog-header.php');

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->assertFalse( isset($wp_did_header) );
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {

    }
}
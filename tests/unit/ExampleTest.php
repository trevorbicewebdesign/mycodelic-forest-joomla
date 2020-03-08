<?php 
class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \CodeGuy
     */
    protected $tester;
    
    protected function _before()
    {
        require_once('administrator/components/com_aedman/helpers/aedman.php');
    }

    protected function _after()
    {
    }

    // tests
    /*
    public function testChangedFunctionWorks()
    {
        $this->assertContains('baz', 'foobar');
    }
    */
}
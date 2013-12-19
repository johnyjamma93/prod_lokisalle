<?php
namespace Payum\Tests\Request;

use Payum\Request\UserInputRequiredInteractiveRequest;

class UserInputRequiredInteractiveRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldImplementInteractiveRequestInterface()
    {
        $rc = new \ReflectionClass('Payum\Request\UserInputRequiredInteractiveRequest');

        $this->assertTrue($rc->implementsInterface('Payum\Request\InteractiveRequestInterface'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithModelAndRequiredFieldsAsArgument()
    {
        new UserInputRequiredInteractiveRequest(array(
            'a_field',
        ));
    }

    /**
     * @test
     */
    public function shouldAllowGetRequiredFieldsSetInConstructor()
    {
        $expectedRequiredFields = array(
            'a_field',
        );

        $request = new UserInputRequiredInteractiveRequest($expectedRequiredFields);

        $this->assertEquals($expectedRequiredFields, $request->getRequiredFields());
    }
}
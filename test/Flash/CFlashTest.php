<?php

namespace Meshood\Flash;

/**
* Test class for CFlash
*
*/
class CFlashTest extends \PHPUnit_Framework_TestCase
{

    /**
    * Test
    *
    * @return void
    *
    */
    public function testCreateElement()
    {
        $el = new \Meshood\Flash\CFlash();

        $res = $el->objectCreated;
        $exp = true;
        $this->assertEquals($res, $exp, "Created element name missmach.");
    }




    /**
    * Test
    *
    * @return void
    *
    */
    public function testCreateMessage()
    {
        $el = new \Meshood\Flash\CFlash();

        $el->message('info', 'EmptyTest');
        $res = $el->messageCreated;
        $exp = 'info::EmptyTest';
        $this->assertEquals($res, $exp, "Created message missmach.");

        $el->message('success', 'SuccessTest');
        $res = $el->messageCreated;
        $exp = 'success::SuccessTest';
        $this->assertEquals($res, $exp, "Created message missmach.");

        $el->message('warning', 'WarningTest');
        $res = $el->messageCreated;
        $exp = 'warning::WarningTest';
        $this->assertEquals($res, $exp, "Created message missmach.");

        $el->message('error', 'ErrorTest');
        $res = $el->messageCreated;
        $exp = 'error::ErrorTest';
        $this->assertEquals($res, $exp, "Created message missmach.");
    }




    /**
    * Test
    *
    * @return void
    *
    */
    public function testGetMessage()
    {
        $el = new \Meshood\Flash\CFlash();
        $el->message('info', 'Test');

        $res = $el->getMessage();
        $exp = "<div class='flash-info'>Test</div>\n";

        $this->assertEquals($res, $exp, "Message value missmach.");
    }
}

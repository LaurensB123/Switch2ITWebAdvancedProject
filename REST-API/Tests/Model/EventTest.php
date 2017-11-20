<?php

//include_once(dirname(__FILE__) . '\Project_api\Model\Event.php');
//namespace ..\Project_api\Model;

use Model\Contact;


class EventTest extends PHPUnit_Framework_TestCase{

    public $contact;

    //Opzetten van het testobject, wordt uitgevoerd voor de test
    protected function setUp(){
        $this->contact = new Contact(20, "koen@pxl.be", "Koen Hendrikx");
    }

    //Afbreken van de testobjecten, dit wordt uitgevoerd na de test
    protected function teardown(){
        unset($this->contact);
    }

    //Testen van de getters
    //public function test_getBeschrijving_equals_testBeschrijving(){
    public function test_getName_equals_testGetName() {
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "Koen Hendrikx";
        $actual = $this->contact->getName();
        $this->assertEquals($expected, $actual);
    }

    //public function test_getEindDatum_equals_12032018(){
    public function test_getEmail_equals_test_getEmail(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "koen@pxl.be";
        $actual = $this->contact->getEmail();
        $this->assertEquals($expected, $actual);
    }

    //public function test_getStartDatum_equals_12022018(){
    public function test_getID_equals_getID(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 20;
        $actual = $this->contact->getID();
        $this->assertEquals($expected, $actual);
    }

    /*public function test_getPersoonId(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 1;
        $actual = $this->contact->getPersoonId();
        $this->assertEquals($expected, $actual);
    }

    public function test_getEventId(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 12;
        $actual = $this->contact->getEventId();
        $this->assertEquals($expected, $actual);
    }*/
}
<?php

include_once(dirname(__FILE__) . '/Project_api/Model/Persoon.php');
//namespace ..\Project_api\Model;
//require_once 'PHPUnit/Autoload.php';

use Model\Contact;


class PersoonTest extends \PHPUnit\Framework\TestCase{

    protected $contact;

    //Opzetten van het testobject, wordt uitgevoerd voor de tests
    protected function setUp(){
        $this->contact = new Contact(12,"Abe@simpsons.be", "Abraham Simpson");
    }

    //Afbreken van het testobject, wordt uitgevoerd na de tests
    protected function teardown(){
        unset($this->contact);
    }

    //Testen van de getters
    //public function test_getPersoonIDTest_equals_12(){
    public function test_getIDTest_equals_12(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 12;
        $actual = $this->contact->getID();
        $this->assertEquals($expected, $actual);
    }

    //public function test_getPersoonNaamTest_equals_test2(){
    public function test_getNameTest_equals_test2(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "test2";
        $actual = $this->contact->getName();
        $this->assertEquals($expected, $actual);
    }
}
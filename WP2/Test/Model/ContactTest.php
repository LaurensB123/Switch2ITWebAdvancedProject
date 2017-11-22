<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 22:49
 */

include_once(dirname(__FILE__) . '/WP2/Model/Contact.php');

use Model\Contact;

class ContactTest extends \PHPUnit\Framework\TestCase
{
    protected $contact;

    //Opzetten van het testobject, wordt uitgevoerd voor de test
    protected function setUp()
    {
        $this->contact = new Contact(15,"bart@simpsons.com", "Bart Simpson");
    }

    //Afbreken van het testobject, wordt uitgevoerd na de tests
    protected function tearDown()
    {
        unset($this->contact);
    }

    //Testen van de getters
    public  function test_getIDTest_equals_15() {
        //Test of de juiste waardes verkregen worden met assertEquals
        $expected = 12;
        $actual = $this->contact->getID();
        $this->assertEquals($expected, $actual);
    }

    public  function test_getEmailTest_equals_bartadsimpsonsdotcom() {
        //Test of de juiste waardes verkregen worden met assertEquals
        $expected = "bart@simpsons.com";
        $actual = $this->contact->getEmail();
        $this->assertEquals($expected, $actual);
    }

    public  function test_getNameTest_equals_BartSimpson() {
        //Test of de juiste waardes verkregen worden met assertEquals
        $expected = "Bart Simpson";
        $actual = $this->contact->getName();
        $this->assertEquals($expected, $actual);
    }
}
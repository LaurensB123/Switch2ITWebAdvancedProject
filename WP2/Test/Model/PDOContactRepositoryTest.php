<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 23:06
 */

use \Model\Contact;
use \Model\PDOContactRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class PDOContactRepositoryTest extends PHPUnit\Framework\TestCase
{
    protected function setUp()
    {
        $this->mockPDO = $this->getMockBuilder('PDO')->disableOriginalConstructor()->getMock();
        $this->mockPDOStatement = $this->getMockBuilder('PDOStatement')->disableOriginalConstructor()->getMock();
        $this->http = new GuzzleHttp\Client(['base_uri' => 'https://httpbin.org']);
    }

    public function testReadContacts() {
        $contact = new Contact(20, "homer@simpsons.be", "Homer Simpson");
        $contact2 = new Contact(21,"lisa@simpsons.be", "Lisa Simpson");

        $allContacts = Array($contact, $contact2);

        $this->mockPDOStatement->expects($this->atLeastOnce())->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())->method('fetchAll')->will($this->returnValue(
            [
                [
                    'ID' => $contact->getID(),
                    'email' => $contact->getEmail(),
                    'name' => $contact->getName()
                ],
                [
                    'ID' => $contact2->getID(),
                    'email' => $contact2->getEmail(),
                    'name' => $contact2->getName()
                ]
            ]
        ));
        $this->mockPDO->expects($this->atLeastOnce())->method('prepare')-> will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOContactRepository($this->mockPDO);
        $actualContacts = $pdoRepository->readContacts();

        $this->assertEquals($allContacts, $actualContacts);
    }

    public function testPost() {
        //create our http client (Guzzle)
        $id = 10;
        $data = array(
            'ID' => $id,
            'email' => 'marge@simpsons.com',
            'name' => 'Marge Simpson'
        );
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://192.168.33.22/~user/contacten/'. $id, $data);

        $this->assertEquals(200, $res->getStatusCode());
    }

    public function testDelete() {
        $client = new \GuzzleHttp\Client();
        $id = 1;
        $data = array (
            'ID' => $id,
            'email' => 'laurens@student.pxl.be',
            'name' => 'laurens'
        );
        $res = $client->request('DELETE', 'http://192.168.33.22/~user/contacten/' . $id, $data);
        $this->assertEquals(200, $res->getStatusCode());
    }

    protected function tearDown()
    {
        unset($this->mockPDO);
        unset($this->mockPDOStatement);
        $this->http = null;
    }
}
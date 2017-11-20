<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 16/11/2017
 * Time: 12:41
 */

namespace Controller;

use Model\PersonRepository;
use View\View;

class PersonController
{
    private $ContactRepository;
    private $view;

    public function __construct(PersonRepository $ContactRepository, View $view)
    {
        $this->ContactRepository = $ContactRepository;
        $this->view = $view;
    }

     public function readContacts()
    {
        $contact = $this->ContactRepository->readContacts();
        $this->view->show(['Contact' => $contact]);
    }

    public function add($id)
    {
        $contact = $this->ContactRepository->addContact($id);
        //$this->view->show($ev);
    }

    public function remove($id)
    {

        $contact = $this->ContactRepository->removeContact($id);
    }
}
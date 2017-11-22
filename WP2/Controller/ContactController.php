<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 17:59
 */

use Model\ContactRepository;
use View\View;

class ContactController
{
    private $contactRepository;
    private $view;

    public function __construct(ContactRepository $contactRepository, View $view)
    {
        $this->contactRepository = $contactRepository;
        $this->view = $view;
    }

    public function readContacts()
    {
        $contact = $this->contactRepository->readContacts();
        $this->view->show(['Contact' => $contact]);
    }

    public function add($id)
    {
        $contact = $this->contactRepository->addContact($id);
    }

    public function remove($id)
    {
        $contact = $this->contactRepository->removeContact($id);
    }
}
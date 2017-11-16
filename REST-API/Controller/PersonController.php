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
    private $PersonRepository;
    private $view;

    public function __construct(PersonRepository $PersonRepository, View $view)
    {
        $this->PersonRepository = $PersonRepository;
        $this->view = $view;
    }

     public function findPersonByID($id = null)
    {
        $event = $this->PersonRepository->findPersonByID($id);
        $this->view->show(['Persoon' => $event]);
    }


    public function add($id)
    {
        $ev = $this->PersonRepository->add($id);
        //$this->view->show($ev);
    }

    public function remove($id)
    {

        $ev = $this->PersonRepository->remove($id);
    }

    public function update($id)
    {

        $ev = $this->PersonRepository->update($id);
        //$this->view->show($ev);
    }

}
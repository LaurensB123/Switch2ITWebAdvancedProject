<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 16:50
 */

namespace Model;


class PDOContactRepository
{
    private $contactDAO = null;

    public function __construct(PDOContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }

    public function
}
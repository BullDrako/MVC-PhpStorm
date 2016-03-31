<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 13/10/2015
 * Time: 17:36
 */

namespace controllers;


class IndexController
{
    public function indexAction()
    {
        require 'application/views/index.phtml';
    }
}
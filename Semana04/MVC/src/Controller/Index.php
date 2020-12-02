<?php

namespace Controller;

use View\ViewModel;

class Index
{
    public function index()
    {
       return '<h1>Ola Mundão</h1>';  
       # return ['id' => 10, 'email' => 'teste@gmail.com'];
    }
}
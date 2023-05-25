<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Notes extends ResourceController{

    protected $modelName = 'App\Models\Notes';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}

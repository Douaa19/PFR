<?php

class AdminController extends Controller
{





    public function __construct()
    {
        //instanciation du model
        $this->adminModel = $this->model('admin');
    }



    public function index()
    {
        $this->view('admin/index');
    }
}

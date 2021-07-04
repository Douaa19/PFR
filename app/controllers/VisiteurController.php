<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    public function index() {
        $this->view('visiteur/index');
    }
}
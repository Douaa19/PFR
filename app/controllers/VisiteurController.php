<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    public function index() {
        $result = $this->visiteurModel->getPhotos();

        $this->view('visiteur/index', $result);
    }
    
    

    
}
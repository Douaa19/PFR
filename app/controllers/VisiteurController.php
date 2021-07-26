<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    public function index() {
        $this->view('visiteur/index');
    }

    public function photos() {
        $result = $this->postModel->getPhotos();
        
        $this->view('admin/photos', $result);
    }
}
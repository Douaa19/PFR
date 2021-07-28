<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    // public function index() {
    //     $result = $this->visiteurModel->getPhotos();

    //     $this->view('visiteur/index', $result);
    // }

    // public function pagePhotos() {
    //     $result = $this->visiteurModel->getPhotos();

    //     $this->view('visiteur/photos-page', $result);
    // }

    // public function pageVideos() {
        

    //     $this->view('visiteur/videos-page');
    // }

    
}
<?php

class VisiteurController extends Controller {
    public function __construct() {
        $this->visiteurModel = $this->model('Visiteur');
    }

    // GO TO METHODS

    // THE FIRST PAGE
    // this method take seven photos to the index page
    public function index() {
        $result = $this->getPhotos();

        $this->view('visiteur/index', $result);
    }

    // this method take too videos to the index page
    public function indexVideos() {
        die();
        $result = $this->getVideos();

        $this->view('visiteur/index', $result);
    }

    // this method take all folders to f-photos
    public function foldersPhotos() {
        $result = $this->getFolders();

        $this->view('visiteur/f-photos', $result);
    }

    // this method take all folders to f-videos
    public function foldersVideos() {
        $result = $this->getFolders();

        $this->view('visiteur/f-videos', $result);
    }


    // GET METHODS

    // GET SEVEN PHOTOS
    public function getPhotos() {
        $result = $this->visiteurModel->getPhotos();

        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET TOO VIDEOS
    public function getVideos() {
        $result = $this->visiteurModel->getVideos();

        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET FOLDERS
    public function getFolders() {
        $result = $this->visiteurModel->getFolders();

        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET ALL PHOTOS
    public function photos() {
        if (isset($_POST['submit'])) {
            $data = [
                'id' => $_POST['id'],
                'error' => '' 
            ];
            $result = $this->visiteurModel->allPhotos($data);

            if ($result) {
                $this->view('visiteur/photos', $result);
            }else {
                $data['error'] = 'Le dossier est vide';
                $this->view('visiteur/photos', $data);
            }
        }
    }

    // GET ALL VIDEOS
    public function videos() {
        if (isset($_POST['submit'])) {
            $data = [
                'id' => $_POST['id'],
                'error' => '' 
            ];
            $result = $this->visiteurModel->allVideos($data);

            if ($result) {
                $this->view('visiteur/videos', $result);
            }else {
                $data['error'] = 'Le dossier est vide';
                $this->view('visiteur/videos', $data);
            }
        }
    }
    

    
}
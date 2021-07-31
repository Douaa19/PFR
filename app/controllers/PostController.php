<?php

class PostController extends Controller
{

    public function __construct()
    {
        //Instanciation du model
        $this->postModel = $this->model('post');
    }


    // GO TO:

    // INDEX - ACCUEIL ADMIN
    public function index() {
        $result = $this->postModel->sexPhotos();
        
        $this->view('admin/accueil', $result);
    }

    // ADMIN FOLDERS OF IMAGES
    public function foldersPhotos() {
        $result = $this->getFolders();

        $this->view('admin/f-photos', $result);
    }

    // ADMIN PHOTOS PAGE
    public function photos() {
        if (isset($_POST['submit'])) {
            $data = [
                'id' => $_POST['id'],
                'error' => ''
            ];
            $result = $this->postModel->photos($data);
            if ($result) {
                $this->view('admin/photos', $result);
            }else {
                $data['error'] = 'Le dossier est vide';
                $this->view('admin/photos', $data);
            }
        }
    }

    // ADMIN VIDEO PAGE
    public function foldersVideos() {
        $result = $this->getFolders();

        $this->view('admin/f-videos', $result);
    }

    // DASHBOARD PAGE
    public function dashboard() {
        $this->view('admin/dashboard');
    }

    // DASHBOARD PHOTO PAGE
    public function dashPhoto() {
        $data = $this->postModel->getPhotos();

        $this->view('admin/dash-photo', $data);
    }

    // FORM FOR ADD PHOTO
    public function add() {
        //  SELECT FLDERS FOR DISPLAY IT IN THE DROP DOWN SELECT
        $result = $this->getFolders();
        
        $this->view('admin/add-photo', $result);    
    }

    // DASHBOARD VIDEO PAGE
    public function dashVideo() {
        $this->view('admin/dash-video');
    }

    // ADD VIDEO PAGE
    public function addVideo() {
        $this->view('admin/add-video');
    }

    // DASHBOARD FOLDER 
    public function dashFolder() {
        $result = $this->getFolders();
        
        $this->view('admin/dash-folder', $result);
    }

    // ADD FOLDER PAGE
    public function addFolder() {
        $this->view('admin/add-folder');
    }

    // DASHBOARD CLIENT PAGE
    public function dashClient() {
        $this->view('admin/dash-client');
    }



    // ADD METHODS

    // ADD PHOTO
    public function addPhoto() {
        if (isset($_POST['submit'])) {
            if (!empty($_FILES['image']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['tag']) && !empty($_POST['folder'])) {
                
                
                $image = $_FILES['image']['tmp_name'];
                $data= [
                    'title' => $_POST['title'],
                    'image' => $_FILES['image']['name'],
                    'description' => $_POST['description'],
                    'tag' => $_POST['tag'],
                    'folder' => $_POST['folder'] 
                ];

                if ($this->uploadPhoto($image) === true) {
                    if ($this->postModel->addPhoto($data)) {
                        header('Location: ' . URLROOT . '/PostController/dashPhoto');
                    }else {
                        die('This is not working');
                    }
                }

                echo var_dump($data);
                
            } else {
                header('Location: ' . URLROOT . '/PostController/add');
            }
        }

        $this->view('admin/photos');
        
    }

    // ADD VIDEO

    // Add Folder
    public function insertFolder() {
        if (isset($_POST['submit'])) {
            $data = [
                'name' => $_POST['name'],
                'image' => $_FILES['image'],
                'error' => ''
            ];
            
            if (!empty($_POST['name']) && !empty($_FILES['image'])) {
                
                $image = $_FILES['image']['tmp_name'];
                $data= [
                    'name' => $_POST['name'],
                    'image' => $_FILES['image']['name'],
                    'error' => ''
                ];

                $check = $this->postModel->oneFolder($data);
                if (!$check) {
                    if ($this->uploadPhoto($image) === true) {
                        if ($this->postModel->addFolder($data)) {
                            
                            header('Location: ' . URLROOT . '/PostController/dashFolder');
                        }
                    }
                    }else {
                        $data['error'] = 'Le dossier est déjà existe';
                        $this->view('admin/add-folder', $data);
                    }
            }else {
                $data['error'] = 'Les champs sont vides';
                $this->view('admin/add-folder', $data);
            }
        }
        
    }


    // DELETE METHODS

    // PHOTO
    public function deletePhoto() {
        $data = [
            'id' => $_POST['id'],
            'image' => $_POST['image']
          ];
          if ($this->postModel->deletePhoto($data)) {
              $image = $data['image'];
              $path = "C:\\xampp\htdocs\PFR\public\uploads/$image";
              chown($path, 666);

              if (unlink($path)) {
                header('location:' . URLROOT . '/' . 'PostController/dashPhoto');
              }else {
                  $_SESSION["Le poste ne être pas supprimé"];
              }
        }else {
            echo "Post not deleted";
        }
          
        }

    // VIDEO


    // FOLDER
    public function deleteFolder() {
        $data = [
            'id' => $_POST['id_folder'],
            'image' => $_POST['image']
        ];
        
        if ($this->postModel->deleteFolder($data)) {
            header('Location: ' . URLROOT . '/PostController/dashFolder');
        }
    }


    // UPDATE METHODS

    // PHOTO


    // VIDEO


    // FOLDER



    // SUPPORT METHODS

    // GET FOLDERS
    public function getFolders() {
        $result = $this->postModel->getFolders();

        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // UPLOAD IMAGE
    public function uploadPhoto($image)
    { 
     $dir = "C:\\xampp\htdocs\PFR\public\uploads";
      $name = str_replace(' ','-',strtolower($_FILES["image"]["name"]));
      $type = $_FILES["image"]["type"];
      if(move_uploaded_file($image,$dir."/".$name))
      {
         return true;    
      }else{
        return false;
       }
    }












    


    










    

     
    

    // Select One Post From Data
    public function editPhoto() {
        $data = [
            'id' => $_POST['id'],
            'image' => $_POST['image']
        ];

        $result = $this->postModel->selectOne($data);

        $data1 = $this->postModel->selectFolder();

        
        if($result) {
            $this->view('admin/edit-photo', $result, $data1);
        }else {
            return false;
        }
    }

    // Update The Data Selected 
    public function updatePhoto() {
        if (isset($_POST['"btn-update'])) {
            if (!empty($_FILES['new_image']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['tag']) && !empty($_POST['folder'])) {
                
                $new_image = $_FILES['new_image']['tmp_name'];
                $data= [
                    'title' => $_POST['title'],
                    'image' => $_FILES['new_image']['name'],
                    'description' => $_POST['description'],
                    'tag' => $_POST['tag'],
                    'folder' => $_POST['folder']
                ];

                if ($this->uploadPhoto() === true) {
                    if ($this->postModel->updatePhoto()) {
                        echo 'all is going right';
                    }
                }

            }else {
                $error = [
                    'error' => 'IL Y A DES CHAMPS VIDES'
                ];

                $this->view('admin/edit-photo', [], $error);
            }
        }else {
            $this->view('admin/edit-photo');
        }
    }

    // Test For Image Update
    public function testImage() {
        if (isset($_POST['btn-update'])) {
            if (!empty($_FILES['new_image']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['tag']) && !empty($_POST['folder'])) {
                
                $data = [
                    'id' => $_POST['id'],
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'tag' => $_POST['tag'],
                    'new_image' => $_FILES['new_image']['name'],
                    'old_image' => $_POST['old_image']
                ];

                if ($data['new_image'] != '' ) {
                    $update_filename = $data['new_image'];
                }else {
                    $update_filename = $$data['old_image'];
                }

                $dir = "C:\\xampp\htdocs\PFR\public\uploads\\" . $data['new_image'];

                if (file_exists($dir)) {
                    echo 'Image already exists';
                } else {
                    $this->postModel->updatePhoto($data);
                    die();
                }

                

            }
        }
    }
}



    

    
    


    

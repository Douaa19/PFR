<?php

class PostController extends Controller
{

    public function __construct()
    {
        //instanciation du model
        $this->postModel = $this->model('post');
    }
    

    public function index() {
        $result = $this->postModel->getPhotos();
        
        $this->view('admin/accueil', $result);
    }


    public function photos() {
        $result = $this->postModel->getPhotos();
        
        $this->view('admin/photos', $result);
    }


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

     public function add() {
         $this->view('admin/add-photo');     
        }

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

    // Dashboard page
    public function dashboard() {
        $this->view('admin/dashboard');
    }

    // Dashboard photos page
    public function dashPhoto() {
        $data = $this->postModel->getPhotos();

        $this->view('admin/dash-photo', $data);
    }

    // Delete method for photos
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

    // Select one post from data
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

    // Update the data selected 
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


    



    // Test for image update
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



    

    
    


    

<?php

class PostController extends Controller
{

    public function __construct()
    {
        //instanciation du model
        $this->postModel = $this->model('post');
    }

    public function index() {
<<<<<<< Updated upstream
        return view('admin/accueil');
=======
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
      if(move_uploaded_file($_FILES["image"]["tmp_name"],$dir."/".$name))
      {
         return true;    }
      else{
        return false;
       }
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
                        header('Location: ' . URLROOT);
                    }else {
                        die('This is not working');
                    }
                }

                echo var_dump($data);
                
            } else {
                header('Location: ' . URLROOT);
            }
        }

        $this->view('admin/photos');
        
>>>>>>> Stashed changes
    }

    // Dashboard page
    public function dashboard() {
        $this->view('admin/dashboard');
    }

    



    
}
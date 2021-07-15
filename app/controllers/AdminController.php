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

    // Login method
    public function login() {

        if(isset($_POST['submit_login'])) {

            if(!empty($_POST['email']) && !empty($_POST['password'])) {

                $data = [
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
                ];

            } else {
                $errors = [
                    'error_email' => "Saisez votre adresse email",
                    'error_password' => "Saisez votre mot de passe"
                ];

                $this->view('admin/index', [], $errors);
            }

            if (isset($data)) {
                $logged = $this->adminModel->getAdmin($data);

                if (!$logged) {
                    $this->view('admin/index');
                } else {
                    $this->creatSession($logged);
                    header('Location:' . URLROOT . '/' . 'AdminController/index');
                }
            } else {
                $this->view('admin/index');
            }

        }

    }
}

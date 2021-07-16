<?php

class AdminController extends Controller
{





    public function __construct()
    {
        //instanciation du model
        $this->adminModel = $this->model('admin');
    }

    public function accueil() {
        $this->view('admin/accueil');
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

            } elseif (empty($_POST['email']) || empty($_POST['password'])) {
                $errors = [
                    'empty_email' => "Saisez votre adresse email",
                    'empty_password' => "Saisez votre mot de passe"
                ];

                header('location: ' . URLROOT);
                // $this->view('admin/index', [], $errors);
             }

            if (isset($data)) {
                $logged = $this->adminModel->getAdmin($data);
                $email = $data['email'];
                $password = $data['password'];
                $dbEmail = $logged->email;
                $dbPassword = $logged->password;

                if ($email === $dbEmail && $password === $dbPassword) {
                    
                    $this->createSession($logged);
                    $this->view('admin/accueil');
                } else {
                    $this->view('admin/index');
                }
            } else {
                $this->view('admin/index');
            }

        }

    }

    // Create session for login
    public function createSession($admin) {
        // session_start();
        $_SESSION['id'] = $admin->id;
        $_SESSION['email'] = $admin->email;
        $_SESSION['password'] = $admin->password;

    }

    // Kill session for logout
    public function killSession() {

            session_unset();
            session_destroy();

        header('Location: ' . URLROOT);
    }
}

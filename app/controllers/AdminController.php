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

            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_error' => '',
                'password_error' => ''
            ];

            if (empty($data['email'])) {
                $data['email_error'] = '*Saisir votre email*';
            }

            if (empty($data['password'])) {
                $data['password_error'] = '*Saisir votre mot de passe*';
            }

            if(!empty($data['email']) && !empty($data['password'])) {

                $result = $this->adminModel->getAdmin($data);

                if ($result === true) {
                    $dbEmail = $result->email;
                    $dbPassword = $result->password;

                    if ($data['email'] === $dbEmail && $data['password'] === $dbPassword) {
                        $this->createSession($result);
                    }

                    if ($data['password'] !== $dbPassword) {
                        $data['password_error'] = 'Le mot de passe est incorrect';

                        $this->view('admin/index', $data);
                    }
                    
                    
                }

            }

            $this->view('admin/index', $data);

        }

    }

    // Create session for login
    public function createSession($admin) {
        // session_start();
        $_SESSION['id'] = $admin->id;
        $_SESSION['name'] = $admin->name;
        $_SESSION['email'] = $admin->email;
        $_SESSION['password'] = $admin->password;

        header('Location: ' . URLROOT . '/PostController/index');

    }

    // Kill session for logout
    public function killSession() {

        session_unset();
        session_destroy();

        header('Location: ' . URLROOT);
    }

    // Serch method
    public function search() {
        if (isset($_POST['submit_search'])) {
            if (!empty($_POST['search'])) {
                
                $data = [
                    'search' => $_POST['search'] 
                ];

                $result = $this->adminModel->search($data);

                if ($result) {
                    $this->view('admin/result', $result);
                }else {
                    $data = [
                        'error_search' => "Le resultat ne trouve pas"
                    ];
                    $this->view('admin/result', [], $data);
                }

            } else {
                $this->view('admin/accueil');
            }
        }
    }

    
}

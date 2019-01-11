<?php
class CmsController extends ControllerBase //Jasper
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action, false, 'user');
        //$this->loadModel('userModel');
        $this->view->setLayout('Cms');
    }

    public function indexAction()
    {
        //formatted_print_r(UserModel::currentLoggedInUser());
        if (UserModel::checkLoginState(false)) {
            Router::redirect('cms/dashboard');
        }
    }

    public function loginAction()
    {
        //checking currentLoggedInUser instead of loginState bc otherwise it'll loop 
        if (UserModel::currentLoggedInUser()) {
            Router::redirect('cms/dashboard');
        }

        $validation = new Validate();
        if ($_POST) {
            
            //form validation
            $validation->check($_POST, [
                'username' => [
                    'display' => 'Username',
                    'required' => true
                ],
                'password' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 6
                ]
            ]);
            if ($validation->passed()) {
                $user = $this->UserModel->getUserByUsername($_POST['username'], true); //$user = new UserModel($_POST['username']);
                if ($user && password_verify(Input::getInput('password'), $user->password)) {
                    if (isset($_POST['remember_me']) && Input::getInput('remember_me')) {
                        $remember = true;
                    } else {
                        $remember = false;
                    }
                    
                    $this->UserModel->login($remember);

                    if (isset($_GET['dest'])) {
                        Router::redirect($_GET['dest']);
                    }
                    Router::redirect('cms/dashboard');

                } else {
                    $validation->addError("There is an error with your username or password.");
                }
            }
        }
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->renderView('cms/loginView');
    }

    public function logoutAction()
    {

       UserModel::checkLoginState(false)->logout();
        //$user->logout();

        //formatted_print_r(UserModel::currentLoggedInUser());
        // $user = UserModel::currentLoggedInUser();
        // if ($user) {
        //     $user->logout();
        // }
        // Router::redirect('cms');
    }

    public function dashboardAction($arg = null)
    {
        if ($arg == 'deleteUserSession') {
            Session::deleteSession(CURRENT_USER_SESSION_NAME);
            router::redirect('cms');
        }elseif ($arg == 'deleteSession') {
            Session::deleteSession('ALL');
            router::redirect('cms');
        }

        $user = UserModel::checkLoginState();

        // if (!$user) {
        //     Router::redirect('cms');
        // }
        $this->view->UserModel = $user;
        $this->view->renderView('cms/DashboardView2');

    }




}
?>
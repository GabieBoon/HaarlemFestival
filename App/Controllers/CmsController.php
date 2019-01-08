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
        if (UserModel::currentLoggedInUser()) {
            Router::redirect('cms/dashboard');
        }
        Router::redirect('cms/login');
    }

    public function loginAction()
    {
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
        //formatted_print_r(UserModel::currentLoggedInUser());
        $user = UserModel::currentLoggedInUser();
        if ($user) {
            $user->logout();
        }
        Router::redirect('cms');
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

        $user = UserModel::currentLoggedInUser();

        if (!$user) {
            Router::redirect('cms');
        }
        $this->view->UserModel = $user;
        $this->view->renderView('cms/DashboardView2');

    }
}
?>
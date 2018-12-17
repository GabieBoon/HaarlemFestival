<?php
class CmsController extends ControllerBase //Jasper
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action, true, 'User' );
        //$this->loadModel('userModel');
        $this->view->setLayout('Default');
    }

    public function indexAction()
    {
        if (currentUser()) {
            Router::redirect();
        }
        Router::redirect('CMS/login');
    }

    public function loginAction()
    {
        //formatted_print_r($this->view);
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
                $user = $this->UserModel->findByUsername($_POST['username']);

                if ($user && password_verify(Input::getInput('password'), $user->password)) {
                    if (isset($_POST['remember_me']) && Input::getInput('remember_me')) {
                        $user->login(true);
                    } else {
                        $user->login(false);
                    }

                    Router::redirect('');
                } else {
                    $validation->addError("There is an error with your username or password.");
                }
            }

        }
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render_curtis('CMS/loginView');
    }

    public function logoutAction()
    {
        //formatted_print_r(currentUser());
        if (currentUser()) {
            currentUser()->logout();
        }
        Router::redirect('CMS/login');
    }
}
?>
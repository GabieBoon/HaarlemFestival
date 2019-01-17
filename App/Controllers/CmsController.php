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
            // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // formatted_print_r($password);
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

    public function dashboardAction($arg = '')
    {
        if ($arg == 'deleteUserSession') {
            Session::deleteSession(CURRENT_USER_SESSION_NAME);
            router::redirect('cms');
        } elseif ($arg == 'deleteSession') {
            Session::deleteSession('ALL');
            router::redirect('cms');
        }

        $this->view->UserModel = UserModel::checkLoginState();
        $this->view->renderView('cms/DashboardView2');

    }
    // Dashboard
    // Statistics
    // Edit Timetable
    // Edit Event Pages
    // ManageUsers
    // Settings



    public function statisticsAction($event = 'Event')
    {
        $this->view->event = CmsModel::CheckEvent($event);
        $this->view->UserModel = UserModel::checkLoginState();
       
        
        $this->view->renderView('CMS/StatisticsView');
    }

    public function editAction($type, $event = 'Event')
    {
        $this->view->event = CmsModel::CheckEvent($event);
        $this->view->UserModel = UserModel::checkLoginState();



        $lc_type = strtolower($type);
        if ($lc_type == 'timetable') {
            $this->view->renderView('CMS/EditTimetableView');
        } elseif ($lc_type == 'event') {


            $content = new ContentModel();
            $this->view->ContentModel = $content->getContent($event);



            $this->view->renderView('CMS/EditEventView');
        }
        
    }

    public function manageUsersAction($type=null, $event = '')
    {
        if ($event != '') {


        }

        $lc_type = strtolower($type);
        if ($lc_type == 'timetable') {

        } elseif ($lc_type == 'event') {

        }



        $this->view->UserModel = UserModel::checkLoginState();
        $this->view->renderView('CMS/ManageUsersView');
    }

    public function settingsAction($type = null, $event = '')
    {
        if ($event != '') {


        }

        $lc_type = strtolower($type);
        if ($lc_type == 'timetable') {

        } elseif ($lc_type == 'event') {

        }



        $this->view->UserModel = UserModel::checkLoginState();
        $this->view->renderView('CMS/SettingsView');
    }

}
?>
<?php
class CmsController extends ControllerBase //Jasper
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action, false, 'user');
        //$this->loadModel('userModel');
        $this->view->setLayout('Cms');
    }

    // index
    public function indexAction()
    {
        if (UserModel::checkLoginState(false)) {
            Router::redirect('cms/dashboard');
        }
    }

    // Login
    public function loginAction()
    {
        //checking currentLoggedInUser instead of loginState bc otherwise it'll loop 
        if (UserModel::currentLoggedInUser()) {
            Router::redirect('cms/dashboard');
        }

        $validation = new Validate();
        if ($_POST) {
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

    // Logout
    public function logoutAction()
    {
        UserModel::checkLoginState(false)->logout();
    }

    // Dashboard
    public function dashboardAction($arg = '')
    {
        $this->view->UserModel = UserModel::checkLoginState();
        if ($arg == 'deleteUserSession') {
            Session::deleteSession(CURRENT_USER_SESSION_NAME);
            router::redirect('cms');
        } elseif ($arg == 'deleteSession') {
            Session::deleteSession('ALL');
            router::redirect('cms');
        }


        $this->view->renderView('cms/DashboardView');

    }

    // Statistics
    public function statisticsAction($event = 'Event')
    {
        $this->view->UserModel = UserModel::checkLoginState();
        $this->view->event = CmsModel::checkEvent($event);



        $this->view->renderView('CMS/StatisticsView');
    }

    // EditTimetable && EditEventPage
    public function editAction($type, $event = 'Event', $args = [])
    {
        function getScheduleInfoByEvent(string $event)
        {
            $ScheduleModel = new ScheduleModel();
            $dates = $ScheduleModel->getDatesByEvent($event);

            $eventSessions = (object)[];

            $dateCount = count($dates);
            for ($i = 0; $i < $dateCount; $i++) {
                $date = $dates[$i]->date;

                $eventSessions->{$date} = $ScheduleModel->getEventsByEventDate($event, $date);
                $eventSessionCount = count($eventSessions->{$date});
                for ($j = 0; $j < $eventSessionCount; $j++) {
                    $ticketId = $eventSessions->{$date}[$j]->ticketId;
                    $ArtistAndLocationData = $ScheduleModel->getArtistAndLocationByTicketId($event, $ticketId);

                    foreach ($ArtistAndLocationData as $key => $value) {
                        $eventSessions->{$date}[$j]->{$key} = $value;
                    }
                }
            }
            return $eventSessions;
        }


        $this->view->UserModel = UserModel::checkLoginState();
        $this->view->event = CmsModel::checkEvent($event);
        $lc_type = strtolower($type);
        if ($lc_type === 'timetable') {


            $this->view->ScheduleData = getScheduleInfoByEvent($event);





            $this->view->renderView('CMS/EditTimetableView');
        } elseif ($lc_type === 'event') {

            $content = new ContentModel();
            $this->view->ContentModel = $content->getDetailedContent($_SESSION['Language'], $event);
            $this->view->renderView('CMS/EditEventView');
        }

    }

    // Manage Users
    public function manageUsersAction($args = [], $event = '')
    {
        $this->view->UserModel = UserModel::checkLoginState();
        if (strtolower($args[0]) === 'register') {
            // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // formatted_print_r($password);
            // form validation
        }

        $lc_type = strtolower($type);
        if ($lc_type == 'timetable') {

        } elseif ($lc_type == 'event') {

        }




        $this->view->renderView('CMS/ManageUsersView');
    }

    // Settings
    public function settingsAction($type = null, $event = '')
    {
        $this->view->UserModel = UserModel::checkLoginState();
        if ($event != '') {


        }

        $lc_type = strtolower($type);
        if ($lc_type == 'timetable') {

        } elseif ($lc_type == 'event') {

        }



        $this->view->renderView('CMS/SettingsView');
    }

}
?>
<?php

class DanceController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->view->setBgImage('Dance_BW.jpg');
    }

    public function indexAction()
    {
        $this->showPage();
    }

    public function showPage()
    {
        $this->view->danceArtists = $this->DanceModel->getDanceArtists();
        $this->view->danceLocations = $this->DanceModel->getLocations("Dance");
        $this->view->danceTickets = $this->DanceModel->getDanceTickets();
        $this->view->allAccessTickets = $this->DanceModel->getAllAccessTicketsDance();

        include ROOT . DS . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        include ROOT . DS . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'ViewFunctions' . DS . 'DanceViewFunctions.php';

        $content = new ContentModel();


        $this->view->content = $content->getContent($_SESSION['Language'],'Dance');


        $this->view->renderView("Dance/DanceViewV2");
    }

}
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

    //geeft de dancepagina weer op het scherm
    public function showPage()
    {
        //haal data uit de database op een zet die op een plek waar danceview er bij kan
        $this->view->danceArtists = $this->DanceModel->getDanceArtists();
        $this->view->danceLocations = $this->DanceModel->getLocations("Dance");
        $this->view->danceTickets = $this->DanceModel->getDanceTickets();
        $this->view->allAccessTickets = $this->DanceModel->getAllAccessTicketsDance();

        //laad de tablegenerator in
        include ROOT . DS . 'App' . DS . 'Lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        //laad de extra functies voor de view laag in
        include ROOT . DS . 'App' . DS . 'Views' . DS . 'Dance' . DS . 'ViewFunctions' . DS . 'DanceViewFunctions.php';

        //laad de content van de pagina in afhankelijk van de taal
        $content = new ContentModel();
        $this->view->content = $content->getContent($_SESSION['Language'],'Dance');


        $this->view->renderView("Dance/DanceView");
    }

    //wordt gebruikt om via Ajax artiestenInfo op te halen
    public function artistAction($artistId = NULL)
    {
        if ($artistId != NULL){
            $danceArtist = $this->DanceModel->getDanceArtist($artistId);

            //encode via json zodat de klasse uit de db goed overkomt naar jQuery
            header("Content-Type: application/json");
            echo json_encode($danceArtist);
        }
        else{
            //error opvanging voor als de user niet via AJAX op de pagina komt
            $this->showPage();
        }
    }

    //wordt gebruikt om via Ajax locatieInfo op te halen
    public function locationAction($locationId = NULL)
    {
        if ($locationId != NULL){
            $danceLocation = $this->DanceModel->getLocation("Dance", $locationId);

            //encode via json zodat de klasse uit de db goed overkomt naar jQuery
            header("Content-Type: application/json");
            echo json_encode($danceLocation);
        }
        else{
            //error opvanging voor als de user niet via AJAX op de pagina komt
            $this->showPage();
        }

    }
}
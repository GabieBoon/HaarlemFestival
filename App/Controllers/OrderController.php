<?php

class OrderController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
        
        //these are editable
         $this->view->setSiteTitle('Order - Haarlem Festival');
         $this->view->setBgImage('orderbg.jpg');
    }

    public function indexAction()
    {
        Router::redirect('cart');
    }

    public function dataAction()
    {
        $this->view->renderView('Order/DataView');
    }

    public function confirmAction()
    {
        $_SESSION['customerData'] = $_POST;
        $this->view->renderView('Order/ConfirmView');
    }


    public function successAction()
    {
        // plz format to dynamic absolute path
        if (!empty($_SESSION['customerData'])) {
            $firstName = $_SESSION['customerData']['firstName'];
            $lastName = $_SESSION['customerData']['lastName'];
            $email = $_SESSION['customerData']['email'];
            $remarks = $_SESSION['customerData']['remarks'];
            $currentdate = date("Y-m-d");

            $tickets = $_SESSION['Cart'];



            require('app/lib/fpdf/fpdf.php');

            foreach ($tickets as $ticket){

                //splits binnenkomende data op
                //data komt binnen als 2019-7-27 20:30:00
                $startDateTime = explode(' ', $ticket->startTime);
                $startDate = explode('-', $startDateTime[0]);
                $startTime = explode(':', $startDateTime[1]);

                if ($ticket->isAllAccessTicket == 0){
                    $ticketType = "Normal";
                }
                else{
                    $ticketType = "All-Access-Ticket";
                }


                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->SetX(110);
                $pdf->Cell(50, 10, "{$firstName} {$lastName}");
                $pdf->Ln();
                $pdf->SetY(20);
                $pdf->SetX(110);
                $pdf->Cell(40, 10, "$email");
                $pdf->SetY(30);
                $pdf->SetX(110);
                $pdf->Cell(40, 10, "$currentdate");
                $pdf->SetFont('Arial', 'B', 20);
                $pdf->SetY(50);
                $pdf->SetX(110);
                $pdf->Cell(50, 20, 'e-ticket');
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->SetY(65);
                $pdf->SetX(110);
                $pdf->Cell(60, 10, 'Toegang voor een persoon');
                $pdf->SetFont('Arial', 'I', 12);
                $pdf->SetY(70);
                $pdf->SetX(110);
                $pdf->Cell(60, 10, 'zomer iets met toegang ofzo');
                $pdf->SetFont('Arial', 'I', 12);
                $pdf->SetY(75);
                $pdf->SetX(110);
                $pdf->Cell(60, 10, 'Iets met barcode enzo');
                $pdf->SetY(10);
                $pdf->SetX(10);
                $pdf->Cell(90, 75, '', 1);
                $pdf->Image('public/images/1.jpeg', 25, 17, 60);
                $pdf->Image('public/images/2.jpg', 110, 90, 80);
                $pdf->SetY(90);
                $pdf->Cell(90, 90, '', 1);
                $pdf->SetY(95);
                $pdf->Setx(38);
                $pdf->SetFont('Arial', 'I', 14);
                $pdf->Cell(60, 10, 'Evenementen');
                $pdf->SetY(110);
                $pdf->Setx(38);
                $pdf->Cell(60, 10, "");
                $pdf->SetY(130);
                $pdf->Setx(110);
                $pdf->SetFont('Arial', 'I', 14);
                $pdf->Cell(60, 10, 'Koper:');
                $pdf->SetY(130);
                $pdf->Setx(150);
                $pdf->Cell(60, 10, "{$firstName} {$lastName}");
                $pdf->SetY(137);
                $pdf->Setx(110);
                $pdf->Cell(60, 10, 'Datum event:');
                $pdf->SetY(137);
                $pdf->Setx(150);
                $pdf->Cell(60, 10, "$startDateTime[0]");
                $pdf->SetY(144);
                $pdf->Setx(110);
                $pdf->Cell(60, 10, 'Locatie:');
                $pdf->SetY(144);
                $pdf->Setx(150);
                $pdf->Cell(60, 10, "Haarlem" );
                $pdf->SetY(151);
                $pdf->Setx(110);
                $pdf->Cell(60, 10, 'Tijd:');
                $pdf->SetY(151);
                $pdf->Setx(150);
                $pdf->Cell(60, 10, "$startTime[0]:$startTime[1]");
                $pdf->SetY(158);
                $pdf->Setx(110);
                $pdf->Cell(60, 10, 'Prijs:');
                $pdf->SetY(158);
                $pdf->Setx(150);
                $pdf->Cell(60, 10, $ticket->price);
                $pdf->SetY(165);
                $pdf->Setx(110);
                $pdf->Cell(60, 10, 'Type:');
                $pdf->SetY(165);
                $pdf->Setx(150);
                $pdf->Cell(60, 10, "$ticketType");
            }


        }


        $this->view->renderView('Order/SuccessView');
    }
}
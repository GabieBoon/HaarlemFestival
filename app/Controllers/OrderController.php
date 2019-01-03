<?php

class OrderController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
        
        //these are editable
        // $this->view->setLayout('Default');
        // $this->view->setHeader('Default');
        // $this->view->setFooter('Default');
        // $this->view->setSiteTitle('Wanna buy some tickets?');
        // $this->view->setBgImage('cartBackground.jpg');
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
        require('app/lib/fpdf/fpdf.php'); 

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetX(110);
        $pdf->Cell(50, 10, 'Thijs Otter');
        $pdf->Ln();
        $pdf->SetY(20);
        $pdf->SetX(110);
        $pdf->Cell(40, 10, '19/12/2018');
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
        $pdf->SetY(130);
        $pdf->Setx(110);
        $pdf->SetFont('Arial', 'I', 14);
        $pdf->Cell(60, 10, 'Koper:');
        $pdf->SetY(137);
        $pdf->Setx(110);
        $pdf->Cell(60, 10, 'Datum:          19/12/2018');
        $pdf->SetY(144);
        $pdf->Setx(110);
        $pdf->Cell(60, 10, 'Locatie:        Haarlem');
        $pdf->SetY(151);
        $pdf->Setx(110);
        $pdf->Cell(60, 10, 'Tijd:           17:00');
        $pdf->SetY(158);
        $pdf->Setx(110);
        $pdf->Cell(60, 10, 'Prijs:          60,00');
        $pdf->SetY(165);
        $pdf->Setx(110);
        $pdf->Cell(60, 10, 'Type:           Normaal');
        $pdf->Output();

        $this->view->renderView('Order/SuccessView');
    }
}
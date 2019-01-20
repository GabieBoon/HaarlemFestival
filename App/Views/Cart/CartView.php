<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/CartCss.css" ><!-- Cart CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<main class="background-image">
    <div class="container cart-content">
        <h1 class="text-center">Tickets in cart</h1>
        <div class="row">
            <div class="col-7"><b>Ticket</b></div>
            <div class="col-1"><b>Price</b></div>
            <div class="col-1"><b>Amount</b></div>
            <div class="col-1"><b>Total</b></div>
            <div class="col-2"></div>
        </div>
        <?php
//        $this->printTickets();
         foreach ($_SESSION['Cart'] as $ticket) {
//             echo '<pre>';
//             var_dump($ticket);
//             echo '</pre>';
             include ROOT . 'app' . DS . 'Views' . DS . 'Order' . DS . 'Partials' . DS . 'TicketRow' . '.php';
         }
        ?>
        <a href="<?= PROOT ?>order/data" role="button" class="btn btn-primary">Proceed to payment</a>
    </div>
</main>
<?php $this->end(); ?><!-- end body -->


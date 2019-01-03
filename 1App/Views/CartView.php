<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/CartCss.css" ><!-- Cart CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->





<main class="background-image">


<h1>Tickets</h1>
<?php
 $this->printTickets ();
// foreach ($_SESSION['Cart'] as $ticketId => $ticket) {
//     var_dump($ticket);
// }
?>

<a href="<?= PROOT ?>Order/Data" role="button" class="btn btn-primary">Afrekenen</a>


</main>
<?php $this->end(); ?><!-- end body -->


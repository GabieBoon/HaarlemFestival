<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>public/css/OrderCss.css" ><!-- Order CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<!-- <div class="background-image"> -->

<h1>Order - Confirmation</h1>

<!--<pre>< ?php var_dump($_SESSION['customerData']); ?></pre>-->

<h2>Order details</h2>

<h3>Personal information</h3>
<ul>
    <li>
        <span><b>First name:</b></span>
        <p><?= $_POST['firstName'] ?></p>
    </li>
    <li>
        <span><b>Last name:</b></span>
        <p><?= $_POST['lastName'] ?></p>
    </li>
    <li>
        <span><b>E-mail address:</b></span>
        <p><?= $_POST['email'] ?></p>
    </li>
    <li>
        <span><b>Remarks:</b></span>
        <p><?= $_POST['remarks'] ?></p>
    </li>
</ul>

<h3>Tickets</h3>
<ul>
<!-- <pre>< ?php //var_dump($_SESSION['Cart']); ?></pre>-->
    <?php

    $this->printTickets();

    ?>
</ul>
<a href="<?= PROOT ?>order/data" role="button" class="btn">Back</a>
<a href="<?= PROOT ?>order/success" role="button" class="btn btn-primary">Go to payment</a>



<!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->
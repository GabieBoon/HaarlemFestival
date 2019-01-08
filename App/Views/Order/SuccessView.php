<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/OrderCss.css" ><!-- Order CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<!-- <div class="background-image"> -->

<h1>Order successful</h1>

<h3>Your payment has been received. Your tickets have been sent to your e-mail address.</h3>
<!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->

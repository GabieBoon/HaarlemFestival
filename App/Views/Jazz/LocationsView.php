<?php $this->insert('Includes/Jazz/JazzSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzCss.php" ><!-- Jazz CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<?= $this->content('subnav'); ?>

<!-- <div class="background-image"> -->
<div class='alert'>LOCATIONS</div>
<!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->
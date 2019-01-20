<?php $this->insert('Jazz/JazzSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzCss.php" ><!-- Jazz CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image j-bg">
    <?= $this->content('subnav'); ?>

    <main class="j-content text-center">
        <h1>Order tickets</h1>
    </main>
</div>
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->
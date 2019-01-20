<?php //head ?>
<?php $this->start('head'); ?>
    <!-- Food CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HomeCss.css" >

<?= $this->getBgImage(); ?>

<?php $this->end(); ?>

<?php //body ?>
<?php $this->start('body'); ?>

    <div class="background-image">
        <img class="logo-center" src="<?= PROOT ?>Public/Images/HaarlemFestival-Logo-WT.png" alt="Haarlem Festival Logo"/>

    </div>


<?php $this->end(); ?>
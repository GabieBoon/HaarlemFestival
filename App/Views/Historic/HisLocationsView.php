<?php $this->insert('Historic/Includes/HistoricSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" ><!-- Historic CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image">
<?= $this->content('hissubnav'); ?>
    <section class="Home1">

        <div class="container1">

        <p class="topleft">
            Venues to visit are:<br/>
            <br/>

            <?= $this->ContentModel->Locations->lo1 ?> <br/><br/>

            <?= $this->ContentModel->Locations->lo2 ?><br/><br/>

            <?= $this->ContentModel->Locations->lo3 ?><br/><br/>
        </p>

        <img class="img3" src="<?= PROOT ?>public/images/Historic/Bavo.jpg" alt="test">

        <p class="middleright">
            <?= $this->ContentModel->Locations->lo4 ?><br/><br/>

            <?= $this->ContentModel->Locations->lo5 ?><br/><br/>

            <?= $this->ContentModel->Locations->lo6 ?><br/>
        </p>
        <img class="img4" src="<?= PROOT ?>public/images/Historic/jopenkerk.jpg" alt="test">


        <p class="bottemleft">
            <?= $this->ContentModel->Locations->lo7 ?><br/><br/>

            <?= $this->ContentModel->Locations->lo8 ?><br/><br/>

            <?= $this->ContentModel->Locations->lo9 ?><br/>
        </p>
        <img class="img5" src="<?= PROOT ?>public/images/Historic/molen_de_adriaan.png" alt="test">


        </div>

    </section>




<?php $this->end(); ?>
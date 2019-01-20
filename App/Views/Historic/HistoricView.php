<?php $this->insert('Historic/Includes/HistoricSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" ><!-- Historic CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image">
    <?= $this->content('hissubnav'); ?>
    <section class="Home1">
        <article>
        <h1 class="titel1"> <?= $this->ContentModel->About->title1 ?> </h1>
        <p class="para1">
            <?= $this->ContentModel->About->text1 ?>
        </p>
        <br/>
        <br/>

        </article>
        <img class="img1" src="<?= PROOT ?>public/images/Historic/bavokerk-haarlem.jpg" alt="test">

        <span class="clearfix">

        </span>
        <article>
        <h1 class="titel2"> <?= $this->ContentModel->About->title2 ?> </h1>
        <br/>
        <br/>
        <p class="para2">
            <?= $this->ContentModel->About->text2 ?>
            <br />
        </p>

        </article>
        <img class="img2" src="<?= PROOT ?>public/images/Historic/fotogracht.jpg" alt="test">
        <span class="clearfix">

        </span>

    </section>


    <!-- </div> -->
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->
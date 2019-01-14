<?php $this->insert('Jazz/JazzSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzCss.php" ><!-- Jazz CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image j-bg">
    <?= $this->content('subnav'); ?>

    <main class="j-content text-center">
        <h1>Performance venues</h1>
        <div class="row">
            <div class="col">
                <!-- Google Maps embed for Patronaat -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.3042050232634!2d4.626312915995283!3d52.3830354541227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef13805951c7%3A0x74fe2502604b46ae!2sPatronaat!5e0!3m2!1snl!2snl!4v1547388422344" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col">
                <!-- Google Maps embed for Grote Markt -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.395927686068!2d4.633821615995237!3d52.38137255424558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef6b99955555%3A0xe0c8b03b37433911!2sGrote+Markt!5e0!3m2!1snl!2snl!4v1547388738720" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </main>
</div>
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->
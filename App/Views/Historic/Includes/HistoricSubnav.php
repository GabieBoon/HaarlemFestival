<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HisSubnavCss.css" ><!-- Jazz Subnav CSS -->
<?php $this->end(); ?>

<?php $this->start('hissubnav'); ?>
<section class="hissubnav">
    <nav class="subnav">
        <a class="" href="<?= PROOT ?>Historic/about">About</a>
        <a class="" href="<?= PROOT ?>Historic/locations">Locations</a>
        <a class="" href="<?= PROOT ?>Historic/schedule">Schedule</a>
    </nav>
</section>
<?php $this->end(); ?>

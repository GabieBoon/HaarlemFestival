<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HisSubnavCss.css" ><!-- Jazz Subnav CSS -->
<?php $this->end(); ?>

<?php $this->start('hissubnav'); ?>
<section class="hissubnav">
    <nav class="text-center">
        <ul class="mb-0 pl-0">
            <li><a class="" href="<?= PROOT ?>Historic/about">About</a></li>
            <li><a class="" href="<?= PROOT ?>Historic/locations">Locations</a></li>
            <li><a class="" href="<?= PROOT ?>Historic/schedule">Schedule</a></li>
        </ul>
    </nav>
</section>
<?php $this->end(); ?>

<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzSubnavCss.php" ><!-- Jazz Subnav CSS -->
<?php $this->end(); ?>

<?php $this->start('subnav'); ?>
<section class="j-subnav">
    <nav class="text-center">
        <ul class="mb-0 pl-0">
            <li><a class="" href="<?= PROOT ?>jazz/about">About</a></li>
            <li><a class="" href="<?= PROOT ?>jazz/artists/1">Artists</a></li>
            <li><a class="" href="<?= PROOT ?>jazz/schedule">Schedule</a></li>
            <li><a class="" href="<?= PROOT ?>jazz/locations">Locations</a></li>
        </ul>
    </nav>
</section>
<?php $this->end(); ?>

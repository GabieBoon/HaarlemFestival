<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzSubnavCss.php" ><!-- Jazz Subnav CSS -->
<?php $this->end(); ?>

<?php $this->start('subnav'); ?>
<section class="j-subnav">
    <nav class="text-center">
        <ul>
            <li><a href="<?= PROOT ?>jazz/about">ABOUT</a></li>
            <li><a href="<?= PROOT ?>jazz/artists">ARTISTS</a></li>
            <li><a href="<?= PROOT ?>jazz/schedule">SCHEDULE</a></li>
            <li><a href="<?= PROOT ?>jazz/locations">LOCATIONS</a></li>
        </ul>
    </nav>
</section>
<?php $this->end(); ?>

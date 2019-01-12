<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Menu.css"><!-- Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('menu'); ?>

<?php
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;

?>



<!-- Menu (Group) -->
<nav id="menu">
    <ul>
        <li><a href="<?= PROOT ?>cms/dashboard" class="menuItem currentPage"><i class="menuIcon fas fa-tachometer-alt"></i>Dashboard</a></li>
        <li><a href="<?= PROOT ?>cms/statistics" class="menuItem"><i class="menuIcon fas fa-chart-line"></i>Statistics</a>
            <ul>
                <li><a href="<?= PROOT ?>cms/statistics/dance" class="subMenuItem">Dance</a></li>
                <li><a href="<?= PROOT ?>cms/statistics/jazz" class="subMenuItem">Jazz</a></li>
                <li><a href="<?= PROOT ?>cms/statistics/food" class="subMenuItem">Food</a></li>
                <li><a href="<?= PROOT ?>cms/statistics/historic" class="subMenuItem">Historic</a></li>
            </ul>
        </li>
        <li><a href="<?= PROOT ?>cms/edit/timetable" class="menuItem">
                    <i class="menuIcon far fa-calendar"></i>
                    <i class="menuIcon layer-2 fas fa-pen"></i>
                Edit Timetable</a>
            <ul>
                <li><a href="<?= PROOT ?>cms/edit/timetable/dance" class="subMenuItem">Dance</a></li>
                <li><a href="<?= PROOT ?>cms/edit/timetable/jazz" class="subMenuItem">Jazz</a></li>
                <li><a href="<?= PROOT ?>cms/edit/timetable/food" class="subMenuItem">Food</a></li>
                <li><a href="<?= PROOT ?>cms/edit/timetable/historic" class="subMenuItem">Historic</a></li>
            </ul>
        </li>
        <li><a href="<?= PROOT ?>cms/edit/event" class="menuItem"><i class="menuIcon fas fa-edit"></i>Edit Event Pages</a>
            <ul>
                <li><a href="<?= PROOT ?>cms/edit/event/dance" class="subMenuItem">Dance</a></li>
                <li><a href="<?= PROOT ?>cms/edit/event/jazz" class="subMenuItem">Jazz</a></li>
                <li><a href="<?= PROOT ?>cms/edit/event/food" class="subMenuItem">Food</a></li>
                <li><a href="<?= PROOT ?>cms/edit/event/historic" class="subMenuItem">Historic</a></li>
            </ul>
        </li>
        <li><a href="<?= PROOT ?>cms/manageusers" class="menuItem"><i class="menuIcon fas fa-users-cog"></i>ManageUsers</a></li>
        <li><a href="<?= PROOT ?>cms/settings" class="menuItem"><i class="menuIcon fas fa-cog"></i>Settings</a></li>
    </ul>
</nav>




<?php $this->end(); ?>
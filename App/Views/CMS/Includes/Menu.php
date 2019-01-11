<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('menu'); ?>

<?php
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;

?>



<!-- Menu (Group) -->
<nav >
    <ul>
        <li class="menuItem currentPage"><i class="fas fa-tachometer-alt"></i>Dashboard</li>
        <li class="menuItem">Statistics
            <ul>
                <li class="subMenuItem">Dance</li>
                <li class="subMenuItem">Jazz</li>
                <li class="subMenuItem">Food</li>
                <li class="subMenuItem">Historic</li>
            </ul>
        </li>
        <li class="menuItem">Edit Timetable
            <ul>
                <li class="subMenuItem">Dance</li>
                <li class="subMenuItem">Jazz</li>
                <li class="subMenuItem">Food</li>
                <li class="subMenuItem">Historic</li>
            </ul>
        </li>
        <li class="menuItem">Edit Event Pages
            <ul>
                <li class="subMenuItem">Dance</li>
                <li class="subMenuItem">Jazz</li>
                <li class="subMenuItem">Food</li>
                <li class="subMenuItem">Historic</li>
            </ul>
        </li>
        <li class="menuItem">ManageUsers</li>
        <li class="menuItem">Settings</li>
    </ul>
</nav>




<?php $this->end(); ?>
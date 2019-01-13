<?php $this->insert('CMS/Includes/Menu'); ?>
<!-- head -->
<?php $this->start('head'); ?>
<!-- <link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css">Cms CSS -->
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Sidebar.css"><!-- Cms CSS -->
<!-- <link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Menu.css">Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('sidebar'); ?>

<?php
$pathToImageFolder = PROOT . 'Public/Images/';

?>

<section id="sidebarLeft">


    <img id="logo" src="<?= $pathToImageFolder . 'HaarlemFestival-Logo-WT.svg'; ?>">

    <div id="loggedInUserInfoWrapper">
        <img id="avatar" src="<?= $pathToImageFolder . 'CMS/user-solid.svg'; ?>">
        <h3 id="userName">Administrator</h3>
        <a id="logoutBtn" href="cms/logout">Logout</a>


    </div>


    <?= $this->content('menu'); ?>

</section>

<?php $this->end(); ?>
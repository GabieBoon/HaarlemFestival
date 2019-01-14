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


        <div id="loggedInUserInfo-header">
            <!--  -->
            <!-- <span>Logged in as:</span> -->
            <h4 id="fullName"><?= $this->UserModel->getFullName(); ?></h4>
        </div>
        <div id="loggedInUserInfo-Left">
            <img id="avatar" src="<?= $pathToImageFolder . 'CMS/user-solid.svg'; ?>">
        </div>
        <div id="loggedInUserInfo-Right">
            <p><?= $this->UserModel->role ?></p>
            <a id="logoutBtn" href="<?= PROOT ?>cms/logout">Logout</a>
        </div>
        <span class="clearFix"></span>

    </div>


    <?= $this->content('menu'); ?>

</section>

<?php $this->end(); ?>
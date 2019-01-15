
<?php $this->insert('CMS/Includes/Menu'); ?>
<!-- head -->
<?php $this->start('head'); ?>

<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Sidebar.css"><!-- Cms CSS -->



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
            <text id="fullName"><?= $this->UserModel->getFullName(); ?></text>
            <script> fitty('text#fullName');</script>
        </div>
        <div id="loggedInUserInfo-Left">
            <?= $this->UserModel->getAvatar();?>
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
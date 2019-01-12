<?php $this->insert('CMS/Includes/Menu'); ?>
<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Sidebar.css"><!-- Cms CSS -->
<!-- <link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Menu.css">Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('sidebar'); ?>

<?php
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;

?>
<!-- < ?= $this->content('menu'); ?> -->

<!-- sidebar (Group) -->
<section id="u412" >

        <!-- Rectangle (Rectangle) -->
        <div id="u413">
            <div id="u413_div"></div>
        </div>

        
        <!-- Unnamed (Group) -->
        <div id="u414" class="ax_default" data-left="0" data-top="223" data-width="200" data-height="399">


  <?= $this->content('menu'); ?>

            <!-- loggedInUserInfo (Group) -->
            <div id="u455" class="ax_default" data-label="loggedInUserInfo" data-left="0" data-top="223" data-width="200"
                data-height="74">

                <!-- pageTitleBottomHRule (Horizontal Line) -->
                <div id="u456" class="ax_default" data-label="pageTitleBottomHRule">
                    <img id="u456_img" class="img " src="images/administrator_dashboard/pagetitlebottomhrule_u456.png">
                </div>

                <!-- pageTitleTopHRule (Horizontal Line) -->
                <div id="u457" class="ax_default" data-label="pageTitleTopHRule">
                    <img id="u457_img" class="img " src="images/administrator_dashboard/pagetitlebottomhrule_u456.png">
                </div>

                <!-- logoutButton (Rectangle) -->
                <div id="u458" class="ax_default link_button" data-label="logoutButton" style="cursor: pointer;">
                    <div id="u458_div" tabindex="0"></div>
                    <div id="u458_text" class="text ">
                        <p><span>Logout</span></p>
                    </div>
                </div>

                <!-- volunteerAvatarImg (Shape) -->
                <div id="u459" class="ax_default shape" data-label="volunteerAvatarImg">
                    <img id="u459_img" class="img " src="<?= $pathToImageFolder . 'CMS' . DS . 'user-solid.svg'; ?>">
                </div>

                <!-- voluteerUserNameLabel (Rectangle) -->
                <div id="u460" class="ax_default heading_3" data-label="voluteerUserNameLabel">
                    <div id="u460_div"></div>
                    <div id="u460_text" class="text ">
                        <p><span>Administrator</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unnamed (SVG) -->
        <div id="u461" class="ax_default image">
            <img id="u461_img" class="img " src="<?= $pathToImageFolder . 'HaarlemFestival-Logo-WT.svg'; ?>">
        </div>
</section>

<?php $this->end(); ?>
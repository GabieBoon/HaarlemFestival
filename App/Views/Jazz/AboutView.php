<?php $this->insert('Includes/Jazz/JazzSubnav'); ?>

<?php $this->start('head'); ?>

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzCss.php" >

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="background-image">
    <?= $this->content('subnav'); ?>

    <main class="j-content text-center">
        <h1>This is Haarlem Festival Jazz</h1>
        <p>
            Can’t get enough of jazz? Haarlem Festival has got you covered! With various artists from all over the world,
            we’ll make sure you’ll be having the time of your life during your stay here in Haarlem! Gumbo Kings, Jonna
            Frazer, Chris Allen, Lilith Merlot, Evolve, Gare du Nord, Myles Sanko, and many more—all live in Haarlem, this summer!
        </p>
        <p>
            Curious? Feel free to have a look around.
        </p>
    </main>
</div>
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?>
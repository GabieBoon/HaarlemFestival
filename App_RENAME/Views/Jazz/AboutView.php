<?php $this->insert('Jazz/JazzSubnav'); ?>

<?php $this->start('head'); ?>

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzCss.php" >

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="background-image j-bg">
    <?= $this->content('subnav'); ?>

    <main class="j-content j-about text-center">
        <h1>This is Haarlem Festival Jazz</h1>
        <p>
            Do you like jazz? Haarlem Festival has got you covered! With various artists from all over the world,
            we’ll make sure you’ll be having the time of your life during your stay here in Haarlem! Gumbo Kings, Jonna
            Fraser, Chris Allen, Lilith Merlot, Evolve, Gare du Nord, Myles Sanko, and many more—all live in Haarlem, this summer!
        </p>
        <p>
            Curious? Feel free to have a look around.
        </p>
    </main>
</div>

<?php $this->end(); ?>
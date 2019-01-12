<?php

$pageNumber = explode('/', ltrim($_SERVER['PATH_INFO'], '/'))[2];

$artists = array();

if ($pageNumber == 1) {
    $artists = array('Chris Allen', 'Evolve', 'Fox & The Mayors', 'Gare du Nord', 'Gumbo Kings', 'Han Bennink');
} elseif ($pageNumber == 2) {
    $artists = array('Jonna Fraser', 'Lilith Merlot', 'Myles Sanko', 'Ntjam Rosie', 'Rilan & The Bombardiers', 'Ruis Soundsystem');
} else {
    $artists = array('Jonna Fraser', 'Lilith Merlot', 'Myles Sanko', 'Ntjam Rosie', 'Rilan & The Bombardiers', 'Ruis Soundsystem');
}

?>

<?php $this->insert('Jazz/JazzSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/JazzCss.php" ><!-- Jazz CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image j-bg">
    <?= $this->content('subnav'); ?>

    <main class="j-content text-center">
        <h1>Live on stage</h1>
        <section class="row">
            <?php

            for ($i = 0; $i <= 2; $i++) {
                echo("
                    <section class=\"col-sm\">
                        <a class=\"j-artist-link\" href=\"\">
                            <figure class=\"j-artist\">
                                <img src=\"" . PROOT . "Public/Images/Jazz/Artists/" . str_replace(' ', '', $artists[$i]) . ".jpg\" alt=\"$artists[$i]\">
                                <figcaption>$artists[$i]</figcaption>
                            </figure>
                        </a>
                    </section>
                ");
            }

            ?>
        </section>
        <section class="row">
            <?php

            for ($i = 3; $i <= 5; $i++) {
                echo("
                    <section class=\"col-sm\">
                        <a class=\"j-artist-link\" href=\"\">
                            <figure class=\"j-artist\">
                                <img src=\"" . PROOT . "Public/Images/Jazz/Artists/" . str_replace(' ', '', $artists[$i]) . ".jpg\" alt=\"$artists[$i]\">
                                <figcaption>$artists[$i]</figcaption>
                            </figure>
                        </a>
                    </section>
                ");
            }

            ?>
        </section>
        <section class="row">
            <ul class="j-artist-pag">
                <li><a href="<?php if($pageNumber - 1 >= 1){echo(PROOT . 'jazz/artists/' . ($pageNumber - 1));}else{echo(PROOT . 'jazz/artists/1');} ?>"><</a></li>
                <li><a class="<?php if($pageNumber == 1){echo('j-artist-pag-active');} ?>" href="<?= PROOT ?>jazz/artists/1">1</a></li>
                <li><a class="<?php if($pageNumber == 2){echo('j-artist-pag-active');} ?>" href="<?= PROOT ?>jazz/artists/2">2</a></li>
                <li><a class="<?php if($pageNumber == 3){echo('j-artist-pag-active');} ?>" href="<?= PROOT ?>jazz/artists/3">3</a></li>
                <li><a href="<?php if($pageNumber + 1 <= 3){echo(PROOT . 'jazz/artists/' . ($pageNumber + 1));}else{echo(PROOT . 'jazz/artists/3');} ?>">></a></li>
            </ul>
        </section>
    </main>
</div>

<?php $this->end(); ?><!-- end body -->
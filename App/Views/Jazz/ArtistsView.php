<?php

//$artists = array();
//
//if ($this->pageNumber == 1) {
//    $artists = array('Chris Alain', 'Evolve', 'Fox & The Mayors', 'Gare du Nord', 'Gumbo Kings', 'Han Bennink');
//} elseif ($this->pageNumber == 2) {
//    $artists = array('Jonna Fraser', 'Lilith Merlot', 'Myles Sanko', 'Ntjam Rosie', 'Rilan & The Bombardiers', 'Ruis Soundsystem');
//} elseif ($this->pageNumber == 3) {
//    $artists = array('Soul Six', 'The Family XL', 'The Nordanians', 'Tom Thomson', 'Uncle Sue', 'Wicked Jazz Sounds');
//}

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
                                <img src=\"" . PROOT . "Public/Images/Jazz/Artists/" . $this->artistIds[$i] . ".jpg\" alt=\"" . $this->artists[$i] . "\">
                                <figcaption>" . $this->artists[$i] . "</figcaption>
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
                                <img src=\"" . PROOT . "Public/Images/Jazz/Artists/" . $this->artistIds[$i] . ".jpg\" alt=\"" . $this->artists[$i] . "\">
                                <figcaption>" . $this->artists[$i] . "</figcaption>
                            </figure>
                        </a>
                    </section>
                ");
            }

            ?>
        </section>
        <section class="row">
            <ul class="j-artist-pag">
                <li><a href="<?php if($this->pageNumber - 1 >= 1){echo(PROOT . 'jazz/artists/' . ($this->pageNumber - 1));}else{echo(PROOT . 'jazz/artists/1');} ?>"><</a></li>
                <li><a class="<?php if($this->pageNumber == 1){echo('j-artist-pag-active');} ?>" href="<?= PROOT ?>jazz/artists/1">1</a></li>
                <li><a class="<?php if($this->pageNumber == 2){echo('j-artist-pag-active');} ?>" href="<?= PROOT ?>jazz/artists/2">2</a></li>
                <li><a class="<?php if($this->pageNumber == 3){echo('j-artist-pag-active');} ?>" href="<?= PROOT ?>jazz/artists/3">3</a></li>
                <li><a href="<?php if($this->pageNumber + 1 <= 3){echo(PROOT . 'jazz/artists/' . ($this->pageNumber + 1));}else{echo(PROOT . 'jazz/artists/3');} ?>">></a></li>
            </ul>
        </section>
    </main>
</div>

<?php $this->end(); ?><!-- end body -->
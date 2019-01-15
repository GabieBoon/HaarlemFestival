<?php

// converts '<Name>, <Address>, <City>' to a URI for Google Maps
function encodeURIComponent($str) {
    $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
    return strtr(rawurlencode($str), $revert);
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
        <h1>Performance venues</h1>
        <div class="row">
            <div class="col">
                <h2>Patronaat</h2>
                <address class="row">
                    <div class="col">
                        Address:<br>
                        Zipcode:<br>
                        City:<br>
                        E-mail:<br>
                        Phone (office):<br>
                        Phone (cash desk/info):
                    </div>
                    <div class="col">
                        Zijlsingel 2<br>
                        2013 DN<br>
                        Haarlem<br>
                        <a href="mailto:info@patronaat.nl">info@patronaat.nl</a><br>
                        <a href="tel:023-5175850">023 - 517 58 50</a><br>
                        <a href="tel:023-5175858">023 - 517 58 58</a>
                    </div>
                </address>
                <!-- Google Maps embed for Patronaat -->
                <iframe src="https://www.google.com/maps?&amp;q=<?= encodeURIComponent('Patronaat, Zijlsingel 2, Haarlem') ?>&amp;output=embed"
                        width="560" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col">
                <h2>Grote Markt</h2>
                <!-- Google Maps embed for Grote Markt -->
                <iframe src="https://www.google.com/maps?&amp;q=<?= encodeURIComponent('Grote Markt, Grote Markt, Haarlem') ?>&amp;output=embed"
                        width="560" height="306" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </main>
</div>
<!-- < ?= $this->getHeaderColour(); ?> -->

<?php $this->end(); ?><!-- end body -->
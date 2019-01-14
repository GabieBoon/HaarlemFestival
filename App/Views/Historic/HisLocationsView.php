<?php $this->insert('Historic/Includes/HistoricSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

<link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" ><!-- Historic CSS -->

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

<div class="background-image">
<?= $this->content('hissubnav'); ?>
    <section class="Home1">

        <div class="container1">

        <p class="topleft">
            Venues to visit are:<br/>
            <br/>

            1. Church of St. Bavo  (Break location)&nbsp;&nbsp; <a href="https://nl.wikipedia.org/wiki/Grote_of_Sint-Bavokerk">more info</a><br/><br/>

            2. Grote Markt &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Grote_Markt_(Haarlem)">more info</a><br/><br/>

            3. De Hallen &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Hal_(Frans_Hals_Museum)">more info</a><br/><br/>
        </p>

        <img class="img3" src="<?= PROOT ?>public/images/Historic/Bavo.jpg" alt="test">

        <p class="middleright">
            4. Proveniershof &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Proveniershof">more info</a><br/><br/>

            5. Jopenkerk &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Brouwerij_Jopenkerk">more info</a><br/><br/>

            6. Waalse Kerk Haarlem &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Waalse_Kerk_(Haarlem)">more info</a><br/>
        </p>
        <img class="img4" src="<?= PROOT ?>public/images/Historic/jopenkerk.jpg" alt="test">


        <p class="bottemleft">
            7. Molen de Adriaan &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/De_Adriaan_(Haarlem)">more info</a><br/><br/>

            8. Amsterdamse Poort &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Amsterdamse_Poort_(Haarlem)">more info</a><br/><br/>

            9. Hof van Bakenes &nbsp;&nbsp;<a href="https://nl.wikipedia.org/wiki/Hofje_van_Bakenes">more info</a><br/>
        </p>
        <img class="img5" src="<?= PROOT ?>public/images/Historic/molen_de_adriaan.png" alt="test">


        </div>

    </section>




<?php $this->end(); ?>
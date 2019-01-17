
<?php $this->insert('Historic/Includes/HistoricSubnav'); ?>

<?php $this->start('head'); ?><!-- start head -->

    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" >
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/ScheduleCss.css" >

<?= $this->getBgImage(); ?><!-- get backgroundImage //if one is set -->

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

    <div class="background-image">
<?= $this->content('hissubnav'); ?>
        <section class="hisSchedeule">

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-26-tab" data-toggle="tab" href="#nav-26" role="tab" aria-controls="nav-26" aria-selected="true">26</a>
                    <a class="nav-item nav-link" id="nav-27-tab" data-toggle="tab" href="#nav-27" role="tab" aria-controls="nav-27" aria-selected="false">27</a>
                    <a class="nav-item nav-link" id="nav-28-tab" data-toggle="tab" href="#nav-28" role="tab" aria-controls="nav-28" aria-selected="false">28</a>
                    <a class="nav-item nav-link" id="nav-29-tab" data-toggle="tab" href="#nav-29" role="tab" aria-controls="nav-29" aria-selected="false">29</a>
                </div>
            </nav>

            <div class="hisSchedeule1">

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab">

                    <table>
                        <table class="HistoricTable" ><?= $this->table->generateTable(26,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab">

                    <table>
                        <table class="HistoricTable"><?= $this->table->generateTable(27,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab">

                    <table>
                        <table class="HistoricTable"><?= $this->table->generateTable(28,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-29" role="tabpanel" aria-labelledby="nav-29-tab">

                    <table>
                        <table class="HistoricTable"><?= $this->table->generateTable(29,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
            </div>
        </div>

        </section>

        <section class="Home1">

            <h1 class="titel1"> Information: </h1>

            <p class="endtekst">
            Duration of this walking tour will be approx. 2,5 hours
            (with a 15-minute break with refreshments). The location for the break is the Jopen Kerk.
            There will be several departures a day. The tour starts near the ‘Church of St. Bavo’,
            ‘Grote Markt’ in the centre of Haarlem. A giant flag marked ‘Haarlem Historic’ will mark
            the exact starting location.Due to the nature of this walk participants must be a minimum
            of 12 years old and no strollers are allowed. Groups will consist of 12 participants + 1 guide.
            </p>

            <a role="button" href=""></a>
        </section>




<?php $this->end(); ?>
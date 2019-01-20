
<?php $this->insert('Historic/Includes/HistoricSubnav'); ?>


<?php $this->start('head'); ?><!-- start head -->

    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/HistoricCss.css" >
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/ScheduleCss.css" >

<?= $this->getBgImage(); ?>
<script src="<?= PROOT ?>Public/JavaScripts/JQuerySchedule.js"></script>

<?php $this->end(); ?><!-- end head -->

<?php $this->start('body'); ?><!-- start body -->

    <div class="background-image">
<?= $this->content('hissubnav'); ?>
        <section class="hisSchedeulenav">

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-26-tab" data-toggle="tab" href="#nav-26" role="tab" aria-controls="nav-26" aria-selected="true">26</a>
                    <a class="nav-item nav-link" id="nav-27-tab" data-toggle="tab" href="#nav-27" role="tab" aria-controls="nav-27" aria-selected="false">27</a>
                    <a class="nav-item nav-link" id="nav-28-tab" data-toggle="tab" href="#nav-28" role="tab" aria-controls="nav-28" aria-selected="false">28</a>
                    <a class="nav-item nav-link" id="nav-29-tab" data-toggle="tab" href="#nav-29" role="tab" aria-controls="nav-29" aria-selected="false">29</a>
                </div>
            </nav>

        </section>

            <div class="hisSchedeule1">

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab">

                    <table>
                        <table class="HistoricTable" ><?= $this->table->generateTable(26,8,21, "Historic", true, false, $this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab">

                    <table>
                        <table class="HistoricTable"><?= $this->table->generateTable(27,8,21, "Historic", true, false, $this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab">

                    <table>
                        <table class="HistoricTable"><?= $this->table->generateTable(28,8,21, "Historic", true, false, $this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
                <div class="tab-pane fade" id="nav-29" role="tabpanel" aria-labelledby="nav-29-tab">

                    <table>
                        <table class="HistoricTable"><?= $this->table->generateTable(29,8,21, "Historic", true, false, $this->languages, $this->historicTickets) ?> </table>
                    </table>

                </div>
            </div>

            </div>

        <section class="Home1">

            <h1 class="titel1"> <?= $this->ContentModel->Schedule->title ?> </h1>

            <p class="endtekst">
                <?= $this->ContentModel->Schedule->text ?>

            </p>

            <a role="button" href=""></a>
        </section>




<?php $this->end(); ?>
 <!-- head  -->
<?php $this->start('head'); ?>

    <!-- Schedule CSS -->
    <link rel="stylesheet" type="text/css" href= "<?= PROOT ?>Public/StyleSheets/ScheduleCss.css" >

<?= $this->getBgImage(); ?>

    <!-- jQuery scripts -->
    <script src="<?= PROOT ?>Public/JavaScripts/JQuerySchedule.js"></script>


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('body'); ?>

    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-26-tab" data-toggle="tab" href="#nav-26" role="tab" aria-controls="nav-26" aria-selected="true">26</a>
            <a class="nav-item nav-link" id="nav-27-tab" data-toggle="tab" href="#nav-27" role="tab" aria-controls="nav-27" aria-selected="false">27</a>
            <a class="nav-item nav-link" id="nav-28-tab" data-toggle="tab" href="#nav-28" role="tab" aria-controls="nav-28" aria-selected="false">28</a>
            <a class="nav-item nav-link" id="nav-29-tab" data-toggle="tab" href="#nav-29" role="tab" aria-controls="nav-29" aria-selected="false">29</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab">

            <table>
                <table><?= $this->table->generateTable(26,10,27, "" , true, true) ?> </table>
                <table><?= $this->table->generateTable(26,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table><?= $this->table->generateTable(26,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table><?= $this->table->generateTable(26,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table><?= $this->table->generateTable(26,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
            </table>

        </div>
        <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab">

            <table>
                <table><?= $this->table->generateTable(27,10,27, "" , true, true) ?> </table>
                <table><?= $this->table->generateTable(27,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table><?= $this->table->generateTable(27,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table><?= $this->table->generateTable(27,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table><?= $this->table->generateTable(27,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
            </table>

        </div>
        <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab">

            <table>
                <table><?= $this->table->generateTable(28,10,27, "" , true, true) ?> </table>
                <table><?= $this->table->generateTable(28,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table><?= $this->table->generateTable(28,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table><?= $this->table->generateTable(28,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table><?= $this->table->generateTable(28,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
            </table>

        </div>
        <div class="tab-pane fade" id="nav-29" role="tabpanel" aria-labelledby="nav-29-tab">

            <table>
                <table><?= $this->table->generateTable(29,10,27, "" , true, true) ?> </table>
                <table><?= $this->table->generateTable(29,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table><?= $this->table->generateTable(29,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table><?= $this->table->generateTable(29,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table><?= $this->table->generateTable(29,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>
            </table>

        </div>
    </div>

<?php $this->end(); ?>
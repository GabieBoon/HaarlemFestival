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


 <main class="background-image">

    <div class="toolbar">


     <form>
        <h4> Jazz <input checked="true" type="checkbox" class="JazzCheckBox"> </h4>
         <h4> Dance <input checked="true" type="checkbox" class="DanceCheckBox"> </h4>
        <h4> Food <input checked="true" type="checkbox" class="FoodCheckBox"> </h4>
         <h4> Historic <input checked="true" type="checkbox" class="HistoricCheckBox"> </h4>
    </form>

    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-26-tab" data-toggle="tab" href="#nav-26" role="tab" aria-controls="nav-26" aria-selected="true">26</a>
            <a class="nav-item nav-link" id="nav-27-tab" data-toggle="tab" href="#nav-27" role="tab" aria-controls="nav-27" aria-selected="false">27</a>
            <a class="nav-item nav-link" id="nav-28-tab" data-toggle="tab" href="#nav-28" role="tab" aria-controls="nav-28" aria-selected="false">28</a>
            <a class="nav-item nav-link" id="nav-29-tab" data-toggle="tab" href="#nav-29" role="tab" aria-controls="nav-29" aria-selected="false">29</a>
        </div>
    </nav>

    </div>


    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab">

                <table><?= $this->table->generateTable(26,10,27, "" , true, true) ?> </table>
                <table class="DanceTable" ><?= $this->table->generateTable(26,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table class="JazzTable" ><?= $this->table->generateTable(26,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table class="FoodTable" ><?= $this->table->generateTable(26,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table class="HistoricTable" ><?= $this->table->generateTable(26,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>

        </div>
        <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab">

                <table><?= $this->table->generateTable(27,10,27, "" , true, true) ?> </table>
                <table class="DanceTable"><?= $this->table->generateTable(27,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table class="JazzTable"><?= $this->table->generateTable(27,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table class="FoodTable"><?= $this->table->generateTable(27,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table class="HistoricTable"><?= $this->table->generateTable(27,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>

        </div>
        <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab">

                <table><?= $this->table->generateTable(28,10,27, "" , true, true) ?> </table>
                <table class="DanceTable"><?= $this->table->generateTable(28,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table class="JazzTable"><?= $this->table->generateTable(28,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table class="FoodTable"><?= $this->table->generateTable(28,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table class="HistoricTable"><?= $this->table->generateTable(28,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>

        </div>
        <div class="tab-pane fade" id="nav-29" role="tabpanel" aria-labelledby="nav-29-tab">

                <table><?= $this->table->generateTable(29,10,27, "" , true, true) ?> </table>
                <table class="DanceTable"><?= $this->table->generateTable(29,10,27, "Dance", false, true, $this->danceLocations, $this->danceTickets) ?> </table>
                <table class="JazzTable"><?= $this->table->generateTable(29,10,27, "Jazz", false, true, $this->jazzLocations, $this->jazzTickets) ?> </table>
                <table class="FoodTable"><?= $this->table->generateTable(29,10,27, "Food", false, true, $this->restaurants, $this->foodTickets) ?> </table>
                <table class="HistoricTable"><?= $this->table->generateTable(29,10,27, "Historic", false, true,$this->languages, $this->historicTickets) ?> </table>

        </div>
    </div>

     <span class="clearfix"></span>

 </main>

<?php $this->end(); ?>
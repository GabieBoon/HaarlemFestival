<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('menu'); ?>

<?php
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;

?>



<!-- Menu (Group) -->
<nav >
    <ul>
        <li class="menuItem currentPage"><i class="fas fa-tachometer-alt"></i>Dashboard</li>
        <li class="menuItem">Statistics
            <ul>
                <li class="subMenuItem">Dance</li>
                <li class="subMenuItem">Jazz</li>
                <li class="subMenuItem">Food</li>
                <li class="subMenuItem">Historic</li>
            </ul>
        </li>
        <li class="menuItem">Edit Timetable
            <ul>
                <li class="subMenuItem">Dance</li>
                <li class="subMenuItem">Jazz</li>
                <li class="subMenuItem">Food</li>
                <li class="subMenuItem">Historic</li>
            </ul>
        </li>
        <li class="menuItem">Edit Event Pages
            <ul>
                <li class="subMenuItem">Dance</li>
                <li class="subMenuItem">Jazz</li>
                <li class="subMenuItem">Food</li>
                <li class="subMenuItem">Historic</li>
            </ul>
        </li>
        <li class="menuItem">ManageUsers</li>
        <li class="menuItem">Settings</li>
    </ul>
</nav>




<div style="display:none; "id="u415" class="ax_default" data-label="Menu" data-left="0" data-top="322" data-width="200" data-height="300">

    <!-- Unnamed (ManageUsers) -->

    <!-- ManageUsers (Group) -->
    <div style="display:none; "id="u417" class="ax_default" data-label="ManageUsers" data-left="0" data-top="0" data-width="200" data-height="60">

        <!-- Unnamed (Rectangle) -->
        <div id="u418" class="menuSpacer ax_default box_1">
            <div id="u418_div"></div>
        </div>

        <!-- Text (Rectangle) -->
        <div id="u419" class="ax_default paragraph" data-label="Text" style="cursor: pointer;">
            <div id="u419_div" tabindex="0"></div>
            <div id="u419_text" class="text " style="top: 15px; transform-origin: 50px 10px 0px;">
                <p id="cache28"><span id="cache29">manage users</span></p>
            </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u420" class="ax_default image" style="cursor: pointer;">
            <img id="u420_img" class="img " src="images/administrator_dashboard/u420.png" tabindex="0">
        </div>
    </div>

    <!-- Unnamed (EditEventPages) -->

    <!-- EditEventPages (Group) -->
    <div id="u422" class="ax_default" data-label="EditEventPages" data-left="0" data-top="0" data-width="200"
        data-height="60">

        <!-- subItems (Group) -->
        <div id="u423" class="ax_default" data-label="subItems" data-left="0" data-top="0" data-width="0" data-height="0">

            <!-- Unnamed (Repeater) -->
            <div id="u424" class="ax_default ax_default_hidden" style="display:none; visibility: hidden">
                <script id="u424_script" type="axure-repeater-template">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u425" class="ax_default paragraph u425" data-label="subMenuItem">
                      <div id="u425_div" class="u425_div"></div>
                      <div id="u425_text" class="text u425_text">
                        <p><span>subMenuItem</span></p>
                      </div>
                    </div>
                  </script>
                <div id="u424-1" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u425-1" class="ax_default paragraph u425 selected" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u425-1_div" class="u425_div selected" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u425-1_text" class="text u425_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache12"><span id="cache13">Dance</span></p>
                        </div>
                    </div>
                </div>
                <div id="u424-2" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u425-2" class="ax_default paragraph u425" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u425-2_div" class="u425_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u425-2_text" class="text u425_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache14"><span id="cache15">Jazz</span></p>
                        </div>
                    </div>
                </div>
                <div id="u424-3" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u425-3" class="ax_default paragraph u425" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u425-3_div" class="u425_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u425-3_text" class="text u425_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache16"><span id="cache17">Historic</span></p>
                        </div>
                    </div>
                </div>
                <div id="u424-4" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u425-4" class="ax_default paragraph u425" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u425-4_div" class="u425_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u425-4_text" class="text u425_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache18"><span id="cache19">Food</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u426" class="menuSpacer ax_default box_1">
            <div id="u426_div"></div>
        </div>

        <!-- Text (Rectangle) -->
        <div id="u427" class="ax_default paragraph" data-label="Text" style="cursor: pointer;">
            <div id="u427_div" tabindex="0"></div>
            <div id="u427_text" class="text " style="top: 15px; transform-origin: 50px 10px 0px;">
                <p id="cache34"><span id="cache35">Edit Event pages</span></p>
            </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u428" class="ax_default image" style="cursor: pointer;">
            <img id="u428_img" class="img " src="images/administrator_dashboard/u428.png" tabindex="0">
        </div>
    </div>

    <!-- Unnamed (EditTimetable) -->

    <!-- EditTimetable (Group) -->
    <div id="u430" class="ax_default" data-label="EditTimetable" data-left="0" data-top="0" data-width="200"
        data-height="60">

        <!-- subItems (Group) -->
        <div id="u431" class="ax_default" data-label="subItems" data-left="0" data-top="0" data-width="0" data-height="0">

            <!-- Unnamed (Repeater) -->
            <div id="u432" class="ax_default ax_default_hidden" style="display:none; visibility: hidden">
                <script id="u432_script" type="axure-repeater-template">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u433" class="ax_default paragraph u433" data-label="subMenuItem">
                      <div id="u433_div" class="u433_div"></div>
                      <div id="u433_text" class="text u433_text">
                        <p><span>subMenuItem</span></p>
                      </div>
                    </div>
                  </script>
                <div id="u432-1" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u433-1" class="ax_default paragraph u433 selected" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u433-1_div" class="u433_div selected" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u433-1_text" class="text u433_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache20"><span id="cache21">Dance</span></p>
                        </div>
                    </div>
                </div>
                <div id="u432-2" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u433-2" class="ax_default paragraph u433" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u433-2_div" class="u433_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u433-2_text" class="text u433_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache22"><span id="cache23">Jazz</span></p>
                        </div>
                    </div>
                </div>
                <div id="u432-3" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u433-3" class="ax_default paragraph u433" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u433-3_div" class="u433_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u433-3_text" class="text u433_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache24"><span id="cache25">Historic</span></p>
                        </div>
                    </div>
                </div>
                <div id="u432-4" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u433-4" class="ax_default paragraph u433" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u433-4_div" class="u433_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u433-4_text" class="text u433_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p id="cache26"><span id="cache27">Food</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u434" class="menuSpacer ax_default box_1">
            <div id="u434_div"></div>
        </div>

        <!-- Text (Rectangle) -->
        <div id="u435" class="ax_default paragraph" data-label="Text" style="cursor: pointer;">
            <div id="u435_div" tabindex="0"></div>
            <div id="u435_text" class="text " style="top: 15px; transform-origin: 50px 10px 0px;">
                <p id="cache32"><span id="cache33">Edit Timetable</span></p>
            </div>
        </div>

        <!-- Unnamed (SVG) -->
        <div id="u436" class="ax_default image" style="cursor: pointer;">
            <img id="u436_img" class="img " src="images/administrator_dashboard/u436.svg" tabindex="0">
        </div>
    </div>

    <!-- Unnamed (Statistics) -->

    <!-- Statistics (Group) -->
    <div id="u438" class="ax_default" data-label="Statistics" data-left="0" data-top="0" data-width="200" data-height="60">

        <!-- subItems (Group) -->
        <div id="u439" class="ax_default" data-label="subItems" data-left="0" data-top="0" data-width="0" data-height="0">

            <!-- Unnamed (Repeater) -->
            <div id="u440" class="ax_default ax_default_hidden" style="display:none; visibility: hidden">
                <script id="u440_script" type="axure-repeater-template">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u441" class="ax_default paragraph u441" data-label="subMenuItem">
                      <div id="u441_div" class="u441_div"></div>
                      <div id="u441_text" class="text u441_text">
                        <p><span>subMenuItem</span></p>
                      </div>
                    </div>
                  </script>
                <div id="u440-1" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u441-1" class="ax_default paragraph u441" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u441-1_div" class="u441_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u441-1_text" class="text u441_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p><span>Dance</span></p>
                        </div>
                    </div>
                </div>
                <div id="u440-2" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u441-2" class="ax_default paragraph u441" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u441-2_div" class="u441_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u441-2_text" class="text u441_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p><span>Jazz</span></p>
                        </div>
                    </div>
                </div>
                <div id="u440-3" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u441-3" class="ax_default paragraph u441" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u441-3_div" class="u441_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u441-3_text" class="text u441_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p><span>Historic</span></p>
                        </div>
                    </div>
                </div>
                <div id="u440-4" style="width: 200px; height: 30px;">

                    <!-- subMenuItem (Rectangle) -->
                    <div id="u441-4" class="ax_default paragraph u441" data-label="subMenuItem" style="width: 200px; height: 30px; left: 0px; top: 0px; visibility: inherit; cursor: pointer;">
                        <div id="u441-4_div" class="u441_div" style="width: 200px; height: 30px;visibility: inherit"></div>
                        <div id="u441-4_text" class="text u441_text" style="position: absolute;left: 50px;top: 6px;width: 150px;visibility: inherit">
                            <p><span>Food</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u442" class="menuSpacer ax_default box_1">
            <div id="u442_div"></div>
        </div>

        <!-- Text (Rectangle) -->
        <div id="u443" class="ax_default paragraph" data-label="Text" style="cursor: pointer;">
            <div id="u443_div" tabindex="0"></div>
            <div id="u443_text" class="text " style="top: 15px; transform-origin: 50px 10px 0px;">
                <p id="cache30"><span id="cache31">Statistics</span></p>
            </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u444" class="ax_default image" style="cursor: pointer;">
            <img id="u444_img" class="img " src="images/administrator_dashboard/u444.png" tabindex="0">
        </div>
    </div>

    <!-- Unnamed (Dashboard) -->

    <!-- Dashboard (Group) -->
    <div id="u446" class="ax_default" data-label="Dashboard" data-left="0" data-top="0" data-width="200" data-height="60">

        <!-- Unnamed (Rectangle) -->
        <div id="u447" class="menuSpacer ax_default box_1">
            <div id="u447_div"></div>
        </div>

        <!-- Text (Rectangle) -->
        <div id="u448" class="ax_default paragraph selected" data-label="Text" style="cursor: pointer;">
            <div id="u448_div" class="selected" tabindex="0"></div>
            <div id="u448_text" class="text " style="top: 15px; transform-origin: 50px 10px 0px;">
                <p id="cache10"><span id="cache11">Dashboard</span></p>
            </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u449" class="ax_default image" style="cursor: pointer;">
            <img id="u449_img" class="img " src="images/administrator_dashboard/u449.png" tabindex="0">
        </div>
    </div>
</div>
<?php $this->end(); ?>
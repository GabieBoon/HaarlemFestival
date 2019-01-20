<?php


function showEditTimetableWidget(string $event, $args = [])
{

    foreach ($args[0] as $date => $dateDataArray) {

        ?>
<article class="timetableEditPage widget">
    <header>
        <h1>
            <?= $date ?>
        </h1>
    </header>
    <section class="wrapper-modal-editor">

            <div class="block my-4">
                <div class="d-flex justify-content-center">
                    <p class="h5 text-primary createShowP">0 row selected</p>
                </div>
            </div>
            <!-- Toevoeg knop -->
            <div class="row d-flex justify-content-center modalWrapper">
                <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Add new form</h4>
                                <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">

                                <?php foreach ($dateDataArray[0] as $key => $value) { ?>
                                    
                                    <div class="md-form mb-5">
                                        <input type="text" id="input<?= $key ?>" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="input<?= $key ?>"><?= $key ?></label>
                                    </div>

                                <?php } ?>    

                            </div>
                            <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                                <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Add
                                    form
                                    <i class="fas fa-paper-plane-o ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Toevoeg knop -->
                <!-- Edit knop -->
                <div class="text-center">
                    <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd">Add<i
                            class="fas fa-plus-square ml-1"></i></a>
                </div>

                <div class="modal fade modalEditClass" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
                                <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">

                                <?php
                                foreach ($dateDataArray[0] as $key => $value) {
                                    ?>

                                    <div class="md-form mb-5">
                                        <input type="text" id="form<?= $key ?>Edit" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="form<?= $key ?>Edit"><?= $key?></label>
                                    </div>

                                    <?php
                                }
                                ?>
                        
                            </div>
                            <div class="modal-footer d-flex justify-content-center editInsideWrapper">
                                <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
                                    form
                                    <i class="fas fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center buttonEditWrapper">
                    <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit">Edit
                    <i class="fas fa-pencil-square-o ml-1"></i></a>
                </div>
                <!-- /Edit knop -->
                <!-- Delete knop -->
                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
                                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <p class="text-center h4">Are you sure to delete selected row?</p>

                            </div>
                            <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
                                <button type="button" class="btn btn-danger btnYesClass" id="btnYes" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-primary btnNoClass" id="btnNo" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled
                        data-target="#modalDelete" disabled>Delete<i class="fas fa-times ml-1"></i></a>
                </div>
            </div>
            <!-- /Delete knop -->
            <!-- tabellen -->
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <?php
                        foreach ($dateDataArray[0] as $key => $value) {
                            echo ('<th class="th-sm">' . $key . '</th>');
                        }
                        echo ('<th class="th-sm">Select</th>');
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = count($dateDataArray);
                    for ($i = 0; $i < $count; $i++) {
                        echo('<tr>');

                            foreach ($dateDataArray[$i] as $key => $value) {
                                echo ('<td>'. $value . '</td>');
                            }
                        ?>
                        <td>
                        

  <div class="input-group-append">
 
    <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="">Action</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
                     <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" >
                            <span class="custom-control-indicator"></span>
                        </label>
                        </div> -->
                        </td>

                         <?php   
                        echo('</tr>');
                    }
                    ?>
                </tbody>
            </table>

            <script>$('#dtBasicExample').mdbEditor();
                $('.dataTables_length').addClass('bs-select');</script>




    </section>
</article>
<?php

}

    // foreach ($contentObj as $sectionTitle => $sectionObj) {
    //     ? >

    //     <article class="contentEditPage widget">
    //         <header>
    //             <h1>
    //                 <?= $sectionTitle ? >
    //             </h1>
    //         </header>
    //         <section class="varietyItem">
                
    //             <form action="<?= PROOT ? >cms/edit/event/<?= $event ? >" method="post">
    //             <?php
    //             foreach ($sectionObj as $varietyTitle => $varietyObj) {
    //                 $uniqId = uniqid();
    //                 $inputId = $varietyTitle . '_' . $uniqId; //bc i need them to be seperate
    //                 echo ('<section class="formItem">');
    //                 echo '<label for="' . $inputId . '">' . $varietyTitle . '</label>';
    //                 if ($varietyObj->type === "TEXT") {
    //                     echo '<input type="text" id="' . $inputId . '" name="' . $varietyTitle . '" value="' . $varietyObj->content . '">';
    //                 } elseif ($varietyObj->type === "BIGTEXT") {
    //                     showWysiwygEditor($uniqId, $inputId, $varietyObj->content);
    //                 } elseif ($varietyObj->type === "IMG") {
    //                         //SHOW SOMETHING LIKE AN UPLOAD BOX AND SHOW IMAGE
    //                 } elseif ($varietyObj->type === "COLOR") {
    //                         //SHOW SOMETHING LIKE AN COLOR PICKER
    //                 } else {
    //                     echo ('<p>Oops, it looks like there is no editable control for: ' . $varietyObj->type . '. Sorry!</p>');
    //                 }
    //                 echo ('</section>');
    //             }
    //             ? >
    //             <input id="submit-form" class="d-none" type="submit">
    //         </form>
    //         </section>
    //         <footer>
    //             <label for="submit-form" class="btn btn-primary submit">Save Changes</label>
    //             <?php //SHOW A LAST EDITED DATE AND TIME FROM DATABASE? >
    //         </footer>
    //     </article>
    //     <?php 
    // }
}


function showEditTimetableHeader(string $uniqId, string $inputId, string $text)
{
    $wysiwygEditorId = 'editor_' . $uniqId; ?>

<div class="wysiwyg-editor">
    <!-- <label for="about">About me</label> -->
    <input id="<?= $inputId ?>" type="hidden">

    <div id="<?= $wysiwygEditorId ?>">
        <?= $text ?>
    </div>

    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill(<?= "'#" . $wysiwygEditorId . "'" ?>, {
            theme: 'snow'
        });


    </script>
</div>
<?php 
//     var form = document.querySelector('form');
// form.onsubmit = function() {
//   // Populate hidden form on submit
//   var about = document.querySelector('input[name=about]');
//   about.value = JSON.stringify(quill.getContents());
}

function showEditTimetableRow(string $uniqId, string $inputId, string $text)
{
    $wysiwygEditorId = 'editor_' . $uniqId; ?>

<div class="wysiwyg-editor">
    <!-- <label for="about">About me</label> -->
    <input id="<?= $inputId ?>" type="hidden">

    <div id="<?= $wysiwygEditorId ?>">
        <?= $text ?>
    </div>

    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill(<?= "'#" . $wysiwygEditorId . "'" ?>, {
            theme: 'snow'
        });


    </script>
</div>
<?php 
//     var form = document.querySelector('form');
// form.onsubmit = function() {
//   // Populate hidden form on submit
//   var about = document.querySelector('input[name=about]');
//   about.value = JSON.stringify(quill.getContents());
}
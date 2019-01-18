<?php


function showEditingControls($contentObj)
{
    foreach ($contentObj as $sectionTitle => $sectionObj) {
        ?>

        <div class="widget">
        <h1><?= $sectionTitle ?></h1>
        <?php
        foreach ($sectionObj as $varietyTitle => $varietyObj) {
            echo '<h5>' . $varietyTitle . '</h5><div class="varietyItem">';
            if ($varietyObj->type === "TEXT") {
                //SHOW TEXTBOX
                
                echo '<input type="text" name="fname" value="' . $varietyObj->content . '">';
            } elseif ($varietyObj->type === "BIGTEXT") {
                showWysiwygEditor($varietyObj->content);
            } elseif ($varietyObj->type === "IMG") {
                //SHOW SOMETHING LIKE AN UPLOAD BOX AND SHOW IMAGE
            } elseif ($varietyObj->type === "COLOR") {
                //SHOW SOMETHING LIKE AN COLOR PICKER
            }
             
            // print_r($varietyObj);
             echo '</div>';
        }

        ?>
<div class="">
      <button class="btn btn-primary" type="submit">Save Profile</button>
    </div>
        </div>

        <?php

    }

}








function showWysiwygEditor(string $text)
{
    $widgetId = uniqid('editor_');
    ?>

<div class="wysiwyg-editor">
    <!-- <label for="about">About me</label> -->
    <input name="about" type="hidden">

    <div id="<?=$widgetId ?>">
        <?= $text ?>
</div>
</div>



<!-- Initialize Quill editor -->
<script>
    var quill = new Quill(<?= "'#" . $widgetId . "'" ?>, {
        theme: 'snow'
    });

//     var form = document.querySelector('form');
// form.onsubmit = function() {
//   // Populate hidden form on submit
//   var about = document.querySelector('input[name=about]');
//   about.value = JSON.stringify(quill.getContents());
</script>

<?php 

} 
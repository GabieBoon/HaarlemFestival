<?php


function showEditingControls(string $event, $contentObj)
{
    foreach ($contentObj as $sectionTitle => $sectionObj) {
        ?>

        <article class="contentEditPage widget">
            <header>
                <h1>
                    <?= $sectionTitle ?>
                </h1>
            </header>
            <section class="varietyItem">
                
                <form action="<?= PROOT ?>cms/edit/event/<?= $event ?>" method="post">
                <?php
                foreach ($sectionObj as $varietyTitle => $varietyObj) {
                    $uniqId = uniqid();
                    $inputId = $varietyTitle . '_' . $uniqId; //bc i need them to be seperate
                    echo ('<section class="formItem">');
                    echo '<label for="' . $inputId . '">' . $varietyTitle . '</label>';
                    if ($varietyObj->type === "TEXT") {
                        echo '<input type="text" id="' . $inputId . '" name="' . $varietyTitle . '" value="' . $varietyObj->content . '">';
                    } elseif ($varietyObj->type === "BIGTEXT") {
                        showWysiwygEditor($uniqId, $inputId, $varietyObj->content);
                    } elseif ($varietyObj->type === "IMG") {
                            //SHOW SOMETHING LIKE AN UPLOAD BOX AND SHOW IMAGE
                    } elseif ($varietyObj->type === "COLOR") {
                            //SHOW SOMETHING LIKE AN COLOR PICKER
                    } else {
                        echo('<p>Oops, it looks like there is no editable control for: ' . $varietyObj->type . '. Sorry!</p>');
                    }
                    echo ('</section>');
                }
                ?>
                <input id="submit-form" class="d-none" type="submit">
            </form>
            </section>
            <footer>
                <label for="submit-form" class="btn btn-primary submit">Save Changes</label>
                <?php //SHOW A LAST EDITED DATE AND TIME FROM DATABASE?>
            </footer>
        </article>
        <?php 
    }
}


function showWysiwygEditor(string $uniqId, string $inputId, string $text)
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
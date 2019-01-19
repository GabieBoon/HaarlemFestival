<div class="row ticket">
    <div class="col-5">Ticket</div>
    <div class="col-2">&euro; 0,00</div>
    <div class="col-1">
        <select name="amount" id="">
            <?php

            for ($i = 1; $i <= 10; $i++) {
                echo ("<option value=\"$i\">$i</option>");
            }

            ?>
        </select>
    </div>
    <div class="col-2">&euro; 0,00</div>
    <div class="col-2"><a href="" role="button" class="btn btn-primary">Remove ticket</a></div>
</div>
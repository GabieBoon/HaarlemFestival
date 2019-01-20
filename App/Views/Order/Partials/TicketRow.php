<div class="row ticket">
    <div class="col-7">
        <?php

        $weekdays = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

        $dayOfWeek = $weekdays[date('w', strtotime($ticket->startTime))];

        switch ($ticket->event) {
            case "Dance":
                if ($ticket->isAllAccessTicket) {
                    if ($ticket->price == 250) {
                        echo "Dance All-Access (Full Event)";
                    } else {
                        echo "Dance All-Access - " . $dayOfWeek . " " . date('m-d-Y', strtotime($ticket->startTime));
                    }
                } else {
                    echo $ticket->stageName . " - " . $dayOfWeek . " " . date('m-d-Y', strtotime($ticket->startTime)) .
                        " (" . date('H:i:s', strtotime($ticket->startTime)) . " - " .
                        date('H:i:s', strtotime($ticket->endTime)) . ") - " . $ticket->venue;
                }
                break;
            case "Jazz":
                if ($ticket->isAllAccessTicket) {
                    if ($ticket->price == 80) {
                        echo "Jazz All-Access (Full Event)";
                    } else {
                        echo "Jazz All-Access - " . $dayOfWeek . " " . date('m-d-Y', strtotime($ticket->startTime));
                    }
                } else {
                    echo $ticket->stageName . " - " . $dayOfWeek . " " . date('m-d-Y', strtotime($ticket->startTime)) .
                        " (" . date('H:i:s', strtotime($ticket->startTime)) . " - " .
                        date('H:i:s', strtotime($ticket->endTime)) . ") - " . $ticket->venue;
                }
                break;
            case "Food":
                // TODO: food ticket formatting
                break;
            case "Historic":
                if (false) { // TODO: family ticket dient nog apart aangegeven te worden
                    echo "Historic Tour (Family) - " . $dayOfWeek . " " . date('m-d-Y', strtotime($ticket->startTime)) .
                        " - " . $ticket->language;
                } else {
                    echo "Historic Tour - " . $dayOfWeek . " " . date('m-d-Y', strtotime($ticket->startTime)) .
                        " - " . $ticket->language;
                }
                break;
        }

        ?>
    </div>
    <div class="col-1">&euro; <?= $ticket->price ?></div>
    <div class="col-1">
        <select name="amount">
            <?php

            for ($i = 1; $i <= 10; $i++) {
                if ($i == $ticket->amount) {
                    echo ("<option value=\"$i\" selected>$i</option>");
                } else {
                    echo ("<option value=\"$i\">$i</option>");
                }
            }

            ?>
        </select>
    </div>
    <div class="col-1">&euro; <?= $ticket->price * $ticket->amount ?></div>
    <div class="col-2">
        <form action="<?= PROOT ?>cart/removeTicket/<?= $ticket->id ?>">
            <button class="btn btn-primary" type="submit">Remove ticket</button>
        </form>
    </div>
</div>
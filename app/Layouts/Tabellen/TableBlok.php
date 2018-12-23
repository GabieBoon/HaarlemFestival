<div class="PopupHideBorder">

    <div class="TableTicket <?=$this->event?>Ticket"  id="<?=$this->currentTicket->id?>"  style="width: <?=$ticketLength?>px">
        <?=$this->showTicket()?>
    </div>

    <div class="TicketPopup <?=$this->currentTicket->id?> <?=$this->event?>Ticket"  style="display: none">
        <form action="<?= PROOT ?>Cart/addTicket/<?=$this->currentTicket->id?>">
            <button type = "submit"> add ticket to cart</button>
        </form>
    </div>

</div>
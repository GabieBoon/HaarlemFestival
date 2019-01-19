<div >
    <p class="AllAccessText">All-Access ticket: <?=$startDate[2]?> tot <?=$endDate[2]?>  €<?=$ticket->price ?>

    <a class="btn btn-primary AllAccessButton" href="<?= PROOT .'Cart/addTicket/' . $ticket->id ?>" role="button" >add ticket to cart</a>
    </p>

</div>
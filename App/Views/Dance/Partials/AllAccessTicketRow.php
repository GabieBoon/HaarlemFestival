<div >
    <p class="AllAccessText">All-Access ticket: <?=$startDate[2]?> tot <?=$endDate[2]?>  €<?=$ticket->price ?>


    <form class="AllAccessButton"  action="<?= PROOT ?>Cart/addTicket/<?=$ticket->id?>">
        <button type = "submit"> add ticket to cart</button>
    </form>
    </p>

</div>
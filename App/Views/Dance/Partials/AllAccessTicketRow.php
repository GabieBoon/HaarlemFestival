<div>
    <p>All-Access ticket: <?=$startDate[2]?> tot <?=$endDate[2]?>  €<?=$ticket->price?>
        <form action="<?= PROOT ?>Cart/addTicket/<?=$ticket->id?>">
            <button type = "submit"> add ticket to cart</button>
        </form>
    </p>
</div>
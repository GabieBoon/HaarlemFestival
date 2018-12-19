<?php
header("Content-type: text/css; charset: UTF-8");


// main colors events
$foodColor = "#F0841B";
$danceColor = "#3083D0";
$jazzColor = "#440E62";
$historicColor = "#DB1F1F";
$scheduleColor = "#DCC500";
$cartColor = "#849A7D";
$activeColor = "#F0841B";

// header background color
$headerStandardColor = "#797979";
?>
header{
    background-color: <?php echo $activeColor?>;
    height:175px;
}

.nav-logo{
    width: 150px;
}

.hide{
    visibility: hidden;
    display: none;
}

.nav-wrapper {
    width:calc(100vw - 150px - 20px);
    float:right;
    height:50px;
    margin-top:50px;
}

.nav-wrapper ul{
    display:inline-block;
    padding-inline-start:0;
    margin-block-start: 0;
    margin-block-end: 0;
}

.nav-wrapper ul li{
    display: inline-block;
    list-style-type: none;
    margin: 0;
    width: auto;
    padding: 0;
    text-align: center;
}

.nav-wrapper ul li a{
    text-decoration: none;
    display: inline-block;
    background-color: white;
    margin-right: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: bold;
}

.nav-wrapper ul li .cart-icon{
    width:50px;
}

.nav-right{
    float: right;
    margin-right:50px;
}

.nav-left{
    float: left;
    margin-left: 10px;
}

.nav-btn a{
    width: 125px;
    border-style: solid;
    border-color:white;
}

.nav-btn a:hover{
    width: 125px;
    border-style: solid;
    border-color: white;
    box-shadow:  5px 5px white;
    color: white;
}

.dance-btn a{
    box-shadow:  5px 5px <?php echo $danceColor?>;
    color: #3083D0;
}

.dance-btn a:hover{
    background-color: <?php echo $danceColor?>;
}

.jazz-btn a{
    box-shadow:  5px 5px <?php echo $jazzColor?>;
    color: <?php echo $jazzColor?>;
}

.jazz-btn a:hover{
    background-color: <?php echo $jazzColor?>;
}

.historic-btn a{
    box-shadow:  5px 5px <?php echo $historicColor?>;
    color: <?php echo $historicColor?>;
}

.historic-btn a:hover{
    background-color: <?php echo $historicColor?>;
}

.food-btn a{
    box-shadow: 5px 5px <?php echo $foodColor?>;
    color: <?php echo $foodColor?>;
}

.food-btn a:hover{
    background-color: <?php echo $foodColor?>;
}

.schedule-btn a{
    box-shadow: 5px 5px <?php echo $scheduleColor?>;
    color: <?php echo $scheduleColor?>;
}

.schedule-btn a:hover{
    background-color: <?php echo $scheduleColor?>;
}

.cart-btn a{
    box-shadow: 5px 5px <?php echo $cartColor?>;
    color: <?php echo $cartColor?>;
    width: 50px;
}

.cart-btn a:hover{
    background-color: <?php echo $cartColor?>;
}

.language-selection {
    box-shadow: 5px 5px #A1A1A1;
    color: #A1A1A1;
}

select .language-selection option[value="nederlands"]{
    background-image: url(/images/languages/nederlands.png);
    /*background: rgba(200, 200, 200, 0.3);*/
}

.active a {
width: 125px;
border-style: solid;
border-color: white;
box-shadow:  5px 5px white;
color: white;
background-color: <?php echo $activeColor?> !important;
}


.Dance{
    background-color: <?php echo $danceColor?>;
}

.Food{
    background-color: <?php echo $foodColor?>;
}

.Ticket{
    background-color: <?= $cartColor?>;
}

.Orderdata{
background-color: <?= $cartColor?>;
}

.Orderconfirm{
background-color: <?= $cartColor?>;
}

.Ordersuccess{
background-color: <?= $cartColor?>;
}

.Home{
    background-color: <?php echo $headerStandardColor?>;
}

.Schedule{
    background-color: <?php echo $scheduleColor?>
}

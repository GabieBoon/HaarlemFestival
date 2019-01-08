<?php
header("Content-type: text/css; charset: UTF-8");

$foodColor = "#F0841B";
?>

.food-content-box{
    background-color: rgba(242,242,242,0.95);
    padding: 10px;
    margin:0 auto;
    overflow: auto;
    z-index: 20;
    text-align: center;
    max-width: 1000px;
}

.background-image{
    background-size:cover !important;
    background-repeat:no-repeat !important;
    background-position:center center !important;
}

.food-content{
    margin-right:15%;
    margin-left: 15%;
}

h4{
    font-weight: bold;
    margin-top:25px;
}

.restaurant-item p {
    text-align: left;
    padding: 0;
    margin: 0 200px;
}

.restaurant-item img{
    float:left;
    width: 180px;
    height: 100px;
}

.restaurant-item{
    padding-bottom: 30px;
}

.restaurant-item h5{
    float: right;
    margin-top: -55px;
    color:#CB6C0E;
    font-weight: bold;
    font-size: 17px;
    padding:0;
}
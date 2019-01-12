<?php

header("Content-type: text/css; charset: UTF-8");

?>

.j-subnav {
    background-color:#440E62;
    margin: 0 640px;
    padding: 6px 0;
}

.j-subnav nav {

}

.j-subnav nav ul {
    list-style-type: none;
}

.j-subnav nav ul li {
    display: inline;
    margin: 0 12px;
}

.j-subnav nav ul li:first-of-type {
    margin-left: 0;
}

.j-subnav nav ul li:last-of-type {
    margin-right: 0;
}

.j-subnav nav ul li a {
    color: #FFF;
    text-transform: uppercase;
    font-family: 'Broadway';
    font-size: 1.6em;
    opacity: 0.6;
}

.j-subnav nav ul li a:hover {
    text-decoration: none;
    opacity: 1;
}

.j-active {
    opacity: 1 !important;
}

.j-subnav div {
    width: 0;
    height: 0;
    border: 24px solid #440E62;
}

.j-subnav-left {
    border-bottom-color: transparent;
    border-left-color: transparent;
}

.j-subnav.right {
    border-bottom-color: transparent;
    border-right-color: transparent;
}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Basket</title>
</head>

<body>

<?php include 'header.php' ?>

<div class="content-block">
    <div class="container">
        <div class="title-lk">
            <h1>my shopping cart</h1>
        </div>
    </div>
</div>

<div class="shop-cart">
    <div class="delivery-cart">
        <div class="delivery-time">
            <h2>delivery time</h2>
            <div class="asap-btn">
                <button class="btn-asap">
                    asap (40 - 50 min)
                </button>
            </div>
        </div>
        <div class="delivery-address">
            <h2>delivery address</h2>
            <div class="delivery-radio">
                <input id="r1" name="rr" type="radio"/>
                <label for="r1"><span></span> </label>15th Avenue,15 floor
            </div>
            <div class="delivery-radio">
                <input id="r2" name="rr" type="radio"/>
                <label for="r2"><span></span> </label>15th Avenue,16 floor
            </div>
            <button class="btn-add-address">add address</button>
        </div>
        <div class="delivery-method">
            <h2>payment method</h2>
            <div class="delivery-radio">
                <input id="cash" name="mt" type="radio"/>
                <label for="cash"><span></span> </label>Cash
            </div>
            <div class="delivery-radio">
                <input id="ccard" name="mt" type="radio"/>
                <label for="ccard"><span></span> </label>Credit card <span>4565XXXX8998</span></div>
            <div class="new-cart">
                <button class="btn-cart">Add new credit card</button>
            </div>
        </div>
    </div>
    <div class="basket">
        <div class="basket-order">
            <div class="img-food"><img alt src=../assets/img/carbonara.jpg></div>
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1"
                                 viewBox="0 0 492 492" width="6px" x="0px"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                 y="0px">
                                            <g>
                                                <g>
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="img-food"><img alt src=../assets/img/carbonara.jpg></div>
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                        <div class="modifications">
                            <h2>well done</h2>
                            <h3>Tabasco<span> + €3.00</span></h3></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1"
                                 viewBox="0 0 492 492" width="6px" x="0px"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                 y="0px">
                                            <g>
                                                <g>
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="img-food"><img alt src=../assets/img/carbonara.jpg></div>
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1"
                                 viewBox="0 0 492 492" width="6px" x="0px"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                 y="0px">
                                            <g>
                                                <g>
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                        <div class="modifications">
                            <h2>well done</h2>
                            <h3>Tabasco <span>+ €3.00</span></h3></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1"
                                 viewBox="0 0 492 492" width="6px" x="0px"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                 y="0px">
                                            <g>
                                                <g>
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1"
                                 viewBox="0 0 492 492" width="6px" x="0px"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                 y="0px">
                                            <g>
                                                <g>
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1"
                                 viewBox="0 0 492 492" width="6px" x="0px"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                 y="0px">
                                            <g>
                                                <g>
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                        <svg fill="#ab3e39" height="6px" id="Layer-1" viewBox="0 0 492 492" width="6px" x="0px"
                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg" y="0px"><g><g>
                        <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.
                        86-19.028L468.02,7.872c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,
                        7.856L246.008,191.82L62.048,7.872c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.
                        02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052L191.828,246L7.872,429.952c-5.064,
                        5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-order">
            <div class="food">
                <div class="food-cont">
                    <div class="basket-name">
                        <div class=location-item>
                            <p><span>Spezzo</span></p>
                        </div>
                        <div class="basket-name-item">
                            <h2>Creamy bacon Carbonara</h2></div>
                    </div>
                </div>
                <div class="info-food">
                    <div class="quan-food"><img alt src=../assets/img/icon/arrowleft.png> <span> 2</span> <img
                            alt src=../assets/img/icon/arrowright.png></div>
                    <div class="cost-food">€ <span>10.00</span></div>
                    <div class="deleted-order">
                        <button class=btn-deleted>
                            <svg fill="#ab3e39" height="6px" id="Layer-1" viewBox="0 0 492 492" width="6px" x="0px"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg" y="0px"><g><g>
                            <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.
                            972-7.86-19.028L468.02,7.872c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.
                            024,7.856L246.008,191.82L62.048,7.872 c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.
                            78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052L191.828,246L7.872,429.
                            952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/> </g>
                                            </g>
                                        </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="place-order">
            <div class="total-order">
                <h2> total: </h2> <span>€120</span></div>
            <div class="place-btn">
                <button class="btn-place">place my order</button>
            </div>
        </div>
    </div>
</div>

<div class=title-lk>
    <h1>extra shop</h1>
</div>
<div class="container-rest">
    <ul class="menu-shop">
        <li class="active"><a class="item-shop" href="">pasta</a></li>
        <li><a href="">pizza</a></li>
        <li><a href="">salads</a></li>
        <li><a href="">soups</a></li>
        <li><a href="">main coursers</a></li>
        <li><a href="">grill menu</a></li>
        <li><a href="">desserts</a></li>
        <li><a href="">drinks</a></li>
    </ul>
    <div class="menu">
        <div class="menu-item">
            <div class="food-item"><img class="img-item" src="../assets/img/pestopasta.jpg" alt="pestopasta">
                <div class="item-info">
                    <h2>Pesto pasta</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem. Aliquam
                        erat</p>
                    <div class="item-cost">
                        <h3>€7.00</h3>
                        <button class="btn-add"></button>
                    </div>
                </div>
            </div>
            <div class="food-item">
                <img class="img-item" src="../assets/img/creamybaconcarbonara.jpg" alt="creamybaconcarbonara">
                <div class="item-info">
                    <h2>creamy bacon carbonara</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem. Aliquam
                        erat</p>
                    <div class="item-cost">
                        <h3>€10.00</h3>
                        <button class="btn-add"></button>
                    </div>
                </div>
            </div>
            <div class="food-item">
                <img class="img-item" src="../assets/img/creamybaconcarbonara.jpg" alt="creamybaconcarbonara">
                <div class="item-info">
                    <h2>Penne pasta</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem. Aliquam
                        erat</p>
                    <div class="item-cost">
                        <h3>€8.00</h3>
                        <button class="btn-add"></button>
                    </div>
                </div>
            </div>
            <div class="food-item">
                <div class="item-info-small">
                    <h2>4 cheeses</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem. Aliquam
                        erat</p>
                    <div class="item-cost">
                        <h3>€10.00</h3>
                        <button class="btn-add"></button>
                    </div>
                </div>
            </div>
            <div class="food-item">
                <div class="item-info-small">
                    <h2>4 cheeses</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem. Aliquam
                        erat</p>
                    <div class="item-cost">
                        <h3>€10.00</h3>
                        <button class="btn-add"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
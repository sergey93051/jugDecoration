
require('./bootstrap');

const Product = require('./product.js').default;
const Orders = require("./order.js").default;
const Mainpage = require("./index.js").default;
const Profpage = require("./profile.js").default;
import $, { css } from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/widgets/datepicker.js';

//mainpage page1   (/)
// prodItem.product()
const profile = new Profpage();
profile.profpageAjax();

const mainpages = new Mainpage();
mainpages.index();
mainpages.shopcardnav();
mainpages.cookiefunction();
mainpages.catePage();
mainpages.catePageAjax();
mainpages.lang();
mainpages.authAjax();
const products = new Product();
products.prodItem();
products.productItemAjax();
products.productinfo();
products.productinfoAjax();
products.likeProduct();
products.cartsentorder();
const orders = new Orders();
orders.ordersAjax();
orders.ordersAjaxtoreg();
orders.ordersAjaxtolog();

// if ($(".main__footer").css("bottom") >= "1") {
//     $(".main__footer").css("bottom", "0px");
// }












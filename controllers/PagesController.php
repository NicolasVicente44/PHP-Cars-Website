<?php
require_once 'models/CartModel.php';
require_once 'models/OptionModel.php';
require_once 'connect.php';

function index() {
    render("pages/index", [
        "title" => "East Side Porsche's Vehicles",
    ]);
}

function about() {
    render("pages/about", [
        "title" => "About Us"
    ]);
}

function options() {
    render("pages/options", [
        "title" => "Options"
    ]);
}


function contact() {
    render("pages/contact", [
        "title" => "Contact"
    ]);
}
?>

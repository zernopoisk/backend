<?php

/**
 * Оплата
 */

$payment = [
    "price"=>3800,
    "vat"=>"yes",
    "payment_forms"=>[
        "cash", "noncash"
    ],
    "payment_method"="upon_shipment",
    "extra"=>[
        "bagrain"=>"no",
        "commission"=>"no"
    ],
];

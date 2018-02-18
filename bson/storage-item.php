<?php

/**
 * Объект для хранения в БД
 */

$storage = [
    "product"=>[
        "product"=>"wheat",
        "amount"=>200,
        "quality"=>"third",
    ],
    "payment"=>[
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
    ],
    "transportation"=>[
        "delivery"=>"no",
        "pickup"=>[
            "from_stock", "at_the_elevator", "at_the_elevator_according_to_the_census"
        ],
        "region"=>"Vinnytsia",
        "district"=>"Barsky",
        "locality"=>"Иваново",
    ],
    "additional"=>[
        "seller_description"=>"доп. описание продавца.",
        "incoterms"=>[
            "exw","fca",
        ],
    ],
    "seller"=>[
        "seller_type"=>"manufacturer",
        "mobile"=>"+380 (97) 992-56-06",
        "contact_person"=>"Анастасия Федорова",
    ],
    "ad"=>[
        "highlight"=>"yes",
    ],
];

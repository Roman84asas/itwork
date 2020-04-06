<?php
defined( 'ABSPATH' ) || exit;

function get_large_value_from_bank($sum) {
    $languages = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp");
    //валюты
    foreach ($languages->Valute as $lang) {
        if ($lang["ID"] == 'R01335') { //тип валюты
            $koeficient1 = round(str_replace(',','.',$lang->Value), 4);
        }
    }
    $sum_large_number = round(100 / $koeficient1 * $sum, 0);
    echo $sum_large_number;
}

add_action('get_large_value_from_bank', 'get_large_value_from_bank', 10, 1);
<?php

namespace App\Services\Admin\Api;

use Illuminate\Support\Facades\Http;

class CurrenciesService
{
    public static function currencies()
    {
        $currenciesNames = ['USD', 'EUR'];
        $currenciesResult = [];
        $response = Http::get('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
        $currenciesJson = $response->json();

        foreach ($currenciesJson as $key => $currency) {
            foreach ($currenciesNames as $key => $name) {
                if ($currency['cc'] == $name) {
                    $currenciesResult[$name] = $currency['rate'];
                }
            }
        }

        return $currenciesResult;
    }
}

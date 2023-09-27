<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Currency;

class TestController extends Controller
{
    public function process()
    {
        $items = Item::query()->take(10)->where('category', 3)->get();
        $usdRate = Currency::query()->where('currency', 'USD')->orderBy('date', 'desc')->take(1)->get()->toArray();
        $eurRate = Currency::query()->where('currency', 'EUR')->orderBy('date', 'desc')->take(1)->get()->toArray();

        $response = [
            'time' => 'не успел',

        ];
        foreach ($items as $item) {
            $result = [
                'name' => $item['name'],
                'category' => $item['category'],
                'price' => $item['price'],
                'currency' => $item['currency'],
            ];
            if ($item['currency'] == 'USD') {
                $result['priceRUB'] = $usdRate[0]['value'] * $item['price'];
                $result['dateСurrency'] = $usdRate[0]['date'];
            } else {
                $result['priceRUB'] = $eurRate[0]['value'] * $item['price'];
                $result['dateСurrency'] = $eurRate[0]['date'];
            }
            $response[] = $result;
        }
        return response()->json($response);
    }
}

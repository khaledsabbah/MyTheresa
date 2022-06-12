<?php


namespace App\Stores;


use Illuminate\Support\Facades\Storage;

class Mytheresa extends AbstractStore
{

    // Empty String As I Get The Products From Json File In Storage
    const API_URL = '';

    const STORE_NAME = "MYTHERESA";

    public function getStoreProducts(): array
    {
        // This Should be call to external api to get list of products
        $products = Storage::disk("public")->get("products.json");
        return json_decode($products, true);
    }

}

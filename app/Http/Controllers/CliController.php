<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use PHPHtmlParser\Dom;

class CliController extends Controller
{
    public static function parseCountries()
    {
        // Get html
        $response = Http::get('https://apps.timwhitlock.info/emoji/tables/iso3166')->body();

        $dom = new Dom();
        $dom->loadStr($response);
        $table = $dom->find('.table-striped');
        $tbody = $table->find('tbody');

        foreach ($tbody->find('tr') as $tr) {
            $tdListInRow = $tr->find('td');

            $countryCode = trim($tdListInRow[0]->innerHtml);
            $countryName = trim($tdListInRow[3]->innerHtml);

            echo 'Insert ' . $countryName . PHP_EOL;
            DB::table('countries')->updateOrInsert([
                'iso_2' => $countryCode,
                'name_en' => $countryName,
                'name_ru' => '',
                'description' => ''
            ]);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Country extends Model
{
    use HasFactory;

    public static function getRandomCountry()
    {
        $countries = DB::table((new static())->getTable())
            ->select('iso_2', 'name_en', 'description')
            ->get();

        return $countries->random(1)->toArray()[0];
    }
}

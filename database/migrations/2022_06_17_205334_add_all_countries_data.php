<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddAllCountriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('countries')->insert([
            ['iso_2' => 'AD', 'name_en' => 'Andora', 'name_ru' => 'Андора', 'description' => 'описание'],
            ['iso_2' => 'AE', 'name_en' => 'United Arab Emirates', 'name_ru' => 'Объединённые Арабские Эмираты', 'description' =>  'описание'],
            ['iso_2' => 'AF', 'name_en' => 'Afghanistan', 'name_ru' => 'Афганистан', 'description' => 'описание'],
            ['iso_2' => 'AG', 'name_en' => 'Antigua and Barbuda', 'name_ru' => 'Антигуа и Барбуда', 'description' => 'описание'],
            ['iso_2' => 'AI', 'name_en' => 'Anguilla', 'name_ru' => 'Ангилья', 'description' => 'описание'],
            ['iso_2' => 'AL', 'name_en' => 'Albania', 'name_ru' => 'Албания', 'description' => 'описание'],
            ['iso_2' => 'AM', 'name_en' => 'Armenia', 'name_ru' => 'Армения', 'description' => 'описание'],
            ['iso_2' => 'AO', 'name_en' => 'Angola', 'name_ru' => 'Ангола', 'description' => 'описание'],
            ['iso_2' => 'AQ', 'name_en' => 'Antarctica', 'name_ru' => 'Антарктида', 'description' => 'описание'],
            ['iso_2' => 'AR', 'name_en' => 'Argentina', 'name_ru' => 'Аргентина', 'description' => 'описание'],
            ['iso_2' => 'AS', 'name_en' => 'American Samoa', 'name_ru' => 'Американское Самоа', 'description' => 'описание'],
            ['iso_2' => 'AT', 'name_en' => 'Austria', 'name_ru' => 'Австрия', 'description' => 'описание'],
            ['iso_2' => 'AU', 'name_en' => 'Australia', 'name_ru' => 'Австралия', 'description' => 'описание'],
            ['iso_2' => 'AW', 'name_en' => 'Aruba', 'name_ru' => 'Австралия', 'description' => 'описание'],
            ['iso_2' => 'AX', 'name_en' => 'Aland Islands', 'name_ru' => 'Аландские острова', 'description' => 'описание'],
            ['iso_2' => 'AZ', 'name_en' => 'Azerbaijan', 'name_ru' => 'Азербайджан', 'description' => 'описание'],
            ['iso_2' => 'BA', 'name_en' => 'Bosnia and Herzegovina', 'name_ru' => 'Босния и Герцеговина', 'description' => 'описание'],
            ['iso_2' => 'BB', 'name_en' => 'Barbados', 'name_ru' => 'Барбадос', 'description' => 'описание'],
            ['iso_2' => 'BD', 'name_en' => 'Bangladesh', 'name_ru' => 'Бангладеш', 'description' => 'описание'],
            ['iso_2' => 'BE', 'name_en' => 'Bangladesh', 'name_ru' => 'Бангладеш', 'description' => 'описание'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('countries')->delete();
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvString = Storage::get('private/category-table.csv');
        $csvArray = explode(
            "\n",
            trim($csvString)
        );
        foreach ($csvArray as $item) {
            $csv = str_getcsv($item);
            DB::table('categories')->insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => $csv[0],
                'image' => $csv[1],
                'description' => $csv[2],
                'mouse' => $csv[3],
                'keyboard' => $csv[4],
                'mouse pad' => $csv[5],
                'monitor' => $csv[6],
                'headset' => $csv[7],
                'lighting' => $csv[8],
                'table' => $csv[9],
                'chair' => $csv[10],
                'micro' => $csv[11],
            ]);
        }
    }}

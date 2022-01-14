<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $csvString = Storage::get('private/initial-products-import.csv');
        $csvArray = explode(
            "\n",
            trim($csvString)
        );
        foreach ($csvArray as $item) {
            $csv = str_getcsv($item);
            DB::table('products')->insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => $csv[0],
                'sku' => $csv[1],
                'color' => $csv[2],
                'material' => $csv[3],
                'price' => $csv[4],
                'description' => $csv[6],
                'ShortDescription' => $csv[7],
                'highlight' => (int)$csv[9],
            ]);
        }
    }
}

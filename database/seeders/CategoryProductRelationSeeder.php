<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryProductRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvString = Storage::get('private/category_product_relation.csv');
        $csvArray = explode(
            "\n",
            trim($csvString)
        );
        foreach ($csvArray as $item) {
            $csv = str_getcsv($item);
            DB::table('category_product')->insert([
                'category_id' => $csv[0],
                'product_id' => $csv[1],
            ]);
        }

    }
}

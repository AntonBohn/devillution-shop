<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CrossSellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvString = Storage::get('private/crossselling-table.csv');
        $csvArray = explode(
            "\n",
            trim($csvString)
        );
        foreach ($csvArray as $item) {
            $csv = str_getcsv($item);
            DB::table('product_crossselling')->insert([
                'product_id' => $csv[0],
                'crossselling_id' => $csv[1],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvString = Storage::get('private/image_gallery.csv');
        $csvArray = explode(
            "\n",
            trim($csvString)
        );
        foreach ($csvArray as $item) {
            $csv = str_getcsv($item);
            DB::table('product_images')->insert([
                'url' => $csv[0],
                'product_id'=> $csv[1],
                'default' => $csv[2],
            ]);
        }
    }
}


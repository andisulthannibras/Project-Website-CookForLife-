<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table resep
        DB::table('resep')->insert([
            array(
                'image' => 'image/resep 1.png',
                'nama' => 'Resep Ramen',
                'pencipta' => 'by Yoshihiro Murata',
                'deskripsi' => 'A French beef stew braised in red wine, often red Burgundy, and beef stock, typically flavored with carrots, onions, garlic, and a bouquet garni, and garnished with pearl onions, mushrooms, and bacon.',
                'rating' => '144',
                'last_update' => 'Last updated 10 Juli 21',
                'durasi' => '35 Menit',
                'porsi' => '2 porsi',
                'tingkat_kesulitan' => 'Tingkat Kesulitan:Sedang',
                'catatan' => 'Dibumbui dengan kaldu ayam dengan campuran topping seperti jamur kuping, sawi, dan telur. Semangkuk ramen rumahan yang lezat siap menemani Anda. Siapapun bisa membuat ramen yang lezat ini dalam waktu kurang dari 30 menit! Dalam resep ini, daripada menghabiskan waktu berjam-jam untuk membuat sup kaldu ramen, kami menyajikan cara membuat ramen yang lezat dan mudah dibuat. Ikuti cara membuatnya.',
                'image_1' => 'image/ramen 1.png',
                'image_2' => 'image/ramen 2.png',
                'image_3' => 'image/ramen 3.png',
                'image_4' => 'image/ramen 4.png',
            ),
            array(
                'image' => 'image/resep 2.png',
                'nama' => 'Soupe l oignon',
                'pencipta' => 'by Marie Julie Grandjean Mouquin',
                'deskripsi' => 'Potatoes dauphinoise is how the French say casserole of potatoes, heavy cream, and cheese.',
                'rating' => '122',
                'last_update' => 'Last updated 20 juni 21',
                'durasi' => '2 Jam',
                'porsi' => '4 Porsi',
                'tingkat_kesulitan' => 'Tingkat Kesulitan:Sulit',
                'catatan' => 'Bawang kuning adalah taruhan serba guna terbaik Anda untuk sup ini, tetapi campuran bawang kuning, manis (mis., Vidalia), dan bawang merah, serta bawang merah, menghasilkan rasa yang lebih kompleks.                ',
                'image_1' => 'image/soup 1.png',
                'image_2' => 'image/soup 2.png',
                'image_3' => 'image/soup 3.png',
                'image_4' => 'image/soup 4.png',
            ),             
            array(
                'image' => 'image/resep 3.png',
                'nama' => 'Langue de Boeuf',
                'pencipta' => 'by Alain Ducasse',
                'deskripsi' => 'Croissants are a quintessential French pastry that have become popular all over the world. They are made with layers of buttery, flaky dough that is rolled and folded to create a distinctive crescent shape.',
                'rating' => '150',
                'last_update' => 'Last updated 5 Maret 21',
                'durasi' => '5 Jam',
                'porsi' => '2 Porsi',
                'tingkat_kesulitan' => 'Tingkat Kesulitan:Sedang',
                'catatan' => 'Langue de boeuf merupakan hidangan khas Prancis. yang menggunakan lidah sapi sebagai bahan. utamanya dan dimasak bersama rempah dan sayuran. sehingga membuat teksturnya menjadi lembut.',
                'image_1' => 'image/longue 1.png',
                'image_2' => 'image/longue 2.png',
                'image_3' => 'image/longue 3.png',
                'image_4' => 'image/longue 4.png',
            ),
            array(
                'image' => 'image/resep 4.png',
                'nama' => 'Lasagna',
                'pencipta' => 'by Samina Jalil',
                'deskripsi' => 'The dish sees chicken braised with wine, mushrooms, salty pork or bacon, mushrooms, onions, garlic, and sometimes even a drop of brandy. Although the nama translates as ‘rooster in wine’ – the braising is ideal for tougher birds – the recipe usually uses chicken or capon.',
                'rating' => '166',
                'last_update' => 'Last updated 3 Maret 21',
                'durasi' => '11-15 Menit',
                'porsi' => '1 Porsi',
                'tingkat_kesulitan' => 'Tingkat Kesulitan:Sedang',
                'catatan' => 'Lasagna adalah lembaran pasta yang lebar dan pipih. Lasagna dapat merujuk pada jenis mie atau hidangan khas lasagna yang merupakan hidangan yang dibuat dengan beberapa lapis lembaran lasagna dengan saus dan bahan lainnya, seperti daging dan keju, di antara mie lasagna.',
                'image_1' => 'image/lasagna 1.png',
                'image_2' => 'image/lasagna 2.png',
                'image_3' => 'image/lasagna 3.png',
                'image_4' => 'image/lasagna 4.png',
            ),
            
            // array(  
            //     'image' => 'image/resep 5.png',
            //     'nama' => 'Nasi Goreng',
            //     'pencipta' => 'by Mamang Ortega',
            //     'deskripsi' => 'Ratatouille is a classic French dish that originated in the Provence region. It is a vegetarian stew made with a variety of vegetables, including tomatoes, zucchini, eggplant, bell peppers, and onions.',
            //     'rating' => '120',
            //     'last_update' => 'Last updated 30 Sept 21',
            // ),
        ]);
    }
}
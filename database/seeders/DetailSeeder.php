<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table detail
        // DB::table('detail')->insert([
        //     array(
        //         'image' => 'image/resep 1.png',
        //         'nama' => 'Resep Ramen',
        //         'pencipta' => 'by Yoshihiro Murata',
        //         'durasi' => '35 Menit',
        //         'porsi' => '2 porsi',
        //         'tingkat_kesulitan' => 'Tingkat Kesulitan:Sedang',
        //         'catatan' => 'Dibumbui dengan kaldu ayam dengan campuran topping seperti jamur kuping, sawi, dan telur. Semangkuk ramen rumahan yang lezat siap menemani Anda. Siapapun bisa membuat ramen yang lezat ini dalam waktu kurang dari 30 menit! Dalam resep ini, daripada menghabiskan waktu berjam-jam untuk membuat sup kaldu ramen, kami menyajikan cara membuat ramen yang lezat dan mudah dibuat. Ikuti cara membuatnya.',
        //         'image_1' => 'image/ramen 1.png',
        //         'image_2' => 'image/ramen 2.png',
        //         'image_3' => 'image/ramen 3.png',
        //         'image_4' => 'image/ramen 4.png',
        //     ),             
        //     array(
        //         'image' => 'image/resep 2.png',
        //         'nama' => 'Soupe l oignon',
        //         'pencipta' => 'by Marie Julie Grandjean Mouquin',
        //         'durasi' => '2 Jam',
        //         'porsi' => '4 Porsi',
        //         'tingkat_kesulitan' => 'Tingkat Kesulitan:Sulit',
        //         'catatan' => 'Bawang kuning adalah taruhan serba guna terbaik Anda untuk sup ini, tetapi campuran bawang kuning, manis (mis., Vidalia), dan bawang merah, serta bawang merah, menghasilkan rasa yang lebih kompleks.                ',
        //         'image_1' => 'image/soup 1.png',
        //         'image_2' => 'image/soup 2.png',
        //         'image_3' => 'image/soup 3.png',
        //         'image_4' => 'image/soup 4.png',
        //     ),                                   
        //     array(
        //         'image' => 'image/resep 3.png',
        //         'nama' => 'Langue de Boeuf',
        //         'pencipta' => 'by Alain Ducasse',
        //         'durasi' => '5 Jam',
        //         'porsi' => '2 Porsi',
        //         'tingkat_kesulitan' => 'Tingkat Kesulitan:Sedang',
        //         'catatan' => 'Langue de boeuf merupakan hidangan khas Prancis. yang menggunakan lidah sapi sebagai bahan. utamanya dan dimasak bersama rempah dan sayuran. sehingga membuat teksturnya menjadi lembut.',
        //         'image_1' => 'image/longue 1.png',
        //         'image_2' => 'image/longue 2.png',
        //         'image_3' => 'image/longue 3.png',
        //         'image_4' => 'image/longue 4.png',
        //     ),
        //     array(
        //         'image' => 'image/resep 4.png',
        //         'nama' => 'Lasagna',
        //         'pencipta' => 'by Samina Jalil',
        //         'durasi' => '11-15 Menit',
        //         'porsi' => '1 Porsi',
        //         'tingkat_kesulitan' => 'Tingkat Kesulitan:Sedang',
        //         'catatan' => 'Lasagna adalah lembaran pasta yang lebar dan pipih. Lasagna dapat merujuk pada jenis mie atau hidangan khas lasagna yang merupakan hidangan yang dibuat dengan beberapa lapis lembaran lasagna dengan saus dan bahan lainnya, seperti daging dan keju, di antara mie lasagna.',
        //         'image_1' => 'image/lasagna 1.png',
        //         'image_2' => 'image/lasagna 2.png',
        //         'image_3' => 'image/lasagna 3.png',
        //         'image_4' => 'image/lasagna 4.png',
        //     ),
        // ]);
    }
}
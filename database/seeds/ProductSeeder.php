<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Product::class, 50)->create();
        // protected $fillable = ['name','image','description','price','weigth','categories_id','stok'];



        $products = [
            // SAMSUNG
            [
                'name' => 'Samsung Galaxy A05 4G LTE 6/128',
                'description' => 'Nikmati pengalaman terbaru dari Samsung dengan Galaxy A05, yang menampilkan layar HD+ 6,5 inci, prosesor octa-core yang bertenaga, dan RAM 6GB untuk performa yang lancar. Ambil foto menakjubkan dengan sistem kamera ganda 48MP dan nikmati penyimpanan yang cukup dengan 128GB, dapat diperluas melalui microSD. Tetap terhubung dengan baterai 5000mAh yang tahan lama dan aman dengan sensor sidik jari yang dipasang di samping. Galaxy A05 menawarkan pengalaman seluler yang penuh gaya dan efisien dengan nilai yang sangat baik.',
                'price' => 1720000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98x-lnjpmoq5qzd3db_tn.webp',
                'weight' => 195, // dalam gram
                'categories_id' => 2,
            ],
            [
                'name' => 'Samsung A55 5G 8/128GB',
                'description' =>'Nikmati inovasi terbaru dari Samsung dengan Galaxy A55. Dilengkapi dengan layar HD+ 6,5 inci, prosesor octa-core yang kuat, dan pilihan RAM 8GB untuk performa yang optimal. Kamera ganda 48MP menghasilkan foto yang menakjubkan, sementara opsi penyimpanan 128GB atau 256GB, yang dapat didukung melalui microSD, memberikan ruang yang cukup untuk semua kebutuhan Anda. Baterai 5000mAh memastikan Anda tetap terhubung sepanjang hari, dan sensor sidik jari di samping menambah keamanan.',
                'price' => 5999000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98z-lsy2j90zasli90_tn.webp',
                'weight' => 213, // dalam gram
                'categories_id' => 2,
            ],
            [
                'name' => 'Samsung Galaxy S23  Ultra Handphone 8GB+256GB',
                'description' => 'Rasakan teknologi tercanggih dari Samsung dengan Galaxy S23 Ultra. Ditenagai oleh RAM 8GB dan penyimpanan internal 256GB, ponsel ini menawarkan kinerja luar biasa dan ruang penyimpanan yang luas. Layar Dynamic AMOLED 6,8 inci memberikan visual yang tajam dan jernih. Sistem kamera canggih, termasuk kamera utama 108MP, menghasilkan foto dan video berkualitas tinggi. Baterai 5000mAh memastikan daya tahan seharian penuh, dan fitur keamanan terbaru seperti pemindai sidik jari ultrasonik menjaga data Anda tetap aman. Samsung Galaxy S23 Ultra adalah pilihan sempurna untuk pengalaman ponsel premium.',
                'price' => 16999000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rcd7-lr48jvoxcwv800_tn.webp',
                'weight' => 233, // dalam gram
                'categories_id' => 2,
            ],
            
            // END SAMSUNG
            // APPLE
            [
                'name' => 'Apple iPhone 11 64GB White',
                'description' => 'Nikmati performa unggul dan desain elegan dengan Apple iPhone 11. Dilengkapi dengan layar Liquid Retina HD 6,1 inci, chip A13 Bionic yang kuat, dan kapasitas penyimpanan 64GB, iPhone 11 menawarkan pengalaman pengguna yang luar biasa. Sistem kamera ganda 12MP menghasilkan foto dan video berkualitas tinggi, sementara fitur-fitur canggih seperti Face ID memastikan keamanan data Anda.',
                'price' => 4800000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98t-lr5g4obmor3b5f_tn.webp',
                'weigth' => 225,
                'categories_id' => 1,
            ],
            [
                'name' => 'Apple iPhone 13 128GB Midnight',
                'description' => 'Nikmati performa unggul dan desain elegan dengan Apple iPhone 13. Dilengkapi dengan layar Liquid Retina HD 6,1 inci, chip A13 Bionic yang kuat, dan kapasitas penyimpanan 64GB, iPhone 11 menawarkan pengalaman pengguna yang luar biasa. Sistem kamera ganda 12MP menghasilkan foto dan video berkualitas tinggi, sementara fitur-fitur canggih seperti Face ID memastikan keamanan data Anda.',
                'price' => 8999000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98r-llo9t5qvponb62_tn.webp',
                'weigth' => 225,
                'categories_id' => 1,
            ],
            [
                'name' => 'Apple iPhone 11 128GB, Black',
                'description' => 'Nikmati performa unggul dan desain elegan dengan Apple iPhone 11. Dilengkapi dengan layar Liquid Retina HD 6,1 inci, chip A13 Bionic yang kuat, dan kapasitas penyimpanan 64GB, iPhone 11 menawarkan pengalaman pengguna yang luar biasa. Sistem kamera ganda 12MP menghasilkan foto dan video berkualitas tinggi, sementara fitur-fitur canggih seperti Face ID memastikan keamanan data Anda.',
                'price' => 5500000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/f0d0af58cef51d3c9c4d88662f456a4f_tn.webp',
                'weigth' => 225,
                'categories_id' => 1,
            ],
            [
                'name' => 'Apple iPhone 13 128GB, Green',
                'description' => 'Nikmati performa unggul dan desain elegan dengan Apple iPhone 13. Dilengkapi dengan layar Liquid Retina HD 6,1 inci, chip A13 Bionic yang kuat, dan kapasitas penyimpanan 64GB, iPhone 11 menawarkan pengalaman pengguna yang luar biasa. Sistem kamera ganda 12MP menghasilkan foto dan video berkualitas tinggi, sementara fitur-fitur canggih seperti Face ID memastikan keamanan data Anda.',
                'price' => 8999000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/1fae4c215d3a153dbcb0af568b398f6c_tn.webp',
                'weigth' => 225,
                'categories_id' => 1,
            ],
            //END APPLE
            //XIOMI
            [
                'name' => 'HP Xiaomi Redmi 12 (8GB/256GB) MediaTek Helio G88 5000 mAh 18W 90Hz FHD+ 50MP Triple Kamera AI hp Redmi',
                'description' => 'Nikmati performa handal dan fitur canggih dengan Xiaomi Redmi 12. Ditenagai oleh prosesor MediaTek Helio G88 dan RAM 8GB, ponsel ini memastikan kinerja yang mulus untuk semua kebutuhan Anda. Layar FHD+ 6,5 inci dengan refresh rate 90Hz memberikan visual yang tajam dan responsif. Dengan penyimpanan 256GB, Anda memiliki ruang yang luas untuk aplikasi, foto, dan video. Sistem kamera triple AI 50MP menghasilkan foto berkualitas tinggi. Baterai 5000mAh dengan pengisian cepat 18W memastikan daya tahannya lama.',
                'price' => 1800000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98r-lvv8cnglpfv188_tn.webp',
                'weigth' => 215,
                'categories_id' => 3,
            ],
            [
                'name' => 'XIAOMI REDMI 10A 6/128GB',
                'description' => 'Temukan keseimbangan sempurna antara kinerja dan harga dengan Xiaomi Redmi 10A. Ditenagai oleh RAM 6GB dan penyimpanan internal 128GB, ponsel ini menawarkan performa yang andal dan ruang penyimpanan yang luas. Layar HD+ 6,53 inci memberikan visual yang jernih untuk menikmati konten favorit Anda. Dengan kamera belakang 13MP, Anda dapat mengambil foto yang tajam dan detail. Baterai 5000mAh memastikan Anda tetap terhubung sepanjang hari tanpa khawatir kehabisan daya.',
                'price' => 1600000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98x-ltnt2wij2uwt72_tn.webp',
                'weigth' => 215,
                'categories_id' => 3,
            ],
            [
                'name' => 'Xiomi Redmi Note 11 6GB/128GB',
                'description' => 'Rasakan performa luar biasa dan fitur canggih dengan Xiaomi Redmi Note 11. Ditenagai oleh RAM 6GB dan penyimpanan internal 128GB, ponsel ini menawarkan kinerja yang andal dan ruang penyimpanan yang cukup. Layar FHD+ 6,43 inci dengan refresh rate 90Hz memberikan visual yang tajam dan responsif. Dengan sistem kamera quad 50MP, Anda dapat mengambil foto dan video berkualitas tinggi. Baterai 5000mAh dengan pengisian cepat 33W memastikan ponsel tetap menyala sepanjang hari.',
                'price' => 2900000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98o-lu1li3aexvgr1b_tn.webp',
                'weigth' => 215,
                'categories_id' => 3,
            ],
            [
                'name' => 'REDMI 9A 6/128GB 5000mAh',
                'description' => 'Temukan performa handal dan daya tahan baterai yang luar biasa dengan Redmi 9A. Ditenagai oleh RAM 6GB dan penyimpanan internal 128GB, ponsel ini menawarkan kinerja yang mulus dan ruang penyimpanan yang cukup untuk kebutuhan sehari-hari Anda. Layar HD+ 6,53 inci memberikan tampilan visual yang jernih dan nyaman. Dengan kamera belakang 13MP, Anda dapat mengambil foto yang tajam dan detail. Baterai 5000mAh memastikan ponsel tetap menyala sepanjang hari, membuat Anda tetap terhubung tanpa perlu sering mengisi daya.',
                'price' => 1900000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98o-ltpp8u4nl7js47_tn.webp',
                'weigth' => 215,
                'categories_id' => 3,
            ],
            //END XIOMI
            //OPPO
            [
                'name' => 'HP OPPO A17 MURAH HP 8+256GB',
                'description' => 'Dapatkan performa unggul dan penyimpanan luas dengan HP OPPO A17. Dilengkapi dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini memastikan kinerja yang cepat dan ruang yang cukup untuk semua aplikasi dan media Anda. Layar besar dan jernih memberikan pengalaman visual yang memuaskan. Kamera berkualitas tinggi memungkinkan Anda mengambil foto dan video dengan detail yang tajam. Dengan desain yang elegan dan harga terjangkau, OPPO A17 adalah pilihan sempurna untuk Anda yang mencari ponsel pintar dengan fitur lengkap dan performa andal.',
                'price' => 1799000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/sg-11134298-7rd45-lvlhvi3nt5gd5d_tn.webp',
                'weigth' => 193,
                'categories_id' => 4,
            ],
            [
                'name' => 'OPPO A78 5G Ram 8/256GB Smartphone 5G LTE',
                'description' => 'Rasakan kinerja unggul dan konektivitas 5G dengan OPPO A78. Dilengkapi dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini memberikan kinerja cepat dan ruang penyimpanan yang luas untuk semua aplikasi dan media Anda. Layar besar dan jernih memberikan pengalaman visual yang memuaskan, sementara kamera berkualitas tinggi memungkinkan Anda mengabadikan momen-momen berharga dengan detail yang tajam.',
                'price' => 3999000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r991-lvtzdam85mi2b3_tn.webp',
                'weigth' => 193,
                'categories_id' => 4,
            ],
            [
                'name' => 'OPPO RENO2z RAM 8 256GB ',
                'description'=> 'Nikmati performa handal dan ruang penyimpanan luas dengan OPPO RENO2z. Dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini menawarkan kinerja yang cepat dan ruang yang cukup untuk semua aplikasi dan media Anda. Layar besar dan jernih memberikan pengalaman visual yang memuaskan. Kamera berkualitas tinggi memungkinkan Anda mengabadikan momen-momen istimewa dengan detail yang tajam. Dengan desain elegan dan harga terjangkau, OPPO RENO2z adalah pilihan sempurna bagi Anda yang mencari ponsel pintar dengan fitur lengkap dan performa handal.',
                'price' => 5800000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98s-lusuqmi4jsei57_tn.webp',
                'weigth' => 193,
                'categories_id' => 4,
            ],
            [
                'name' => 'OPPO Reno3 Ram 12/256GB',
                'description' => 'Rasakan kinerja unggul dan ruang penyimpanan luas dengan OPPO Reno3. Dengan RAM 12GB dan penyimpanan internal 256GB, ponsel ini menawarkan kinerja cepat dan ruang yang cukup untuk semua aplikasi dan media Anda. Layar besar dan jernih memberikan pengalaman visual yang memuaskan, sementara kamera berkualitas tinggi memungkinkan Anda mengabadikan momen berharga dengan detail yang tajam. Dengan desain elegan dan harga terjangkau, OPPO Reno3 adalah pilihan tepat bagi Anda yang menginginkan ponsel pintar dengan fitur lengkap dan performa yang handal.',
                'price' => 4100000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98v-lviewc3ls9mx5f_tn.webp',
                'weigth' => 193,
                'categories_id' => 4,
            ],
            //END OPPO
            //VIVO
            [
                'name' => 'VIVO Y17 Ram 8/256GB',
                'description' => 'Nikmati pengalaman mobile yang luar biasa dengan VIVO Y17. Dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini menawarkan kinerja yang cepat dan ruang penyimpanan yang luas untuk semua aplikasi, foto, dan video Anda. Layar jernih dan responsif memberikan pengalaman visual yang memikat. Kamera berkualitas tinggi memungkinkan Anda menangkap setiap momen dengan detail yang tajam. Dengan desain yang elegan dan harga yang terjangkau, VIVO Y17 adalah pilihan tepat bagi Anda yang menginginkan ponsel pintar dengan fitur lengkap dan performa yang handal.',
                'price' => 2500000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r992-lpf1c3iwwj1v57_tn.webp',
                'weigth' => 213,
                'categories_id' => 5,
            ],
            [
                'name' => 'VIVO V15 RAM 8GB+256GB',
                'description' => 'Rasakan pengalaman mobile yang luar biasa dengan VIVO V15. Dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini menyediakan kinerja yang cepat dan ruang penyimpanan yang luas untuk semua aplikasi, foto, dan video Anda. Layar yang jernih dan responsif memberikan pengalaman visual yang memukau. Kamera berkualitas tinggi memungkinkan Anda menangkap setiap momen dengan detail yang tajam dan jelas. Dengan desain yang elegan dan harga yang terjangkau, VIVO V15 adalah pilihan tepat bagi Anda yang menginginkan ponsel pintar dengan fitur lengkap dan performa yang handal.',
                'price' => 1550000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/4e78337f92a09d114192a98117e9ad69_tn.webp',
                'weigth' => 213,
                'categories_id' => 5,
            ],
            [
                'name' => 'VIVO Y19 Ram 8/256GB',
                'description' => 'Nikmati pengalaman mobile yang luar biasa dengan VIVO Y19. Dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini menawarkan kinerja yang cepat dan ruang penyimpanan yang luas untuk semua aplikasi, foto, dan video Anda. Layar yang jernih dan responsif memberikan pengalaman visual yang memukau. Kamera berkualitas tinggi memungkinkan Anda menangkap setiap momen dengan detail yang tajam dan jelas. Dengan desain yang elegan dan harga yang terjangkau, VIVO Y19 adalah pilihan tepat bagi Anda yang menginginkan ponsel pintar dengan fitur lengkap dan performa yang handal.',
                'price' => 3190000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/sg-11134201-22120-ak9gxp3b56kv6a_tn.webp',
                'weigth' => 213,
                'categories_id' => 5,
            ],
            [
                'name' => 'VIVO Y33S RAM 8/256GB',
                'description' => 'Nikmati pengalaman mobile yang luar biasa dengan VIVO Y33S. Dengan RAM 8GB dan penyimpanan internal 256GB, ponsel ini menawarkan kinerja yang cepat dan ruang penyimpanan yang luas untuk semua aplikasi, foto, dan video Anda. Layar jernih dan responsif memberikan pengalaman visual yang memikat. Kamera berkualitas tinggi memungkinkan Anda menangkap setiap momen dengan detail yang tajam. Dengan desain yang elegan dan harga yang terjangkau, VIVO Y33S adalah pilihan tepat bagi Anda yang menginginkan ponsel pintar dengan fitur lengkap dan performa yang handal.',
                'price' => 3390000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98r-lterlt3o8br1c4_tn.webp',
                'weigth' => 213,
                'categories_id' => 5,
            ],
            //END VIVO
            //REALME
            [
                'name' => 'Realme Note 50 HP 4GB+128GB',
                'description' => 'Realme Note 50 HP memberikan performa handal dengan RAM 4GB dan penyimpanan internal 128GB. Dengan desain yang elegan dan harga terjangkau, ponsel ini adalah pilihan tepat bagi Anda yang menginginkan kinerja yang andal dan ruang penyimpanan yang cukup untuk aplikasi, foto, dan video Anda. Dengan layar yang jernih dan responsif, pengalaman visual Anda akan lebih memukau. Segera miliki Realme Note 50 HP dan nikmati pengalaman mobile yang luar biasa.',
                'price' => 1399000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98v-lrz94gcvw2bx6c_tn.webp',
                'weigth' => 195,
                'categories_id' => 6,
            ],
            [
                'name' => 'REALME C65 NFC 8/256GB',
                'description'=> 'REALME C65 NFC menawarkan performa handal dengan RAM 8GB dan penyimpanan internal 256GB. Dengan desain yang elegan dan harga yang terjangkau, ponsel ini adalah pilihan tepat bagi Anda yang membutuhkan kinerja andal dan ruang penyimpanan yang luas untuk aplikasi, foto, dan video Anda. Layar yang jernih dan responsif akan memperkaya pengalaman visual Anda. Segera dapatkan REALME C65 NFC dan nikmati pengalaman mobile yang luar biasa.',
                'price' => 2500000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98o-lvw6pgict1ricc_tn.webp',
                'weigth' => 195,
                'categories_id' => 6,
            ],
            [
                'name' => 'Realme Note 50 HP 4GB+128GB',
                'description' => 'Realme Note 50 HP memberikan performa handal dengan RAM 4GB dan penyimpanan internal 128GB. Dengan desain yang elegan dan harga terjangkau, ponsel ini adalah pilihan tepat bagi Anda yang menginginkan kinerja yang andal dan ruang penyimpanan yang cukup untuk aplikasi, foto, dan video Anda. Dengan layar yang jernih dan responsif, pengalaman visual Anda akan lebih memukau. Segera miliki Realme Note 50 HP dan nikmati pengalaman mobile yang luar biasa.',
                'price' => 1399000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/sg-11134201-23010-ivp202pvxgmvdc_tn.webp',
                'weigth' => 195,
                'categories_id' => 6,
            ],
            [
                'name' => 'REALME 10 RAM 8/128GB',
                'description' => 'REALME 10 menawarkan performa handal dengan RAM 8GB dan penyimpanan internal 128GB. Dengan desain yang elegan dan harga yang terjangkau, ponsel ini adalah pilihan tepat bagi Anda yang membutuhkan kinerja andal dan ruang penyimpanan yang cukup untuk aplikasi, foto, dan video Anda. Layar yang jernih dan responsif akan memperkaya pengalaman visual Anda. Segera dapatkan REALME 10 dan nikmati pengalaman mobile yang luar biasa.',
                'price' => 3199000, // Harga pasar yang disesuaikan
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98v-lrz94gcvw2bx6c_tn.webp',
                'weigth' => 195,
                'categories_id' => 6,
            ],
            //END REALME
        ];


        foreach($products as $product)
        {
           $imageContents = file_get_contents($product['image']);
           $imageName = basename($product['image']);
           $storagePath = 'images/' . $imageName;
           Storage::disk('public')->put($storagePath, $imageContents);
            // Buat record produk di database
            Product::create([
                
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'image' => $storagePath,
                'weigth' => rand(1,5),
                'categories_id' => $product['categories_id'],
                'stok' => rand(1,100)
            ]);
        }

    }
}

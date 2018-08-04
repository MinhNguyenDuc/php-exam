<?php

use Illuminate\Database\Seeder;

class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('appartments')->truncate();
        \Illuminate\Support\Facades\DB::table('appartments')->insert([
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'10',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Hồ Tây 1',
                'address'=>'Thụy Khuê Hồ Tây Hà Nội',
                'price'=>'20',
                'description'=>'View Tây Hồ đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh, nhiều dịch vụ khác',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 2',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'10',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư CẦu giấy 1',
                'address'=>'Cầu giấy Hà Nội',
                'price'=>'30',
                'description'=>'Gần nội thành',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh, phòng cháy tuyệt đối',
                'image'=>'http://i.imgur.com/WqgfKfT.jpg'
            ],
            [
                'name'=>'Chung cư Quận 1',
                'address'=>'Thành phố Hồ chí Minh',
                'price'=>'10',
                'description'=>'View Công viên Lê thị riêng ',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh, ko có cướp bóc',
                'image'=>'http://chothuesaigon.net/chothuesg_2.20150108084500579.jpg'
            ],
            [
                'name'=>'Chung cư Quận 2',
                'address'=>'quận 2 Thành phố Hồ chí Minh',
                'price'=>'10',
                'description'=>'Trong nội thành, hiện đại trẻ trung',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư ',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'10',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'10',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
            [
                'name'=>'Chung cư Tây Hồ 1',
                'address'=>'Thụy Khuê Tây Hồ Hà Nội',
                'price'=>'40',
                'description'=>'View Hồ Tây đẹp',
                'detail'=>'Nội thất chất lượng, đảm bảo an toàn dân sinh',
                'image'=>'http://cafefcdn.com/thumb_w/650/thumb_w/640/2015/ngoaigiaodoan-1443144552518.jpg'
            ],
        ]);
    }
}

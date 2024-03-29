<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    // public function index(Request $request)
    // {
    //     $this->data['welcome'] = 'Học Lập Trình Laravel';
        // $this->data['content'] = '<h3>Chương 1: Nhập môn laravel</h3>
        // <p>Kiến thức 1</p>
        // <p>Kiến thức 2</p>
        // <p>Kiến thức 3</p>
        // ';

        // $this->data['index'] = 1;
        // $this->data['dataArr'] = [
        //     'item1',
        //     'item2',
        //     'item3',
        // ];

        // $this->data['number'] = 9;
        // $this->data['message'] = 'Đặt hàng thành công';
        // $this->data['title'] = 'Trang chủ';
        // return view('layouts.clients.home', $this->data);
    //     return view('home', $this->data);
    // }

    // public function products()
    // {
    //     $this->data['title'] = 'sản phẩm';
    //     return view('clients.products', $this->data);
    // }

    // public function admin(Request $request)
    // {
    //     $url = $request->url();

    //     $path = $request->path();

    //     $fullUrl = $request->fullUrl();

    //     $fullUrlwQuery = $request->fullUrlWithQuery(['name' => 'phat']);

    //     if ($request->is('admin/*')) {
    //         echo '<h1 style="margin-left:37%;color:blue;">Xin chào Admin đẹp traiii <br></h1>';
    //     }

    //     if ($request->isMethod('GET')) {
    //         $method = '<br> Method is ' . $request->method();
    //     } else {
    //         $method = 'Hông Phải Method GET';
    //     }

    //     echo 'URL is ' . $url . '<br> PATH is ' . $path
    //         . '<br> Full URL is ' . $fullUrl
    //         . '<br> Full URL with QUERY is ' . $fullUrlwQuery
    //         .  $method;
    //     dd($request->all());
    // }

    // public function ipAddress(Request $request)
    // {
    //     $ip = $request->ip();
    //     echo 'Địa chỉ IP người dùng là: ' . $ip;
    // }
    // public function getAdd()
    // {
    //     $this->data['title'] = 'Thêm sản phẩm';

    //     return view('layouts.clients.add', $this->data);
    // }

    // public function postAdd(Request $request)
    // {
    //     dd($request);
    // }
    // public function putAdd(Request $request)
    // {
    //     dd($request);
    // }

    public function index()
    {
        $items = [
            ['name' => 'Traditional Wear'],
            ['name' => 'Western Wear'],
            ['name' => 'Swim & Beachwear'],
            ['name' => 'Winter & Seasonal Wear'],
            ['name' => 'Beauty & Grooming'],
            ['name' => 'Juwelley'],
            ['name' => 'Personal care Appliances'],
            ['name' => 'International Brands'],
            ['name' => 'Foot Wear'],
            ['name' => 'Watches'],
            ['name' => 'Accessories']
        ];
        $images = [
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '200 Bdt',
                'discount' => '350 Bdt',
                'image' => 'https://st.mngbcn.com/rcs/pics/static/T6/fotos/S20/67043272_02_B.jpg?ts=1699273974829&imwidth=360&imdensity=2'
            ],
            [
                'name' => 'DZert Panda Kids',
                'price' => '200 Bdt',
                'discount' => '700 Bdt',
                'image' => 'https://m.media-amazon.com/images/I/61iR9NMcKpL._AC_UY1100_.jpg'
            ],
            [
                'name' => 'High Quality Child School',
                'price' => '2200 Bdt',
                'discount' => '6500 Bdt',
                'image' => 'https://ae01.alicdn.com/kf/HTB1Q6DDOFXXXXcSXXXXq6xXFXXXK/229367521/HTB1Q6DDOFXXXXcSXXXXq6xXFXXXK.jpg?size=108222&height=792&width=750&hash=927f66dcfbccb7bb70aa8dd286cc99f7'
            ],
            [
                'name' => '3 in 1 School Bag',
                'price' => '2400 Bdt',
                'discount' => '3400 Bdt',
                'image' => 'https://media.takealot.com/covers_images/1680a65eb435464e8b94f73e0f58d63f/s-pdpxl.file'
            ],
            [
                'name' => 'ADSON Pricess Travel School',
                'price' => '2004 Bdt',
                'discount' => '3550 Bdt',
                'image' => 'https://m.media-amazon.com/images/I/51G5ioU8U8L._AC_UY1100_.jpg'
            ]
        ];
        return view('client', ['items' => $items], ['images' => $images]);
    }
}

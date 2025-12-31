<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Sample featured products data
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Áo Thun Basic Cotton',
                'price' => 250000,
                'original_price' => 320000,
                'discount' => 20,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCJ1XEypopUbyvcYLU34kmBl4V9IsDrm4PMTrssSTVUfVUsVogUS9FLAiU5Fs-UuXd8PpfejzqwZx5xDeW3pb17aip_nX2BHM8YrEyWCzjV4XNItReRsTpA8YBP88zIXPxo5O0O3rHPL_V3im1gupM1WpIcAcAFlpaxeZwgjoPV1512wlCbcXfJEUUeHWPWIWJLlChiCNFcCO_8nY9FxnllMfwpAt2lZWal-FRp2DC4esmKpgXX0mJ3aF-vIEfNrTJwMEO6TRHM94I'
            ],
            [
                'id' => 2,
                'name' => 'Quần Jeans Slim Fit',
                'price' => 650000,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDG7KK47hm42hzwBteKuxcOF3y6XESDKaUKV_MOFLxbTQQpiW9R_F9rRzkB-Ec8NipJC-CU6GY7YlNbZiuifvV9HZC_v2jFlDIYseAmiYT7rUi5cw6zzqkyDtDXnfQHRPmTZiTNAOqTFPDE47_81dj4UHYVtClJL92nzXpdWP2y0tolSn4Msxx0GjAQBJI56PuD0xYz-AaZfoJb1vdKDIAY7GCjgCdBuRTdhb3Yg9zGAMKdGSVNGVOAJxxwzxdV_Pg8L7KSgiMzsWg'
            ],
            [
                'id' => 3,
                'name' => 'Áo Khoác Dáng Dài',
                'price' => 1250000,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDw012RZQos866PKplIKRloPpgMWSxIvK8zKR3NXKgshPFFv0Tmr8I3fsLgOghI4VHAPV0r8GLcJXGyqJV65jLa0vy_S3Z37sEEOyGv7CXHyen8s0T3coKb_xOPZ0xZRCzUypKLkf-3veqNtFPoQoNN-V1Sq2KKdsXyDyqTufLyIJDOrKkAL7yBpTmc2r7-0xknjHW6cwNQdNPaWISINLlFr-dte1PTeW7BwuwpqOijYT2bzZnxUE6JEyVcz47LCcUzVSYNQw8tMH0'
            ],
            [
                'id' => 4,
                'name' => 'Áo Khoác Bomber',
                'price' => 850000,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCZeAN2YhACUGEJaHX_6_ZECQVAyY5VC2KPHbNQM6tPkF34oZswYq2p1jo22NOw-C1lcPAlX3gGE51HzUkO2h1d9TlvqAH4rHXAL0KqTBygLL-RIwSWP2y_GF9P7TRng6ho4c5ESdaOhGSLg6Zqbkx0vMs3vj5YIavzfvH2H-9aHr2htWeTUVQjTMmdj9Sxao9dQPkwQmbtvEvnSXIuACb28-v25hysDqgwOnAnXZ83Hu4fPI53HOKnAZ9edqGRS5K-zGkHTVWwCrQ'
            ],
        ];

        return view('home', compact('featuredProducts'));
    }
}


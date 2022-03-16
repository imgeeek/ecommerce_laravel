<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('products')->insert(
    [
    [
    'name'=>"Sandesh Neupane",
    'price'=>"23",
    'category'=>"Iphone",
    'description'=>"This iPhone is very bad",
    'gallery'=>"https://9to5mac.com/wp-content/uploads/sites/6/2021/03/notch-vs-punch-hole.jpg?resize=1024,512"
],
[
'name'=>"Sandesh Neupane",
'price'=>"23",
'category'=>"Iphone",
'description'=>"This iPhone is very bad",
'gallery'=>"https://9to5mac.com/wp-content/uploads/sites/6/2021/03/notch-vs-punch-hole.jpg?resize=1024,512"
],
[
    'name'=>"Sandesh Neupane",
    'price'=>"23",
    'category'=>"Iphone",
    'description'=>"This iPhone is very bad",
    'gallery'=>"https://9to5mac.com/wp-content/uploads/sites/6/2021/03/notch-vs-punch-hole.jpg?resize=1024,512"
]

]

);
    }
}

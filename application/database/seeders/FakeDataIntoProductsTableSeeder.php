<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class FakeDataIntoProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 전체삭제
        Product::truncate();
        // factory 사용하여 더미 데이터 입력
        Product::factory()
            ->count(100)
            ->create();
    }
}

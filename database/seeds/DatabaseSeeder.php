<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        Seller::truncate();
        DB::table('category_product')->truncate();

        $userQuantity = 10;
        $categoryQuantity = 20;
        $productQuantity = 15;
        $transactionQuantity = 12;

        factory(User::class , $userQuantity)->create();
        factory(Category::class , $categoryQuantity)->create();
        factory(Product::class , $productQuantity)->create()->each(
            function($product){
                $categories = Category::all()->random(mt_rand(1,5))->pluck('id');

                $product->categories()->attach($categories);
            });
        factory(Transaction::class , $transactionQuantity)->create();

    }
}

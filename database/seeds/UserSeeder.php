<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $users = factory(User::class, 500)
//            ->create()
//            ->each(function ($user) {
//                $user->orders()->createMany(
//                    factory(App\Order::class, 10)->make()->each(
//                        function ($order) {
//                            $order->order_items()->createMany(
//                                factory(App\OrderItem::class, 10)->make()->toArray()
//                            );
//                        }
//                    )->toArray()
//                );
//            });



        factory(User::class, 500)
            ->create()
            ->each(
            function ($user) {
                factory(App\Order::class, 10)
                    ->create(['user_id'=>$user->id])
                    ->each(
                    function ($order) use ($user) {
                        factory(App\OrderItem::class, 10)
                            ->create(['order_id'=>$order->id]);
                    }
                );
            }
        );

//        factory(User::class)->create()->each(
//            function ($user) {
//                $user->orders()->save(
//                    factory(App\Order::class, 2)->make()->each(
//                        function ($orders) {
//                            $orders->order_items()->save(
//                                factory(App\OrderItem::class, 2)->make()->each(
//                                    function ($order_item) {
//                                        $order_item->product()->save(
//                                            factory(App\Product::class)->make()->each(
//                                                function ($product) {
//                                                    $category = factory(App\Category::class)->make();
//                                                    $product->category()->associate($category);
//                                                }
//                                            )
//                                        );
//                                    }
//                                )
//                            );
//                        }
//                    )
//                );
//            }
//        );

    }
}

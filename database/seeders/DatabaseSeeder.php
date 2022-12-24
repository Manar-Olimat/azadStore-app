<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Products::create(
           
            [
                'name' => 'hoodie',
                'quantity' => '5',
                'category'=>'hoodie',
                'tags' => 'hoodie,cloth,men,women',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp0ARqdVPtp62F-o5jGEe_5wEfSekkR1d5nQ&usqp=CAU , https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn-dWGns5KhS7nrAbMLaffT0neYGyGd1AuUg&usqp=CAU',
                'price'=>'5',
                'rating'=>'3',
                'color'=>'#453C67,#6D67E4,#46C2CB,#F2F7A1',
            ]
        );
    }
}

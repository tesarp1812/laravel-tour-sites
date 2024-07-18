<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\Fakecar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('test123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call([]);
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $userId = Str::uuid();
            DB::table('users')->insert([
                'id' => $userId,
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => bcrypt('test123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            $travelId = Str::uuid();
            DB::table('m_travel_packs')->insert([
                'id' => $travelId,
                'min_pax' => $faker->numberBetween(1, 10),
                'max_pax' => $faker->numberBetween(11, 50),
                'price' => $faker->randomFloat( 100000, 1000000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $productId = (string) Str::uuid();
        DB::table('m_products')->insert([
            'id' => $productId,
            'name' => 'Sari Toga Komodo',
            'description' => 'Sari Toga Komodo Merupakan produk herbal diolah dari tanaman obat keluarga dan rempah-rempah  menjadi bubuk siap di minum dengan cara di seduh dengan air panas.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
        DB::table('m_product_details')->insert([
            'id' => (string) Str::uuid(),
            'sub_name' => 'Sari Jahe Merah',
            'm_product_id' => $productId,
            'varians' => 100,
            'price' => 25000,
            'path' => 'images/sari-toga.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('m_product_details')->insert([
            'id' => (string) Str::uuid(),
            'sub_name' => 'Sari Jahe Merah',
            'm_product_id' => $productId,
            'varians' => 300,
            'price' => 70000,
            'path' => 'images/sari-toga.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('m_product_details')->insert([
            'id' => (string) Str::uuid(),
            'sub_name' => 'Sari Campur',
            'm_product_id' => $productId,
            'varians' => 100,
            'price' => 25000,
            'path' => 'images/sari-toga.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('m_product_details')->insert([
            'id' => (string) Str::uuid(),
            'sub_name' => 'Sari Campur',
            'm_product_id' => $productId,
            'varians' => 300,
            'price' => 70000,
            'path' => 'images/sari-toga.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

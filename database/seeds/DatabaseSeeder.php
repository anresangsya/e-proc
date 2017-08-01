<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  $user = factory(App\User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'lastname' => 'Mr',
             'firstname' => 'admin'
         ]); */
        
        $product = factory(App\Product::class)->create([
             'nama_produk' => 'Modem',
             'jumlah_produk' => 10,
                'nama_supplier' => 'Samsung',
            'status_permintaan' => 'Menunggu',
             'tanggal_request' => Carbon::now()
         ]);
        
        
    }
}

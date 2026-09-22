<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::create([
            'name' => 'PT. Indofood Sukses Makmur',
            'phone' => '021-5790-0000',
            'address' => 'Jl. Pecenongan No. 1, Jakarta Pusat',
        ]);

        Supplier::create([
            'name' => 'PT. Unilever Indonesia',
            'phone' => '021-2222-5050',
            'address' => 'Jl. Jenderal Sudirman Kav. 52-53, Jakarta',
        ]);

        Supplier::create([
            'name' => 'PT. Nestlé Indonesia',
            'phone' => '021-5759-4444',
            'address' => 'Jl. Rawa Terate No. 98, Jakarta Timur',
        ]);

        Supplier::create([
            'name' => 'PT. Coca-Cola Amatil Indonesia',
            'phone' => '021-6300-7000',
            'address' => 'Jl. Benda No. 1A, Jakarta Selatan',
        ]);
    }
}

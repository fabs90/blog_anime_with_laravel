<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\table_kelas;

class kelasTable_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        table_kelas::insert([
            'kelas' => '2KA23',
            'Jurusan' => 'Sistem informasi',
        ]);
    }
}

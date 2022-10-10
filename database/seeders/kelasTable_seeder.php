<?php

namespace Database\Seeders;

use App\Models\table_kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class kelasTable_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        table_kelas::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['kelas' => '2KA24', 'jurusan' => 'Sistem Informasi'],
            ['kelas' => '2KA25', 'jurusan' => 'Sistem Informasi'],
            ['kelas' => '2KA26', 'jurusan' => 'Sistem Informasi'],
            ['kelas' => '2IA20', 'jurusan' => 'Teknik Informatika'],
            ['kelas' => '2IA21', 'jurusan' => 'Teknik Informatika'],
            ['kelas' => '2IA22', 'jurusan' => 'Teknik Informatika'],
        ];

        foreach ($data as $value) {
            table_kelas::insert([
                'kelas' => $value['kelas'],
                'Jurusan' => $value['jurusan'],
            ]);
        }

    }
}

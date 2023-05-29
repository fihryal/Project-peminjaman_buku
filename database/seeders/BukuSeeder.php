<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bukus')->insert([
            'nama_buku' => 'Laut Bercerita',
            'genre' => 'Historical',
            'komentar' => 'Duis ornare nulla eu risus vulputate placerat. Proin ac orci erat. Nunc vitae lorem ligula. Aliquam erat volutpat. Nulla diam est, luctus in sem dictum, ultrices efficitur dui. Mauris varius diam fringilla lorem sagittis vehicula. Nunc lobortis augue non lacinia lobortis. Maecenas nulla tortor, luctus sed egestas sed, condimentum at sem. Curabitur sagittis aliquet sapien et auctor. Morbi id consectetur nisl. Nunc feugiat purus a sem tristique, id pellentesque leo accumsan. Curabitur dictum ex arcu, nec efficitur ligula efficitur vel. Aenean at lacus id libero sollicitudin posuere.',
        ]);
    }
}

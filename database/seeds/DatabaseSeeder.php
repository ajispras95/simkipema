<?php

use App\Http\Controllers\didalamkampusController;
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
        $this->call(UsersTableSeeder::class);
        $this->call(didalamkampusController::class); 
        $this->call(diluarkampusController::class);
        $this->call(dokumentasieksternalController::class); 
        $this->call(dokumentasiinternalController::class);
        $this->call(rekapprestasiController::class); 
        $this->call(laporanController::class); 

            //
            $faker = Faker\Factory::create(); //import library faker
    
            $limit = 5; //batasan berapa banyak data
    
            for ($i = 0; $i < $limit; $i++) {
                DB::table('di_dalam_kampus')->insert([ //mengisi datadi database
                    'id' => $faker->id,
                    'nama_kegiatan' => $faker->nama_kegiatan,
                    'program_kerja_divisi' => $faker->program_kerja_divisi, //email unique sehingga tidak ada yang sama
                    'predikat' => $faker->predikat,
                    'waktu_pelaksanaan' => $faker->waktu_pelaksanaan,
                    'tempat' => $faker->tempat,
                    'tingkat' => $faker->tingkat,
                    'scan_bukti' => $faker->scan_bukti,
                ]);
            }
        }
        }
<?php namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;


class OrangSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                // $data = [
                //         [
                //             'nama'       => 'Sakinah Yunus',
                //             'alamat'     => 'Permata Sudiang Raya',
                //             'created_at' => Time::now(),
                //             'updated_at' => Time::now()
                //         ],
                //         [
                //             'nama'       => 'Anugrah Lestari',
                //             'alamat'     => 'Jakarta',
                //             'created_at' => Time::now(),
                //             'updated_at' => Time::now()
                //         ],
                //         [
                // z            'nama'       => 'Caca',
                //             'alamat'     => 'Tidung',
                //             'created_at' => Time::now(),
                //             'updated_at' => Time::now()
                //         ],
                // ];
                $faker = \Faker\Factory::create();
                $data = [
                     'nama'       => '$faker->name',
                     'alamat'     => '$faker->address',
                     'created_at' => Time::now(),
                     'updated_at' => Time::now()
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
                //         $data
                // );

                // Using Query Builder
                $this->db->table('orang')->insert($data);
        }
}
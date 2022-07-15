<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Member::create([
            'nama' => 'Rahmat Riyadi Syam',
            'alamat' => 'Jln Amirullah no 13',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis id sit dolore ut perspiciatis illum ad laudantium saepe dignissimos qui tempora harum necessitatibus exercitationem porro, a maiores odit molestias.',
            'email' => 'rahmatriyadi171102@gmail.com',
            'ttl' => 'sinjai, 17 - 11 - 2002'
        ]);

        Member::create([
            'nama' => 'Muh Habib Al-Rasyid',
            'alamat' => 'Jln Agatis no 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis id sit dolore ut perspiciatis illum ad laudantium saepe dignissimos qui tempora harum necessitatibus exercitationem porro, a maiores odit molestias.',
            'email' => 'habibefendi02@gmail.com',
            'ttl' => 'palopo, 05 - 05 - 2002'
        ]);

        Member::create([
            'nama' => 'Nurul Hasanatunnisa',
            'alamat' => 'Rusunawa UIN',
            'deskripsi' => 'Perkenalkan nama saya Nurul Hasanatunnisa  saat ini sedang mengampu studi s1 jurusan teknik informatika , lahir pada tanggal 22 desember 2002 ,senang bermimpi tapi sulit tidur :)',
            'email' => 'nurulhsn198011@gmail.com',
            'ttl' => 'palu, 22 - 12 - 2002'
        ]);

        Member::create([
            'nama' => 'Rizkyfauzia Ahmad',
            'alamat' => 'Panciro',
            'deskripsi' => 'Saya adalah anak kedua dari dua bersaudara, lahir di makassar 10 april 2003, hoby saya menonton',
            'email' => '60200120049@uin-alauddin.ac.id',
            'ttl' => 'makassar, 10 - 04 - 2003'
        ]);

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin123')
        ]);
    }
}

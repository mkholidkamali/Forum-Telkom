<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Profile;
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

        User::create([
            'username' => 'kk',
            'password' => bcrypt('kk')
        ]);

        Profile::create([
            'id_user' => '1',
            'nama_lengkap' => 'Mohamad Kholid Kamali',
            'kelas' => 'XII',
            'jenis_kelamin' => 'l',
            'jurusan' => 'RPL'
        ]);

        Comment::create([
            'id_user' => '1',
            'comment' => 'Komentar pertama di akun ini',
            'likes' => 1,
            'is_public' => false
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
        'name'     => 'お名前',
        'gender'   => '性別',
        'email'    => 'メールアドレス',
        'postal'   => '郵便番号',
        'adress'   => '住所',
        'billding' => '建物',
        'contents' => 'お問い合わせ内容',
        ]);//
    }
}

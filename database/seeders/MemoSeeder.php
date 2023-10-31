<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('memos')->insert([
            'title' => 'PHP',
            'body' => 'PHPは、Hypertext Preprocessorの略です。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $param = [
            [
                'title' => 'HTML',
                'body' => 'HTMLは、Hypertext Markup Languageの略です',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'CSS',
                'body' => "CSSは、\nCascading Style Sheet\nの略です。",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('memos')->insert($param);
    }
}

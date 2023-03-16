<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            'ノート', '過去問', 'レジュメ'
        ];
        $book_categories = [
            '政治経済学部', '法学部', '教育学部', '商学部',
            '社会科学部', '国際教養学部', '創造理工学部', '先進理工学部',
            '基幹理工学部', 'スポーツ科学部', '人間科学部'
        ];
        $computer_categories = [
            '政治経済学部', '法学部', '教育学部', '商学部',
            '社会科学部', '国際教養学部', '創造理工学部', '先進理工学部',
            '基幹理工学部', 'スポーツ科学部', '人間科学部'
        ];
        $display_categories = [
            '政治経済学部', '法学部', '教育学部', '商学部',
            '社会科学部', '国際教養学部', '創造理工学部', '先進理工学部',
            '基幹理工学部', 'スポーツ科学部', '人間科学部'
        ];
        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == 'ノート') {
                foreach ($book_categories as $book_category) {
                    Category::create([
                        'name' => $book_category,
                        'description' => $book_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            if ($major_category_name == '過去問') {
                foreach ($computer_categories as $computer_category) {
                    Category::create([
                        'name' => $computer_category,
                        'description' => $computer_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            if ($major_category_name == 'レジュメ') {
                foreach ($display_categories as $display_category) {
                    Category::create([
                        'name' => $display_category,
                        'description' => $display_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
     }
 }
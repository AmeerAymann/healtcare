<?php

use Illuminate\Database\Seeder;
use App\Section as Sections;


class CreateSectionSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

                $section = Sections::create([
                        'section_name' => 'Heart',
                        'Created_by' => 'admin'
                ]);
                $section2 = Sections::create([
                        'section_name' => 'Brain',
                        'Created_by' => 'admin'

                ]);
        }
}

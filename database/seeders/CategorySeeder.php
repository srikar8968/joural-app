<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            ['name' => 'Anesthesiology', 'slug' => 'anesthesiology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Cardiology', 'slug' => 'cardiology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Clinical Research', 'slug' => 'clinical-research', 'description' => '', 'meta_id' => 5],
            ['name' => 'Dentistry', 'slug' => 'dental-and-oral-health', 'description' => '', 'meta_id' => 5],
            ['name' => 'Dermatology', 'slug' => 'dermatology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Diabetes & Endocrinology', 'slug' => 'diabetes-and-endocrinology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Gastroenterology', 'slug' => 'gastroenterology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Genetics', 'slug' => 'genetics', 'description' => '', 'meta_id' => 5],
            ['name' => 'Haematology', 'slug' => 'haematology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Immunology', 'slug' => 'immunology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Infectious Diseases', 'slug' => 'infectious-diseases', 'description' => '', 'meta_id' => 5],
            ['name' => 'Medicine', 'slug' => 'medicine', 'description' => '', 'meta_id' => 5],
            ['name' => 'Microbiology', 'slug' => 'microbiology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Molecular Biology', 'slug' => 'molecular-biology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Nephrology', 'slug' => 'nephrology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Neurology', 'slug' => 'neurology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Nursing', 'slug' => 'nursing', 'description' => '', 'meta_id' => 5],
            ['name' => 'Nutrition', 'slug' => 'nutrition', 'description' => '', 'meta_id' => 5],
            ['name' => 'Oncology', 'slug' => 'oncology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Ophthalmology', 'slug' => 'ophthalmology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Orthopaedics', 'slug' => 'orthopaedics', 'description' => '', 'meta_id' => 5],
            ['name' => 'Pathology', 'slug' => 'pathology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Pediatrics', 'slug' => 'pediatrics', 'description' => '', 'meta_id' => 5],
            ['name' => 'Physicaltherapy & Rehabilitation', 'slug' => 'physicaltherapy-rehabilitation', 'description' => '', 'meta_id' => 5],
            ['name' => 'Psychiatry', 'slug' => 'psychiatry', 'description' => '', 'meta_id' => 5],
            ['name' => 'Pulmonology', 'slug' => 'pulmonology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Radiology', 'slug' => 'radiology', 'description' => '', 'meta_id' => 5],
            ['name' => 'Reproductive Medicine', 'slug' => 'reproductive-medicine', 'description' => '', 'meta_id' => 5],
            ['name' => 'Surgery', 'slug' => 'surgery', 'description' => '', 'meta_id' => 5],
            ['name' => 'Toxicology', 'slug' => 'toxicology', 'description' => '', 'meta_id' => 5],
        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}

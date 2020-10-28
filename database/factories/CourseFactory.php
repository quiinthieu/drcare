<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ['Lecture', 'Online', 'Lab', 'Hybrid'];
        return [
            'name' => $this->faker->randomElement(['Head and Neck Anatomy','Dental Anatomy and Histology
            ','Biological Science']),
            'description' => $this->faker->randomElement(['This module examines the anatomical structures and functions of the orofacial region relevant to oral health practice. The module will focus on the hard and soft tissues of the head and neck region. At the end of the module, the students will be able to identify and differentiate the anatomical structures, functions and landmarks of the orofacial region.
            ','This module provides the student with the basic foundations of Dental Anatomy which deals with the macroscopic and microscopic study of the structure and development of teeth and their supporting structures. Students will be able to differentiate the forms and functions of primary and secondary dentition and understand the pathological changes that could occur in the oral cavity.
            ','This module examines basic principles of human biology and studies the musculoskeletal, haematological, cardiovascular and respiratory systems. The structure, functions and abnormities of cells and tissues will be discussed. At the end of the module, the student will be able to describe the various cells, tissues and systems of the human body.
            ']),
            'type' => $this->faker->randomElement($types),
            'professor' => $this->faker->name(),
        ];
    }
}

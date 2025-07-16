<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InternshipBenefit>
 */
class InternshipBenefitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $benefits = [
            [
                'icon' => '🎯',
                'title' => 'Develop Industry Skills',
                'description' => 'Gain hands-on experience with professional broadcasting equipment, software, and techniques used in the media industry.'
            ],
            [
                'icon' => '🤝',
                'title' => 'Build Professional Networks',
                'description' => 'Connect with industry professionals, experienced journalists, and creative professionals who can guide your career.'
            ],
            [
                'icon' => '💼',
                'title' => 'Contribute to Real Projects',
                'description' => 'Work on actual TV productions, news segments, and media campaigns that reach thousands of viewers.'
            ],
            [
                'icon' => '🚀',
                'title' => 'Boost Confidence',
                'description' => 'Develop independence, leadership skills, and professional confidence in a supportive learning environment.'
            ],
        ];
        $item = $this->faker->randomElement($benefits);
        return [
            'icon' => $item['icon'],
            'title' => $item['title'],
            'description' => $item['description'],
        ];
    }
}

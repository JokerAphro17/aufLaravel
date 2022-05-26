<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     * @var string 
     * 
     */
    protected $model = Etudiant::class;
    /** 
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->dateTimeBetween('-60 years', '-18 years'),
            'date_abonne' => $this->faker->dateTimeBetween('-18 years', 'now'),
            'email' => $this->faker->email,
            'telephone' => $this->faker->phoneNumber,
        ];
    }
}

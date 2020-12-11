<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'nama_pegawai'  => $this->faker->name($gender),
            'jenis_kelamin' => $gender,
            'email'         => $this->faker->unique()->safeEmail,
            'alamat'        => $this->faker->address,
        ];
    }
}

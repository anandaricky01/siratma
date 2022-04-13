<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disposisi>
 */
class DisposisiFactory extends Factory
{
    private static $angka = 109;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_urut' => self::$angka++,
            'no_agenda' => 'Z/' . strtoupper(Str::random(5)) . '/' . $this->faker->numberBetween(1,9),
            'no_surat' => 'NRT/' . strtoupper(Str::random(5)) . '/' . $this->faker->numberBetween(1,9) . '/2022',
            'dari' => $this->faker->name(),
            'tanggal_disposisi' => $this->faker->dateTimeBetween('-3 week', '-1 week'),
            'diterima_tanggal' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'perihal' => $this->faker->sentence(5),
            'sifat' => $this->faker->numberBetween(1,4)
        ];
    }
}

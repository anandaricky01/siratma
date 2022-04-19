<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuratMasuk>
 */
class SuratMasukFactory extends Factory
{
    private static $angka = 90;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_urut' => self::$angka++,
            'no_surat' => 'N/' . $this->faker->numberBetween(100,900) . '/' . strtoupper(Str::random(5)) . '/2022',
            'kode' => $this->faker->numberBetween(1,800),
            'box' => $this->faker->numberBetween(1,3),
            'isi_ringkas' => $this->faker->sentence(5),
            'dari_kepada' => $this->faker->name(),
            'lampiran' => $this->faker->numberBetween(1,4),
            'pengolah' => $this->faker->name(),
            'tanda_diterima' => '-',
            'catatan' => $this->faker->sentence(10),
            'perihal' => $this->faker->sentence(2),
            'tanggal_surat' => $this->faker->dateTimeBetween('-3 week', 'now'),
            'tanggal_diteruskan' => $this->faker->dateTime('now','+2 week')
        ];
    }
}

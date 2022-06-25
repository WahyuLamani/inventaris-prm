<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class Barangfactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Barang::class;
    public function definition()
    {
        $merk =['adidas', 'nike', 'spotek', 'belden', 'axioo'];
        return [
            'nama_barang' => $this->faker->name('male'),
            'cabang_id' => 1,
            'harga' => $this->faker->randomDigit,
            'merk' => array_rand($merk),
            'type' => 'coba',
            'nomor_seri' => $this->faker->ean8,
            'tahun' => '2022',
            'vendor' => $this->faker->company
        ];
    }
}
